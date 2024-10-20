<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manager_form()
    {
        return view('admin.manager_form');
    }

    public function manager_list()
    {
        $users = User::where('usertype', 'manager')->paginate(8);
        return view('admin.manager_list', compact('users'));
    }
    

    public function manager_create()
    {
        return view('admin.manager_create');
    }

    public function manager_save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:16', // Fixed validation rule
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('manager_list')->with('success', 'New user added successfully');
    }

    public function manager_view()
    {
        return view('admin.manager_view');
    }

    public function manager_edit($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        return view('admin.manager_edit', compact('user'));
    }

    public function manager_update(string $email, Request $request)
    {
        $user = User::where('email', $email)->firstOrFail();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Exclude current email
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->route('manager_list')->with('success', 'User updated successfully');
    }

    public function manager_delete($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        $user->delete();

        return redirect()->route('manager_list')->with('success', 'User deleted successfully');
    }

    public function loanofficer_list()
    {
        return view('admin.loanofficer_list');  
    }

    public function loan_list()
    {
        return view('manager.loan_list');  
    }

  
    
}
