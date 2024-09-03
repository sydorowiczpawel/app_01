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

    public function showSoldier($p_num)
    {
        $user = DB::table('users')
        ->where('passNumber', $p_num)
        ->get();

        $veh = DB::table('tanks')
        ->where('passNumber', $p_num)
        ->get();

        $doc = DB::table('documents')
        ->where('passNumber', $p_num)
        ->get();

        $l_f = DB::table('leaveforms')
        ->get();

        return view('layouts.soldiers.personalFile')
        ->with('user', $user)
        ->with('veh', $veh)
        ->with('doc', $doc)
        ->with('l_f', $l_f);
    }

    public function create()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

      $user = DB::table('users')
      ->where('id', $id)
      ->get();

      return view('layouts.soldiers.editSoldier')
      ->with('user', $user);
    }

    public function assign(string $id)
    {

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

    public function update(Request $request, $id)
    {
        $rank = $request->input('rank');
        $job = $request->input('job_name');
        $coy = $request->input('coy');
        $platoon = $request->input('platoon');
        $team = $request->input('team');

        // dd($id, $rank, $job, $coy, $platoon, $team);

        DB::table('users')
        ->where('id', $id)
        ->update(
          [
            'rank'=> $rank,
            'job_name' => $job,
            'coy' => $coy,
            'platoon' => $platoon,
            'team' => $team
          ]
          );

          return redirect('/allSoldiers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
