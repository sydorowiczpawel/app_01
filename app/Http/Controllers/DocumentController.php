<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;



class DocumentController extends Controller
{

  public function show_all()
  {
    $p_num = Auth::user() -> passNumber;

    $doc = DB::table('documents')
    ->orderBy('end_date')
    ->get();

    $users = DB::table('users')
    ->get();

    $userDocs = DB::table('documents')
    ->where('passNumber', $p_num)
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users)
    ->with('userDocs', $userDocs);
  }

  public function show_active()
  {
    $p_num = Auth::user() -> passNumber;
    $today = date('Y-m-d');

    $doc = DB::table('documents')
    ->where('end_date', '>', $today)
    ->orderBy('end_date')
    ->get();

    $users = DB::table('users')
    ->get();

    $userDocs = DB::table('documents')
    ->where('passNumber', $p_num)
    ->where('end_date', '>', $today)
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users)
    ->with('userDocs', $userDocs);
  }

  public function show_unactive()
  {
    $p_num = Auth::user() -> passNumber;
    $today = date('Y-m-d');

    $doc = DB::table('documents')
    ->where('end_date', '<', $today)
    ->orderBy('end_date')
    ->get();

    $users = DB::table('users')
    ->get();

    $userDocs = DB::table('documents')
    ->where('passNumber', $p_num)
    ->where('end_date', '<', $today)
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users)
    ->with('userDocs', $userDocs);
  }

  public function create_empty()
  {
    $users = DB::table('users')
    ->get();

      return view('layouts.documents.new_empty')
      ->with('user', $users);
  }

  public function create_userID($id)
  {
    $users = DB::table('users')
    ->where('passNumber', $id)
    ->get();

      return view('layouts.documents.new_with_userID')
      ->with('user', $users);
  }

  public function store(Request $request)
  {
      $name = $request->input('doc_name');
      $number = $request->input('doc_number');
      $owner = $request->input('doc_owner');
      $date_from = $request->input('from');
      $date_to = $request->input('to');

      DB::table('documents')
      ->insert(
        [
          'doc_name' => $name,
          'doc_number' => $number,
          'passNumber' => $owner,
          'start_date' => $date_from,
          'end_date' => $date_to
        ]
        );

        return redirect('/documents/all');
  }

  public function store_userID(Request $request, $id)
  {
      $name = $request->input('doc_name');
      $number = $request->input('doc_number');
      $owner = $request->input('doc_owner');
      $date_from = $request->input('from');
      $date_to = $request->input('to');

      DB::table('documents')
      ->insert(
        [
          'doc_name' => $name,
          'doc_number' => $number,
          'passNumber' => $owner,
          'start_date' => $date_from,
          'end_date' => $date_to
        ]
        );

        return redirect('/documents/all');
  }

  public function edit(string $id)
  {
      //
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
