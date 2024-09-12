<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DocumentController extends Controller
{

  public function allDocs()
  {
      $docs = DB::table('documents')
      ->get();

      $users = DB::table('users')
      ->get();

      return view('layouts.documents.allDocs')
      ->with('docs', $docs)
      ->with('users', $users);
  }

  public function show($id)
  {
    $doc = DB::table('documents')
    ->where('passNumber', $id)
    ->get();

    return view('layouts.documents.userDocuments')
    ->with('doc', $doc);
  }

  public function createEmpty()
  {
    $user = DB::table('users')
    ->get();

      return view('layouts.documents.create_empty_document')
      ->with('user', $user);
  }

  public function createWithUserID()
  {
      //
  }

  public function storeEmpty(Request $request)
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

        return redirect('/allDocuments');
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
