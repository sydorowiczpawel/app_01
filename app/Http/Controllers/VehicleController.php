<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tank;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function index()
  {
    $vehicle = DB::table('tanks')
    ->get();

      return view ('layouts.vehicles.allVehicles')
      ->with('vehicle', $vehicle);
  }

  public function create()
  {
      return view('layouts.vehicles.addVehicle');
  }

  public function store(Request $request)
  {
    $przepustka = $request->input('passNumber');
    $producent = $request->input('manufacturer');
    $model = $request->input('model');
    $numer = $request->input('number');

    DB::table("tanks")
    ->insert(
      [
        'passNumber'=>$przepustka,
        'manufacturer'=>$producent,
        'model'=>$model,
        'vehicle_number'=>$numer,
      ]
      );
      return redirect('/allVehicles');
  }

  public function show($id)
  {
    $veh = DB::table("tanks")
    ->where('id', $id)
    ->get();

    return view ('layouts.vehicles.singleVehicle')
      ->with('veh', $veh);
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
    // $p = $request->input('platoon'); - najpierw trzeba zmienić bazę danych a potem zrobić edycję nr plutonu
    $nr = $request->input('vehicleNumber');

    DB::table("tanks")
    ->where('id', $id)
    ->update(
      [
        'passNumber'=>$p_num,
        // 'platoon'=>$p,
        'vehicle_number'=>$nr,
      ]
      );
      return redirect('/allVehicles');
  }

  public function destroy($id)
  {
    $t = DB::table('tanks')
    ->where('id', $id)
    ->delete();

    return redirect('/allVehicles');
  }
}
