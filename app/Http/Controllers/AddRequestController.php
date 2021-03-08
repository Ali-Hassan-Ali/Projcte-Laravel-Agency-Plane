<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Plane;
use App\Models\test;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AddRequestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $reservations = Reservation::all();
        $planes = Plane::all();
        return view('home.AddRequest.index',compact('reservations','planes'));
    }


    public function create()
    {
        $planes = Plane::all();
        return view('home.AddRequest.create',compact('planes'));   
    }


    public function store(Request $request)
    {
      $request_data = $request->except(['documents']);
      $request_data = $request->all();
      $request_data = array_filter($request->documents);
       //dd($request_data);
        

        if ($request->documents) {

            foreach ($request->documents as $image) {
               Image::make($image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/user_images/' . $image->hashName())); 

            }//end foreach
        }//end if 

    
        test::create($request_data);
        session()->flash('success', __('lang.added_successfully'));
        return redirect()->route('dashboard.reservations.index');
    }


    public function show($id)
    {
        $planes = Plane::find($id);
        return view('home.AddRequest.create',compact('planes'));   
    }


    public function edit(Reservation $reservation)
    {
        //
    }


    public function update(Request $request, Reservation $reservation)
    {
        //
    }


    public function destroy(Reservation $reservation)
    {
        //
    }

}//end of controller
