<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users_grid',compact('users'));
    }

    public function StoreOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'users.*.id' => 'nullable|exists:users,id', // Check if the ID exists when updating
            'users.*.name' => 'required|string|max:255',
            'users.*.email' => 'required|email|unique:users,email,' . ($request->users[0]['id'] ?? null),
            'users.*.phone' => 'required|string|max:10',
            'users.*.role' => 'required|string',
            'users.*.password' => 'required|string|min:6|confirmed',
        ], [
            'users.*.password.required' => 'The password field is required for each user.',
            'users.*.password.min' => 'The password must be at least 6 characters for each user.',
            'users.*.password.confirmed' => 'The password confirmation does not match for one or more users.',
        ]);


        foreach ($request->users as $userData) {
            if (isset($userData['id'])) {
                // Update existing user
                $user = User::find($userData['id']);
                $user->update([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'password' => Hash::make($userData['password']),
                    'phone' => $userData['phone'],
                    'role' => $userData['role']
                ]);
            } else {
                // Create a new user
                /* User::create($userData); By Amnat*/
                User::create([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'password' => Hash::make($userData['password']),
                    'phone' => $userData['phone'],
                    'role' => $userData['role']
                ]);
            }
        }

       // return redirect('admin/users')->with('success', 'Users created/updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/users')->with('success', 'User deleted successfully!');
    }
}
