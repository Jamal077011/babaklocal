<?php

namespace App\Http\Controllers\Frontend\Dashboard\Requests;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Sponsore;
use App\Models\Dashboard\SponsoreRequests;
use Illuminate\Http\Request;

class SponsoreRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsorerequests = SponsoreRequests::all();
        $sponsored = Sponsore::where('user_id', auth()->user()->id)->orderBy('id')->get();

        return view('frontend.dashboard.pages.action-request.sponsore-requests', compact('sponsorerequests', 'sponsored'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $sponsorerequest = SponsoreRequests::findOrFail($id);
        return view('frontend.dashboard.pages.action-request.sponsore-request-form', compact('sponsorerequest'));
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
