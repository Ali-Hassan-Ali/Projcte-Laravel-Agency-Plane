<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\User;
use App\Models\Plane;
use App\Models\Company;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () 
    {
    	$planes_count 		= Plane::count();
    	$Companys_count 	= Company::count();
    	$Reservations_count = Reservation::count();
    	$users_count 		= User::whereRoleIs('admin')->count();
    	return view('dashboard.welcome',compact('users_count','planes_count','Companys_count','Reservations_count'));
    }
}
