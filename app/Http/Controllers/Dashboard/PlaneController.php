<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Company;
use Illuminate\Http\Request;

class PlaneController extends Controller
{

    public function index(Request $request)
    {
        $planes = Plane::when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('trip', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        // $planes Company::all();
        return view('dashboard.planes.index', compact('planes'));
    }//end of index


    public function create()
    {
        $companys = Company::all();
        return view('dashboard.planes.create', compact('companys'));
    }//end of create


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'trip' => 'required',
            'Seats' => 'required',
            'ticketprice' => 'required',
            'timetrip' => 'required',
            'company_id' => 'required'
        ]);

        Plane::create($request->all());
        session()->flash('success', __('lang.added_successfully'));
        return redirect()->route('dashboard.planes.index');
    }//ed of store


    public function edit(Plane $plane)
    {
        $companys = Company::all();
        return view('dashboard.planes.edit', compact('plane','companys'));
    }//end of edit


    public function update(Request $request, Plane $plane)
    {
        $request->validate([
            'name' => 'required',
            'trip' => 'required',
            'Seats' => 'required',
            'ticketprice' => 'required',
            'timetrip' => 'required',
            'company_id' => 'required'
        ]);

        $plane->update($request->all());
        session()->flash('success', __('lang.updated_successfully'));
        return redirect()->route('dashboard.planes.index');
    }//end of update


    public function destroy(Plane $plane)
    {
        $plane->delete();
        session()->flash('success', __('lang.deleted_successfully'));
        return redirect()->route('dashboard.planes.index');
    }//end of destroy

}//end of controller
