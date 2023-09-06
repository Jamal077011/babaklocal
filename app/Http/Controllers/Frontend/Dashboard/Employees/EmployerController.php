<?php

namespace App\Http\Controllers\Frontend\Dashboard\Employees;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Employer;
use App\Models\Dashboard\EmployerFile;
use App\Models\Dashboard\jobTitle;
use App\Models\Dashboard\Nationality;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) 
    {
        $companies = Company::where('user_id', auth()->user()->id)->orderBy('id')->get();
        $job_titles = jobTitle::all();
        $employees = Employer::with('user')->where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(5);
        if($request->company){
            $employees = Employer::where('company_id', $request->company)->orderBy('created_at', 'desc')->paginate(5);
        }
        return view('frontend.dashboard.pages.employee.index', compact('employees', 'companies', 'job_titles'));

       
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $compaines = Company::where('user_id', auth()->user()->id)->orderBy('id')->get();
        $nationalities = Nationality::all();
        $job_titles = jobTitle::all();
        return view('frontend.dashboard.pages.employee.create', compact('compaines', 'nationalities', 'job_titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $user_id = auth()->user()->id;
  
        $employer = Employer::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employer = Employer::findOrFail($id);
      //  $data = json_decode($company->company_data, true);
        //$files = CompanyFile::where('company_id', $id)->orderBy('created_at', 'desc')->get();
        $files = EmployerFile::where('employer_id', $id)->orderBy('created_at', 'desc')->get();

        return view('frontend.dashboard.pages.employee.show', compact('employer', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employer = Employer::findOrFail($id);

        return view('frontend.dashboard.pages.employee.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->update($request->all());

        return redirect()->route('employee.index')->with('success', 'employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        return redirect()->route('employee.index')->with('success', 'Company deleted successfully.');
    }
}
