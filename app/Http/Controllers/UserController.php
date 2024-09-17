<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function personalFile($p_num)
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
      ->where('user_id', $p_num)
      ->get();

      return view('layouts.soldiers.personalFile')
      ->with('user', $user)
      ->with('veh', $veh)
      ->with('doc', $doc)
      ->with('l_f', $l_f);
  }

  public function show_all()
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

    $p1_ins= DB::table('users')
    ->where('platoon', 'I')
    ->where ('job_name', 'instruktor')
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

    $p2_ins= DB::table('users')
    ->where('platoon', 'II')
    ->where ('job_name', 'instruktor')
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

    $p3_ins= DB::table('users')
    ->where('platoon', 'III')
    ->where ('job_name', 'instruktor')
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

    $p4_ins= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'instruktor')
    ->get();

    $p4_od= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'kierowca - starszy instruktor')
    ->get();

    $p4_d= DB::table('users')
    ->where('platoon', 'IV')
    ->where ('job_name', 'kierowca')
    ->get();

    $others= DB::table('users')
    ->where ('job_name', NULL)
    ->get();

    return view ('layouts.soldiers.soldiers')
    ->with('commander', $commander)
    ->with('boss', $boss)
    ->with('technician', $technician)
    ->with('gun_technician', $gun_technician)
    ->with('p1_c', $p1_c)
    ->with('p2_c', $p2_c)
    ->with('p3_c', $p3_c)
    ->with('p4_c', $p4_c)
    ->with('p1_pdp', $p1_pdp)
    ->with('p2_pdp', $p2_pdp)
    ->with('p3_pdp', $p3_pdp)
    ->with('p4_pdp', $p4_pdp)
    ->with('p1_ins', $p1_ins)
    ->with('p2_ins', $p2_ins)
    ->with('p3_ins', $p3_ins)
    ->with('p4_ins', $p4_ins)
    ->with('p1_od', $p1_od)
    ->with('p2_od', $p2_od)
    ->with('p3_od', $p3_od)
    ->with('p4_od', $p4_od)
    ->with('p1_d', $p1_d)
    ->with('p2_d', $p2_d)
    ->with('p3_d', $p3_d)
    ->with('p4_d', $p4_d)
    ->with('others', $others);
  }

  public function create()
  {
    return view('layouts.soldiers.create_soldier');
  }

  public function store(Request $request, $id)
  {

    $rank = $request->input('rank');
    $job_name = $request->input('job_name');
    $coy = $request->input('coy');
    $platoon = $request->input('platoon');
    $team = $request->input('team');

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

    return redirect('/soldiers');
  }

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
    $isActive = 1;

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
        'is_active' => $isActive,
      ]
      );
      return redirect('/soldiers');
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

  public function update(Request $request, $id)
  {
      $rank = $request->input('rank');
      $job = $request->input('job_name');
      $coy = $request->input('coy');
      $platoon = $request->input('platoon');
      $team = $request->input('team');
      $isActive = 1;

      // dd($id, $rank, $job, $coy, $platoon, $team);

      DB::table('users')
      ->where('id', $id)
      ->update(
        [
          'rank'=> $rank,
          'job_name' => $job,
          'coy' => $coy,
          'platoon' => $platoon,
          'team' => $team,
          'is_active' => $isActive
        ]
        );

        return redirect('/soldiers');
  }

  public function activateUserForm($id)
  {
      // $user = User::find($id);

      $user = DB::table('users')
        ->where('id', $id)
        ->get();

      return view('layouts.admin.editUser')
      ->with('user', $user);
  }

  public function unactive_soldier($id)
  {
    $unactive = 'nieaktywny';
    $zero = 0;

    DB::table('users')
    ->where('id', $id)
    ->update(
      [
        'rank' => $unactive,
        'job_name' => $unactive,
        'coy' => $unactive,
        'platoon' => $unactive,
        'team' => $unactive,
        'is_active' => $zero
      ]
    );

    return redirect('/soldiers');
  }

}
