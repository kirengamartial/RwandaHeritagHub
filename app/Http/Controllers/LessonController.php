<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function create()
    {
        return view('lessons.create');
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.update', compact('lesson'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'nullable|string',
        'image_url' => 'nullable|url',
        'documents' => 'nullable|file',
        'video_url' => 'nullable|url',
        'description' => 'nullable|string',
    ]);

    $lesson = Lesson::findOrFail($id);

    // Update only the provided fields
    $lesson->fill($request->only([
        'title','image_url', 'video_url', 'description',
    ]));

    // Update documents if provided
    if ($request->hasFile('documents')) {
        $lesson->documents = $request->file('documents')->store('lesson_documents', 'public');
    }

    $lesson->save();

    return redirect()->route('lessons.show', ['id' => $lesson->id]);
}

    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image_url' => 'nullable|url',
            'documents' => 'nullable|file',
            'video_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $lesson = new Lesson([
            'title' => $request->input('title'),
            'image_url' => $request->input('image_url'), 
            'documents' => $request->hasFile('documents') ? $request->file('documents')->store('lesson_documents', 'public') : null,
            'video_url' => $request->input('video_url'),
            'description' => $request->input('description'),
        ]);
        
        $lesson->save();

        return redirect()->route('home');
    }

    public function index()
    {

        $lessons = Lesson::all();

        return view('lessons.index', compact('lessons'));
    }

    public function showLesson()
    {

        $lessons = Lesson::all();

        return view('lessons.lesson', compact('lessons'));
    }
    
    public function destroy($id)
{
    $lesson = Lesson::findOrFail($id);
    $lesson->delete();

    return redirect()->route('home')->with('success', 'Lesson deleted successfully.');
}


    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }
}
