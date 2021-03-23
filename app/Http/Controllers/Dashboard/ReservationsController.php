<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Plane;
use App\Models\test;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use function GuzzleHttp\Promise\all;

class ReservationsController extends Controller
{

    public function index(Request $request)
    {
        $reservations = Reservation::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('count', 'like', '%' . $request->search . '%')
                ->orWhere('plane_id', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        // $planes Company::all();
        return view('dashboard.reservations.index', compact('reservations'));
    }//end of index


    public function create()
    {
        $planes = Plane::all();
        return view('dashboard.reservations.create', compact('planes'));
    }//end of create


    public function store(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'documents' => 'required',
            'documents.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        $data = $request->except(['documents']);

        if ($request->documents) {

            foreach ($request->documents as $key => $image) {
                Image::make($image)
                    ->resize(300, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path('uploads/reservation_images/' . $image->hashName()));

                $data[$key]['documents'] = $image->hashName();
            }//end foreach
        }//end if
//        dd($data);
        test::insert($data);

        session()->flash('success', __('lang.added_successfully'));
        return redirect()->route('dashboard.reservations.index');
    }//end of store


    public function show(Reservation $reservation)
    {
        return view('dashboard.reservations.show', compact('reservation'));
    }//end of show


    public function edit(Reservation $reservation)
    {
        $planes = Plane::all();
        return view('dashboard.reservations.create', compact('reservation', 'planes'));
    }//end of eit


    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'name' => 'required',
            'count' => 'required',
            'documents.0' => 'required',
            'plane_id' => 'required'
        ]);

        $reservation->update($request->all());
        session()->flash('success', __('lang.updated_successfully'));
        return redirect()->route('dashboard.reservations.index');
    }//end of update


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        session()->flash('success', __('lang.deleted_successfully'));
        return redirect()->route('dashboard.reservations.index');
    }//end of destroy

}//end of controller
