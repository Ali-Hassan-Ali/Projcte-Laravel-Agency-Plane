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
     
     // dd($request->all());
        $array = [];
        if($request->has('Files')){
            foreach ($request['Files'] as  $file) {

                $logo = time()+rand(0,99) . '.' . $file->extension();
                $file->move(('images').'/' . date('d-m-Y'), $logo);
                array_push($array,'/images/'.date('d-m-Y').'/' . $logo);
               // $request['image'] = ;

            }
           

        }else{
            $store = Null;
        }
        
        $store   = json_encode($array);
        $recover = json_decode($store ,true);
        $request['documents'] = $store;

        //$save = Reservation::create($request->all());
  //dd($request->all(),$save);      

            
        Reservation::create($request->all());
        session()->flash('success', __('lang.added_successfully'));
        return redirect()->route('dashboard.reservations.index');
        
    // return redirect('mypage')->with('success', 'The record has been added succesfully!') ;












      // $request_data = $request->except(['documents']);
      // $request_data = array_filter($request->documents);

      //   if ($request->documents) {

      //       foreach ($request->documents as $image) {
      //         $request_data = Image::make($image)
      //           ->resize(300, null, function ($constraint) {
      //               $constraint->aspectRatio();
      //           })->save(public_path('uploads/reservation_images/' . $image->hashName())); 
      //           $data[] = $request_data;
      //       }//end foreach
      //   }//end if 
    
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
