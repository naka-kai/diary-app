<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiaryRequest;
use App\Http\Requests\UpdateDiaryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $object = new Diary();
        $posts = $object->getData();

        return view('diary.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diary.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiaryRequest $request): RedirectResponse
    {
        $dir = 'image';

        $post = new Diary();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->file('image')->store('public/' . $dir);
        $post->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Diary::find($id);

        return view('diary.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Diary::find($id);

        return view('diary.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiaryRequest $request, $id): RedirectResponse
    {
        $dir = 'image';

        $post = Diary::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->file('image')->store('public/' . $dir);
        $post->save();

        return redirect(route('show', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $post = Diary::find($request->id);
        $post->delete();

        return redirect(route('index'));
    }
}
