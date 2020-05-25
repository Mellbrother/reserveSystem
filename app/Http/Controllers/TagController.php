<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    
    public function index()
    {
        return view('tag.index');
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Tag::$rules);
        $tag = new Tag;
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/tag');
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tag.show', ['tag' => $tag]);
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Tag::$rules);
        $tag = Tag::find($id);
        unset($form['_token']);
        $tag->fill($form)->save();
        return redirect('/tag');
    }

    public function destroy($id)
    {
        Tag::find($id)->delete();
        return redirect('/tag');
    }
}
