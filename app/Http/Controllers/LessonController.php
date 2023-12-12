<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use Omnipay\Omnipay;

class LessonController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'instructor' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'documents' => 'nullable|file',
            'videos' => 'nullable|mimes:mp4,mov,ogx,oga,ogv,ogg,qt',
            'description' => 'nullable|string',
        ]);
    
        // Handle image upload
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('lesson_images', 'public') : null;
    
        // Handle document upload
        $documentPath = $request->hasFile('documents') ? $request->file('documents')->store('lesson_documents', 'public') : null;
    
        // Handle video upload
        $videoPath = $request->hasFile('videos') ? $request->file('videos')->store('lesson_videos', 'public') : null;
    
        // Create lesson
        $lesson = new Lesson([
            'title' => $request->input('title'),
            'instructor' => $request->input('instructor'),
            'price' => $request->input('price'),
            'image_path' => $imagePath,
            'documents' => $documentPath,
            'videos' => $videoPath,
            'description' => $request->input('description'),
        ]);
    
        $lesson->save();
    
        return redirect()->route('home');
    }
    

   


    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }
}
