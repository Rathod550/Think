<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends AdminController
{
    public function index()
    {
        $pagination = 9;

        if(auth()->user()->email == 'admin@gmail.com'){
            $notes = Note::latest()->paginate($pagination);
        }else{
            $notes = Note::where('user_id', auth()->user()->id)->latest()->paginate($pagination);
        }
        return view('admin.note.index', compact('notes'));
    }

    public  function create()
    {
        return view('admin.note.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:notes,title',
            'description' => 'required'
        ]);

        Note::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id
        ]);

        notificationMsg('success','Note Created Successfully');
        return redirect()->route('admin.notes');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        return view('admin.note.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255|unique:notes,title,'.$note->id,
            'description' => 'required'
        ]);

        $note->update([
            'title' => $request->title, 
            'description' => $request->description,
            'user_id' => auth()->user()->id
        ]);

        notificationMsg('info','Note Updated Successfully');
        return redirect()->route('admin.notes');
    }

    public function delete($id)
    {
        Note::find($id)->delete();
        notificationMsg('error','Note Deleted Successfully');
    }
}
