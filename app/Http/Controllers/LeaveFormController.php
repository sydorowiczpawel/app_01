<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaveFormController extends Controller
{

  public function getLeaveForms()
  {
    $form = DB::table('leaveforms')
    ->get();

    return view ('layouts.leave_forms.allLeaveForms')
    ->with('form', $form);
  }

  public function createEmpty()
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
  public function create($id, $passNumber)
  {
    $tank = DB::table('tanks')
    ->where('id', $id)
    ->get();

    $users = DB::table('users')
    ->get();

    $driver = DB::table('users')
    ->where('passNumber', $passNumber)
    ->get();

    return view('layouts.leave_forms.new')
    ->with('tank', $tank)
    ->with('users', $users)
    ->with('driver', $driver);
  }

  public function store(Request $request, $id, $p_num)
  {

    $seria_rozkazu = $request->input('series');
    $kierowca = $request->input('driver');
    $km_przed = $request->input('km_before');

    $veh = DB::table('tanks')
    ->where('vehicle_number', $id)
    ->get();

    $usr = DB::table('users')
    ->where('passNumber', $p_num)
    ->get();

    $order = DB::table('leaveforms')
    ->where('veh_id', $id)
    ->get();

    // $form = DB::table('leaveforms')
    // ->where('veh_id', $id)
    // ->get();

    DB::table('leaveforms')
    ->insert(
      [
        'user_id' => $kierowca,
        'veh_id' => $id,
        'series' => $seria_rozkazu,
        'km_before_use' => $km_przed,
      ]
    );

    return view('layouts.vehicles.singleVehicle')
    ->with('veh', $veh)
    ->with('user', $usr)
    ->with('order', $order);
    // return view('layouts.leave_forms.allLeaveForms')
    // ->with('form', $form);
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

    return redirect('/allLeaveForms');
  }

  public function show($id)
  {
    $lf = DB::table('leaveforms')
    ->where('user_id', $id)
    ->get();

    return view('layouts.leave_forms.userLeaveForms')
    ->with('lf', $lf);
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

    return redirect('allLeaveForms');
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
