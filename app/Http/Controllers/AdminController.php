<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   */

//    Shows ADMIN main page
  public function devPanel()
  {
      return view ('layouts.admin.developerPanel');
  }

  public function activateUser(Request $request, $id)
  {

    $passNumber = $request->input('passNumber');
    // dd($id);

    DB::table('users')
        ->where('id', $id)
        ->update(
            [
                'passNumber'=>$passNumber
            ]
            );

            return redirect('/allSoldiers');
  }
}
