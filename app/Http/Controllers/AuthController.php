<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Password;
use Session;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function signup_user(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'password' =>'required|string|min:6'
        ]);

        /* เขียนบันทึกแบบที่ 1 */
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->role = 'admin';
        $rec = $user->save();

        if ($rec) {

            return back()->with('success','You have Registered successfuly');

        }else{

            return back()->with('fail','You have Registered fail');
        }
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user)
        {
            // User not found
            return back()->with('fail', 'The email address does not exist in our records.');
        }

        if (!Hash::check($credentials['password'], $user->password))
        {
            // Password does not match
            return back()->with('fail', 'The provided password is incorrect.');
        }

        if($user->activate==null)
        {
            return back()->with('fail', 'User is not Active.');
        }

        $remember = $request->has('remember');
        // Attempt to log in the user
        if (Auth::attempt($credentials, $remember))
        {

            $request->session()->regenerate();

            $user = Auth::user();

            switch($user->role)
            {
                case 'admin': return redirect('admin/dashboard');
                case 'manager': return redirect('manager/dashboard');
                default:
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    return redirect('auth')->with('fail', 'Role not assigned!');
            }
        }

        // Catch-all for unexpected failure (should rarely happen)
        return redirect('auth')->with('fail', 'Unable to log in. Please try again later.');

    }

    public function profile_update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image'))
        {
            $validated = $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024']); // 2MB max
            $remove_img = DB::table('users')->where('id',$data['id'])->get();

            if($remove_img->first()->image <> '')
            {
                $image_path = public_path('img_admin\\').$remove_img->first()->image;

                if(file_exists($image_path)){ @unlink($image_path);}

                User::where('id','=',$data['id'])->update(['image'=>null]);
            }

            $image_tmp = $request->file('image');
            $imageName = $request->id.'.'.$request->image->extension();
            $image_path = 'img_admin/'.$imageName;

            Image::make($image_tmp)->resize(231, 171)->save($image_path);
            // Store the image in the "public/img_admin" directory
            //$request->image->move(public_path('img_admin'), $imageName);

            User::where('id','=',$data['id'])->update(['image'=>$imageName]);
        }


        if(Auth::user()->email == $data['email'])
        {
            User::where('id','=',$data['id'])->update([
                'name'=>$data['name'],
                'phone'=>$data['phone'],
                'role'=>$data['role']
            ]);
        }
        else
        {
            $validated = $request->validate(['email' => 'required|string|email|max:255|unique:users']);

            User::where('id','=',$data['id'])->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'role'=>$data['role']
            ]);
        }

        if($request->input('activate') == 'on'){

            User::where('id','=',$data['id'])->update(['activate'=>$request->input('activate')]);

        }else{

            User::where('id','=',$data['id'])->update(['activate'=>null]);
        }

        if($data['current_password'] <> null)
        {
            if (!Hash::check($data['current_password'], Auth::user()->password))
            {
                return back()->with(['current_password' => 'The provided password does not match our records.']);

            }else{

                if($data['password'] == $data['confirmpassword'])
                {
                    $hashedPassword = Hash::make($data['password']);

                    User::where('id','=',$data['id'])->update(['password'=>$hashedPassword]);

                    return redirect('admin/profile')->with(['success' => 'Update Password successfully..']);

                }else{

                    return back()->with(['confirmpassword' => 'The Confirm Password does not match.']);
                }
            }
        }

       return redirect('admin/profile')->with('success', 'User Edit successfully.');
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth');

    }

    // public function sendResetLinkEmail(Request $request)
    // {
    //     $request->validate(['email' => 'required|email|exists:users,email']);

    //     $status = Password::sendResetLink($request->only('email'));

    //     // Check if the reset link was sent successfully
    //     if ($status === Password::RESET_LINK_SENT) {
    //         // If successful, return a success message
    //        return redirect('auth')->withErrors(['status' => 'A password reset link has been sent to your email address.']);

    //     }

    //     return back()->withErrors(['email' => 'We were unable to send a password reset link to the provided email address.']);

    // }

    public function sendResetLink(Request $request)
    {

        $request->validate(['email' => 'required|email|exists:users,email']);

        $token = Str::random(64);

        DB::table('password_resets')->insert(['email'=>$request->email, 'token'=>$token, 'created_at'=>Carbon::now()]);

        $action_link = route('password.reset',['token'=>$token,'email'=>$request->email]);

        $body ="We are received a request to reset the password for <b> Your Laravel 8 App ARU</b> account associated with".$request->email."You can reset your password by clicking the link below";

        Mail::send('auth.email-forgot',['action_link'=>$action_link,'body'=>$body],function($message) use($request){
            $message->from('noreply@example.com','You App Name');
            $message->to($request->email,'You name')->subject('Reset Password');
        });

        return redirect('auth/forgotfrom')->withErrors(['status' => 'A password reset link has been sent to your email address.']);
    }

    public function ResetPasswordUpdate(Request $request)
    {

         $check_token = DB::table('password_resets')->where(['email'=>$request->email, 'token'=>$request->token])->first();

        if($check_token){

            User::where(['email'=>$request->email])->update(['password'=> Hash::make($request->password)]);

            DB::table('password_resets')->where(['email'=>$request->email])->delete();

            return redirect('auth')->withErrors(['status' => 'You password has been changed ! You can login with new password.']);

        }else{

            return redirect('auth')->with('fail', 'ไม่สามารถเปลี่ยนรหัสผ่าน');
        }
    }

}
