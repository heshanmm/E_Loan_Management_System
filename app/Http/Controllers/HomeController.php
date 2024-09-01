<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->usertype === 'admin') {
            return view('admin/admin_dashboard');
        } elseif (Auth::user()->usertype === 'manager') {
            return view('manager/manager_dashboard');
        } elseif (Auth::user()->usertype === 'loanofficer') {
            return view('loanofficer/loanofficer_dashboard');
        }
    }


    public function emi_calculator_view()
    {
        return view('loanofficer.emi_calculator');
    }
}
