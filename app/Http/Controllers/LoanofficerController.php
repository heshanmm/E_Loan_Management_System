<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoanofficerController extends Controller
{
    public function loanofficer_form()
    {
        return view('admin.loanofficer_form');
    }

    public function loanofficer_dashboard(){
        return view('loanofficer.loanofficer_dashboard');
    }

    public function loanofficer_list()
    {
        $users = User::where('usertype', 'loanofficer')->get();
        return view('admin.loanofficer_list', compact('users'));
    }

    public function loanofficer_save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('loanofficer_list')->with('success', 'New loan officer added successfully');
    }

    public function loanofficer_view()
    {
        return view('admin.loanofficer_view');
    }

    public function loanofficer_edit($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        return view('admin.manager_edit', compact('user'));
    }

    public function loanofficer_update(string $email, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $email],
        ]);

        $loanofficer = User::where('email', $email)->firstOrFail();
        $loanofficer->update($validatedData);

        return redirect()->route('loanofficer_list')->with('success', 'Loan officer updated successfully');
    }

    public function loanofficer_delete($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        $user->delete();

        return redirect()->route('loanofficer_list')->with('success', 'User deleted successfully');
    }

    public function emi_calculator()
    {
        return view('loanofficer.emi_calculator');
    }
}
