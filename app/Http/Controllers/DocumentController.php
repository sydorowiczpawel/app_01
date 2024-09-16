<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DocumentController extends Controller
{

  public function show()
  {
    $doc = DB::table('documents')
    // ->where('passNumber', $id)
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
      $owner = $request->input('doc_owner');
      $date_from = $request->input('from');
      $date_to = $request->input('to');

      DB::table('documents')
      ->insert(
        [
          'doc_name' => $name,
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
      $owner = $request->input('doc_owner');
      $date_from = $request->input('from');
      $date_to = $request->input('to');

      DB::table('documents')
      ->insert(
        [
          'doc_name' => $name,
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
