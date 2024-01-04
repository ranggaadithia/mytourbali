<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'thumbnail' => 'required',
            'url' => 'required'
        ]);

        if ($request->file('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnail');
        }

        Video::create([
            'thumbnail' => $validated['thumbnail'],
            'url' => $validated['url']
        ]);

        return redirect('/videos')->with('success', 'Video berhasil ditambahkan');
    }

    public function destroy(Video $video)
    {
        Video::destroy($video->id);
        Storage::delete($video->thumbnail);
        return redirect('/videos')->with('success', 'Video berhasil dihapus');
    }
}
