<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function show_all()
  {
    $vehicles = DB::table('tanks')
    ->get();

    $user = Auth::user();
    $p_num = ($user -> passNumber);

      return view ('layouts.vehicles.vehicles')
      ->with('vehicles', $vehicles);
  }

  public function show_single($veh_id)
  {

    $veh = DB::table("tanks")
    ->where('vehicle_number', $veh_id)
    ->get();

    $user = DB::table('users')
    ->get();

    $order = DB::table('leaveforms')
    ->where('veh_id', $veh_id)
    ->get();


    return view ('layouts.vehicles.showVehicle')
      ->with('veh', $veh)
      ->with('user', $user)
      ->with('order', $order);
  }

  public function createVeh()
  {
    return view('layouts.vehicles.addVehicle');
  }

  public function userVeh($id)
  {
    $veh = DB::table('tanks')
    ->where('passNumber', $id)
    ->get();

    return view('layouts.vehicles.userVehicles')
    ->with('veh', $veh);
  }

  public function storeVeh(Request $request)
  {
    $producent = $request->input('manufacturer');
    $model = $request->input('model');
    $numer = $request->input('number');

    DB::table("tanks")
    ->insert(
      [
        'manufacturer'=>$producent,
        'model'=>$model,
        'vehicle_number'=>$numer,
      ]
      );
      return redirect('/vehicles');
  }

  public function edit($id)
  {
    $veh = DB::table('tanks')
    ->where('id', $id)
    ->get();

    $users = DB::table('users')
    ->get();

    return view('layouts.vehicles.editVehicle')
    ->with('veh', $veh)
    ->with('users', $users);
  }
  public function storeChanges(Request $request, $id)
  {
    $p_num = $request->input('passNumber');

    DB::table("tanks")
    ->where('id', $id)
    ->update(
      [
        'passNumber'=>$p_num,
      ]
      );
      return redirect('/vehicles');
  }

  public function destroy($id)
  {
    $t = DB::table('tanks')
    ->where('id', $id)
    ->delete();

    return redirect('/vehicles');
  }
}
