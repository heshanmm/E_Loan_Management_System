<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manager_form()
    {
        return view('admin/manager_form');
    }
    public function loanofficer_form()
    {
        return view('admin/loanofficer_form');
    }

//11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111

   
}
