<?php

namespace App\Http\Controllers;

use App\Models\Flatlock;
use Illuminate\Http\Request;

class FlatlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flatlock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect('/home/applicants/final-result');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flatlock $flatlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flatlock $flatlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flatlock $flatlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flatlock $flatlock)
    {
        //
    }
}
