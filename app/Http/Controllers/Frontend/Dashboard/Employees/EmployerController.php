<?php

namespace App\Http\Controllers\Frontend\Dashboard\Employees;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employer::all();

        $employees = Employer::with('user')->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);

        // return view('frontend.dashboard.pages.employee.index', compact('employees'));

       
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('frontend.dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $emloyer = Employer::create($request->all());

        // return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emloyer = Employer::findOrFail($id);
      //  $data = json_decode($company->company_data, true);
        //$files = CompanyFile::where('company_id', $id)->orderBy('created_at', 'desc')->get();
        // return view('frontend.dashboard.pages.company.show', compact('company', 'data', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employer = Employer::findOrFail($id);

        // return view('backend.pages.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->update($request->all());

        // return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        // return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
