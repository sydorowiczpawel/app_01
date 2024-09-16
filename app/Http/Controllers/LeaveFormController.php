<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveFormController extends Controller
{

  public function show()
  {
    $form = DB::table('leaveforms')
    ->get();

    return view ('layouts.leave_forms.leaveForms')
    ->with('form', $form);
  }

  public function create_empty()
  {
    $tank = DB::table('tanks')
    ->get();

    $users = DB::table('users')
    ->get();

    $driver = DB::table('users')
    ->get();

    return view('layouts.leave_forms.new_empty')
    ->with('veh', $tank)
    ->with('users', $users)
    ->with('driver', $driver);
  }

  public function create_vehID($id)
  {
    $tank = DB::table('tanks')
    ->where('id', $id)
    ->get();

    $users = DB::table('users')
    ->get();

    $driver = DB::table('users')
    ->get();

    return view('layouts.leave_forms.new_with_vehID')
    ->with('tank', $tank)
    ->with('users', $users)
    ->with('driver', $driver);
  }

  public function create_userID($p_num)
  {
    $tank = DB::table('tanks')
    ->get();

    $user = DB::table('users')
    ->where('passNumber', $p_num)
    ->get();

    return view('layouts.leave_forms.new_with_userID')
    ->with('tank', $tank)
    ->with('users', $user);
  }

  public function store_empty(Request $request)
  {

    $seria_rozkazu = $request->input('series');
    $vehicle = $request->input('vehicle');
    $kierowca = $request->input('driver');
    $km_przed = $request->input('km_before');

    DB::table('leaveforms')
    ->insert(
      [
        'user_id' => $kierowca,
        'veh_id' => $vehicle,
        'series' => $seria_rozkazu,
        'km_before_use' => $km_przed,
      ]
    );

    return redirect('/leaveForms');
  }

  public function store_vehID(Request $request, $id)
  {

    $seria_rozkazu = $request->input('series');
    $vehicle = $id;
    $kierowca = $request->input('driver');
    $km_przed = $request->input('km_before');

    DB::table('leaveforms')
    ->insert(
      [
        'user_id' => $kierowca,
        'veh_id' => $vehicle,
        'series' => $seria_rozkazu,
        'km_before_use' => $km_przed,
      ]
    );

    return redirect('/leaveForms');
  }

  public function store_userID(Request $request, $p_num)
  {

    $seria_rozkazu = $request->input('series');
    $vehicle = $request->input('vehicle');
    $kierowca = $p_num;
    $km_przed = $request->input('km_before');

    DB::table('leaveforms')
    ->insert(
      [
        'user_id' => $kierowca,
        'veh_id' => $vehicle,
        'series' => $seria_rozkazu,
        'km_before_use' => $km_przed,
      ]
    );

    return redirect('/leaveForms');
  }

  public function storeBasic(Request $request)
  {
    $seria_rozkazu = $request->input('series');
    $kierowca = $request->input('driver');
    $km_przed = $request->input('km_before');
    $veh = $request->input('vehicle');

    DB::table('leaveforms')
    ->insert(
      [
        'user_id' => $kierowca,
        'veh_id' => $veh,
        'series' => $seria_rozkazu,
        'km_before_use' => $km_przed,
      ]
    );

    return redirect('/leaveForms');
  }

  public function edit(string $id)
  {
    $form = DB::table('leaveforms')
    ->where('id', $id)
    ->get();

    return view('layouts.leave_forms.edit')
    ->with('form', $form);
  }

  public function storeChanges(Request $request, $id)
  {
    $km_po = $request->input('km_after');

    DB::table('leaveforms')
    ->where('id', $id)
    ->update(
      [
        'km_after_use' => $km_po,
      ]
    );

    return redirect('/leaveForms');
  }

  public function update(Request $request, string $id)
  {
      //
  }

  public function destroy(string $id)
  {
      //
  }
}
