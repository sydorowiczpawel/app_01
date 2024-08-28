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
}
