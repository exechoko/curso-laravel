<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function getIndex(){

      $notes = DB::table('notes')->get();

      return view('notes.index', array(
        "notes"=>$notes
      ));

      /*foreach ($notas as $note) {
        echo $note->title."<br>";
      }
      return 'Index Notas';*/
    }

    public function getNote($id){
      //conseguir una nota en concreta con where
      $note = DB::table('notes')->select('id', 'title', 'description')->where('id',$id)->first();

      if (empty($note)) {
        return redirect()->action('NotesController@getIndex');
      }


      return view('notes.note', array(
        'note' => $note

      ));
    }

    public function postNote(Request $request){
      $note = DB::table('notes')->insert(array(
        'title' => $request->input('title'),
        'description' => $request->input('description')
      ));

      return redirect()->action('NotesController@getIndex');
    }

    public function getSaveNote(){
      return view('notes.saveNote');
    }
}
