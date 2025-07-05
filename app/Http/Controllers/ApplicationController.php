<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $applications = Application::where('user_id', auth()->id())->latest()->get();

        return Inertia::render('Applications/Index', [
            'applications' => $applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $user = Auth::user();

        return Inertia::render('Applications/NewApplication',[
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = Request(data);

        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(application $application)
    {
        //
    }
}
