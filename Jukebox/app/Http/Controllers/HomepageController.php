<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class HomepageController extends Controller
{
    public function index(Request $request)
    {
        var_dump($_POST);

        if ($request->has('id')) {
            // this is editing an existing record
            $query = 
               "SELECT * 
                FROM `songs`
                WHERE `id` = ?
                LIMIT 1
            ";
            $record = DB::selectOne($query, [
                $request->input('id')
            ]);
        } else {
            // this is creating a new record, create an empty object
            $record = (object)[
                'id'          => null,
                'author'      => null,
                'song'        => null,
                'code'        => null,
                'URL'         => null,
                'added'       => null,
            ];
        }

        // if the form was submitted
        if ($request->method() == 'POST') {
 
            // validate request data
            $this->validate($request, [
                'author' => 'required',
                'song' => 'required',
                'code' => 'required',
                'URL' => 'required',
            ]);
 
            // update the data from request
            $record->author = $request->input('author');
            $record->song = $request->input('song');
            $record->code = $request->input('code');
            $record->URL = $request->input('URL');
            $record->added = $request->input('added');

 
            // save the data
            if ($request->has('id')) {
                // update existing record
                $query = 
                   "UPDATE `songs`
                    SET `author` = ?,
                        `song` = ?,
                        `code` = ?,
                        `URL` = ?,
                        `added` = ?
                    WHERE `id` = ?
                    LIMIT 1
                ";
                DB::update($query, [
                    $record->author,
                    $record->song,
                    $record->code,
                    $record->URL,
                    $record->added,
                    $record->id,
                ]);
            } else {
                // insert a new record
                $query = 
                   "INSERT 
                    INTO `songs`
                    (`author`, `song`, `code`, `URL`, `added`)
                    VALUES
                    (?, ?, ?, ?, ?)
                ";
                DB::insert($query, [
                    $record->author,
                    $record->song,
                    $record->code,
                    $record->URL,
                    $record->added
                ]);

                $record->id = DB::getPdo()->lastInsertId();

            }

            Session::flash("success_message", "Song has been successfully submitted.");
            
            return redirect("jukebox/edit?id=".$record->id);
        }

        $edit_form = view("jukebox/edit", [
            "record" => $record
        ]);

        return view('jukebox/jukebox', [
            "content" => $edit_form
        ]);
    }
}