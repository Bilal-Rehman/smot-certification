<?php

namespace App\Http\Controllers;

use App\Models\LockStitch;
use Illuminate\Http\Request;

class LockStitchController extends Controller
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
        return view('lock-stitch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect('/home/overlock/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(LockStitch $lockStitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LockStitch $lockStitch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LockStitch $lockStitch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LockStitch $lockStitch)
    {
        //
    }
}
