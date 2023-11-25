<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileNizamController extends Controller
{
    public function index()
    {   
        $user = auth()->user();
        return view('profile_nizam.index', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {   
        // dd($request->all());
        $current_password_matched = true;
        $current_password = User::find($id)->password;
        if ($request->current_password == null) {

            $request->validate([
                'username' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
            ]);

            $validated['username'] = $request->username;
            $validated['first_name'] = $request->first_name;
            $validated['last_name'] = $request->last_name;
            $validated['email'] = $request->email;
            $validated['phone'] = $request->phone;

            User::where('id', $id)->update($validated);
            return redirect()->route('profilenizam-index')->with('success', 'Profile updated successfully');

        } else {
            $current_password_matched = Hash::check($request->current_password, $current_password);
        }

        if ($current_password_matched) {

            $request->validate([
                'username' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
                'new_password' => 'required|string',
                'repeat_new_password' => 'required|string|same:new_password',
            ]);

            $validated['username'] = $request->username;
            $validated['first_name'] = $request->first_name;
            $validated['last_name'] = $request->last_name;
            $validated['email'] = $request->email;
            $validated['phone'] = $request->phone;
            $validated['password'] = bcrypt($request->new_password);

            User::where('id', $id)->update($validated);
            return redirect()->route('profilenizam-index')->with('success', 'Profile updated successfully');

        } else {
            $request->validate([
                'username' => 'required|string|max:255',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:255',
            ]);
            return redirect()->route('profilenizam-index')->with('error', 'Wrong password, please try again');
        }
    }
}
