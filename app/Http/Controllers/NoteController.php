<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()->orderBy('created_at', 'desc')->paginate();
        return view('notes.index', ['allNotes'=> $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // \Log::debug($request);
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        Note::create($data);
        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $note = Note::find($id);
        return view('notes.show', ['note' => $note]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        return view('notes.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return view('notes.destroy');
    }
}
