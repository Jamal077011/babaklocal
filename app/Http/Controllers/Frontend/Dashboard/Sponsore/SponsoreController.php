<?php

namespace App\Http\Controllers\Frontend\Dashboard\Sponsore;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Company;
use App\Models\Dashboard\Employer;
use App\Models\Dashboard\EmployerFile;
use App\Models\Dashboard\jobTitle;
use App\Models\Dashboard\Nationality;
use App\Models\Dashboard\Sponsore;
use Illuminate\Http\Request;

class SponsoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nationalities = Nationality::all();
        $job_titles = jobTitle::all();
        return view('frontend.dashboard.pages.sponsore.create', compact('nationalities', 'job_titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sponsored = Sponsore::where('employer_id', $id)->orderBy('created_at', 'desc')->get();
        return view('frontend.dashboard.pages.sponsore.index', compact('sponsored'));
    }
    public function show_single(string $id)
    {
        $sponsored = Sponsore::findOrFail($id);
        return view('frontend.dashboard.pages.sponsore.show', compact('sponsored'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
