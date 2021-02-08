<?php

namespace App\Http\Controllers\Dashboard;
use app\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () 
    {
    	$users_count = User::whereRoleIs('admin')->count();
    	return view('dashboard.welcome',compact('users_count'));
    }
}
