<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function editUser(Request $request){
        $user = User::find($request->id);
        return view('profile-page', ['user' => $user]);
    }

    public function updateUser(Request $request){
        $updateUser = $request->validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|email|unique:users, email',
            'password' => 'required|min:8|max:255',
        ]);

        
        $user = User::find($request->id);
        if (empty($update['password'])) {
            $update['password'] = $user->password; // Keep existing password
        } else {
            $update['password'] = bcrypt($updateUser['password']); // Encrypt new password
        }
        $user->update($updateUser);

        return redirect()->route('editUser', ['id' => $user->id]);
    }
}
