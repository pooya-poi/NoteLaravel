<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
   
    public function index()
    {
        // $notes = Note::all()->where('id','desc');
        $notes = Note::orderBy('id','desc')->get();
        // $notes = Note::get()->simplePaginate(2);
       
        return view('notes.notes', compact('notes'));
    }

    
    public function create()
    {
        return view('notes.create');
    }

  

    public function store()
    {
       $note = new Note();

       $note->title = request('title');
       $note->body = request('body');
       $note->save();
       return redirect('/');
    }

   
    public function show($id)
    {
       return view('notes.show');
    }

    public function edit($id)
    {
     $note = Note::find($id);
     return view('notes.edit',compact('note'));
    }
   
   
    public function update($id)
    {
        $note = Note::find($id);
        $note->title = request('title');
        $note->body = request('body');
        $note->save();
        return redirect('/');
    }

      
    public function destroy($id)
    {
      $note = Note::find($id)->delete();
      return redirect('/');
    }
}
