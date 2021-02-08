<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index(Request $request)
    {
        $companys = Company::when($request->search, function($q) use ($request){

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('text', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        // $companys Company::all();
        return view('dashboard.companys.index', compact('companys'));
    }//end of indec


    public function create()
    {
        return view('dashboard.companys.create');
    }//end of create


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required'
        ]);

        Company::create($request->all());
        session()->flash('success', __('lang.added_successfully'));
        return redirect()->route('dashboard.companys.index');
        
    }//end of store


    public function edit(Company $company)
    {
        return view('dashboard.companys.edit', compact('company'));
    }//end of edit


    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required'
        ]);

        $company->update($request->all());
        session()->flash('success', __('lang.updated_successfully'));
        return redirect()->route('dashboard.companys.index');
        
    }//end of update


    public function destroy(Company $company)
    {
        $company->delete();
        session()->flash('success', __('lang.deleted_successfully'));
        return redirect()->route('dashboard.companys.index');
    }//end ofdestroy

}//end of controller
