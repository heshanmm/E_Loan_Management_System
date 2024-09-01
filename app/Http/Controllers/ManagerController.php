<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class ManagerController extends Controller
{
    

    public function manager_form()
    {
        return view('admin.manager_form');
    }

    public function manager_list()
    {
        $users = User::where('usertype', 'manager')->get();
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

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $manager = User::findOrFail($email);

        $manager->name = $validatedData['name'];
        $manager->email = $validatedData['email'];
        $manager->save();
    }







    public function manager_delete($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        $user->delete();

        return redirect()->route('manager_list')->with('success', 'User deleted successfully');
    }
}
