<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
      // $user = User::find($id);
      // dd($id);

      $user = DB::table('users')
      ->where('id', $id)
      ->get();

      return view('layouts.admin.editUser')
      ->with('user', $user);
    }

    public function assign(string $id)
    {
      // $user = User::find($id);
      // dd($id);

      $user = DB::table('users')
      ->where('id', $id)
      ->get();

      return view('layouts.soldiers.assign')
      ->with('user', $user);
    }

    public function store(Request $request, $id)
    {
      // dd($id);

      $rank = $request->input('rank');
      $job_name = $request->input('job_name');
      $coy = $request->input('coy');
      $platoon = $request->input('platoon');
      $team = $request->input('team');

      // dd($rank, $job_name, $coy, $platoon, $team);

      DB::table("users")
      ->where('id', $id)
      ->update(
        [
          'rank' => $rank,
          'job_name' => $job_name,
          'coy' => $coy,
          'platoon' => $platoon,
          'team' => $team,
        ]
      );

      return redirect('/allSoldiers');
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
