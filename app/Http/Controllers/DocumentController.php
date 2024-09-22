<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models;
use Illuminate\Support\Carbon;


class DocumentController extends Controller
{

  public function show_all()
  {
    $doc = DB::table('documents')
    ->orderBy('end_date')
    ->get();

    $users = DB::table('users')
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users);
  }

  public function show_active()
  {

    $doc = DB::table('documents')
    ->orderBy('end_date')
    ->where('doc_name', 'kontrakt')
    ->get();

    $users = DB::table('users')
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users);
  }

  public function show_unactive()
  {
    $doc = DB::table('documents')
    ->orderBy('end_date')
    ->get();

    $users = DB::table('users')
    ->get();

    return view('layouts.documents.documents')
    ->with('doc', $doc)
    ->with('users', $users);
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

        return redirect('/documents');
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

        return redirect('/documents');
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
