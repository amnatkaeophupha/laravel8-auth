<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});

route::prefix('auth')->group(function () {
    Route::get('', [AuthController::class, 'index']);
    Route::get('signup', [AuthController::class,'signup']);
    Route::post('signup_user', [AuthController::class,'signup_user_email']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('signout', [AuthController::class,'signout']);

    Route::get('forgotfrom', function () { return view('auth.forgot_password'); });
    Route::post('forgot-password', [AuthController::class, 'sendResetLink']);
    Route::get('reset-password/{token}', function (string $token) { return view('auth.reset-password', ['token' => $token]);})->name('password.reset');
    Route::post('ResetPassword',[AuthController::class, 'ResetPasswordUpdate']);

    Route::get('email_verified/{email_verified}', function (string $email_verified) { return view('auth.user_verified_from', ['email_verified' => $email_verified]);})->name('email_verified');
    Route::post('VerifyUser',[AuthController::class, 'VerifyUser']);

});

    // Route::get('send-test-email', function () {
    //     Mail::raw('Test email body', function ($message) {
    //         $message->to('kaeophupha@gmail.com')
    //                 ->subject('Test Email');
    //     });

    //     return 'Test email sent!';
    // });

// Now, you can use both auth and role:admin middleware together in routes:
// if (!Auth::check() || Auth::user()->role !== $role) { }
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', function () { return view('admin.pages.dashboard'); });
    Route::get('profile', function () { return view('admin.pages.profile'); });
    Route::post('profile_update', [AuthController::class,'profile_update']);

    //Route::get('users', function () { return view('admin.pages.users_grid'); });
    Route::get('users', [UserController::class,'index']);
    Route::post('users/StoreOrUpdate', [UserController::class, 'StoreOrUpdate']);
    Route::resource('users', UserController::class);
});

Route::prefix('manager')->middleware(['auth', 'role:manager'])->group(function () {
    Route::get('dashboard', function () { return view('manager.dashboard'); });
});
