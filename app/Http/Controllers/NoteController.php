<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NoteController extends Controller
{
    public function __construct()
    {
        //
    }

    public function showAllNotes()
    {
        return response()->json(Note::all());
    }

    public function showOneNote($id)
    {
        return response()->json(Note::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $note = Note::create($request->all());

        return response()->json($note, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return response()->json($note, Response::HTTP_OK);
    }

    public function delete($id)
    {
        Note::findOrFail($id)->delete();

        return response('Deleted Successfully', Response::HTTP_OK);
    }
}
