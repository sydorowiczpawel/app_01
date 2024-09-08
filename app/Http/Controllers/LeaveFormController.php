<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getLeaveForms()
  {
    return view ('layouts.leave_forms.allLeaveForms');
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $tank = DB::table('tanks')
        ->where('id', $id)
        ->get();

        $user = DB::table('users')
        ->get();

        return view('layouts.leave_forms.new')
        ->with('tank', $tank)
        ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
