<?php

namespace App\Http\Controllers;

use App\Models\Overlock;
use Illuminate\Http\Request;

class OverlockController extends Controller
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
        return view('overlock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect('/home/flatlock/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Overlock $overlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Overlock $overlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Overlock $overlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Overlock $overlock)
    {
        //
    }
}
