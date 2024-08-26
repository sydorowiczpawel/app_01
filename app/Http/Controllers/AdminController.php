<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Document;
use App\Models\Tank;
use App\Models\LeaveForm;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   */

//    Shows ADMIN main page
  public function index()
  {
      return view ('layouts.admin.adminHome');
  }

//   Showss all documents
  public function getDocs()
  {
      return view ('layouts.admin.adminHome');
  }

//   Shows all soldiers
  public function getSoldiers()
  {

    // Kadra kierownicza
    $commander = DB::table('users')
    ->where('job_name', 'dowódca kompanii')
    ->get();
    // dd($commander);

    $boss = DB::table('users')
    ->where('job_name', 'szef kompanii')
    ->get();

    $technician = DB::table('users')
    ->where('job_name', 'technik kompanii')
    ->get();

    $gun_technician = DB::table('users')
    ->where('job_name', 'technik uzbrojenia')
    ->get();

    // Pluton I
    $p1_c = DB::table('users')
    ->where('job_name', 'dowódca plutonu')
    ->where('platoon', 'I')
    ->get();

    $p1_pdp= DB::table('users')
    ->where('platoon', 'I')
    ->where ('job_name', 'pomocnik dowódcy plutonu')
    ->get();

    $p1_od= DB::table('users')
    ->where('platoon', 'I')
    ->where ('job_name', 'kierowca - starszy instruktor')
    ->get();

    $p1_d= DB::table('users')
    ->where('platoon', 'I')
    ->where ('job_name', 'kierowca')
    ->get();

    // Pluton II
    $p2_c = DB::table('users')
    ->where('job_name', 'dowódca plutonu')
    ->where('platoon', 'II')
    ->get();

    $p2_pdp= DB::table('users')
    ->where('platoon', 'II')
    ->where ('job_name', 'pomocnik dowódcy plutonu')
    ->get();

    $p2_od= DB::table('users')
    ->where('platoon', 'II')
    ->where ('job_name', 'kierowca - starszy instruktor')
    ->get();

    $p2_d= DB::table('users')
    ->where('platoon', 'II')
    ->where ('job_name', 'kierowca')
    ->get();

    // Pluton III
    $p3_c = DB::table('users')
    ->where('job_name', 'dowódca plutonu')
    ->where('platoon', 'III')
    ->get();

    $p3_pdp= DB::table('users')
    ->where('platoon', 'III')
    ->where ('job_name', 'pomocnik dowódcy plutonu')
    ->get();

    $p3_od= DB::table('users')
    ->where('platoon', 'III')
    ->where ('job_name', 'kierowca - starszy instruktor')
    ->get();

    $p3_d= DB::table('users')
    ->where('platoon', 'III')
    ->where ('job_name', 'kierowca')
    ->get();

    // Pluton IV
    $p4_c = DB::table('users')
    ->where('job_name', 'dowódca plutonu')
    ->where('platoon', 'IV')
    ->get();

    $p4_pdp= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'pomocnik dowódcy plutonu')
    ->get();

    $p4_od= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'kierowca - starszy instruktor')
    ->get();

    $p4_d= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'kierowca')
    ->get();

    return view ('layouts.admin.allSoldiers')
    ->with('commander', $commander)
    ->with('boss', $boss)
    ->with('technician', $technician)
    ->with('gun_technician', $gun_technician)
    ->with('p1_c', $p1_c)
    ->with('p1_pdp', $p1_pdp)
    ->with('p1_od', $p1_od)
    ->with('p1_d', $p1_d)
    ->with('p2_c', $p2_c)
    ->with('p2_pdp', $p2_pdp)
    ->with('p2_od', $p2_od)
    ->with('p2_d', $p2_d)
    ->with('p3_c', $p3_c)
    ->with('p3_pdp', $p3_pdp)
    ->with('p3_od', $p3_od)
    ->with('p3_d', $p3_d)
    ->with('p4_c', $p4_c)
    ->with('p4_pdp', $p4_pdp)
    ->with('p4_od', $p4_od)
    ->with('p4_d', $p4_d)
    ;
  }

//   Shows all tanks
  public function getTanks()
  {
      return view ('layouts.admin.adminHome');
  }

//   Shows all Leave Forms
  public function getLeaveForms()
  {
      return view ('layouts.admin.adminHome');
  }

//   Shows unverified users
  public function getUnverified()
  {
      return view ('layouts.admin.adminHome');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function createSoldier()
  {
      return view('layouts.admin.addSoldier');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function storeUser(Request $request)
  {
    $passNumber = $request->input('passNumber');
    $rank = $request->input('rank');
    $firstName= $request->input('firstName');
    $lastName = $request->input('lastName');
    $job_name = $request->input('job_name');
    $coy = $request->input('coy');
    $platoon = $request->input('platoon');
    $team = $request->input('team');
    $email = $request->input('email');
    $password = Hash::make($request->input('password'));

    DB::table("users")
    ->insert(
      [
        'passNumber'=>$passNumber,
        'rank'=>$rank,
        'firstName'=>$firstName,
        'lastName'=>$lastName,
        'job_name'=>$job_name,
        'coy'=>$coy,
        'platoon'=>$platoon,
        'team'=>$team,
        'email'=>$email,
        'password'=>$password,
      ]
      );
      return redirect('/allSoldiers');
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

// update users
// set passNumber = 'AA001'
// where email like 'sydor@wp.pl';
