<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programStudi;

class programStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programStudis = programStudi::where('id', '<', 90)->get();
        return view('programStudi')->with('programStudis', $programStudis);
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
        //
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
