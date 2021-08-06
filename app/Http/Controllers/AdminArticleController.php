<?php

namespace App\Http\Controllers;

use App\Models\Article;

class AdminArticleController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'articles' => Article::paginate(),
        ]);
    }

    public function show(Article $article)
    {
        return view('admin.show', [
            'article' => $article,
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        $article = new Article();
        $article->title = request('title');
        if (request('image')) {
            $article->image = request('image')->store('images');
        }
        $article->body = request('body');
        $article->save();

        return redirect('/admin')->with('message', 'Artikel telah dibuat');
    }

    public function edit(Article $article)
    {
        return view('admin.edit', [
            'article' => $article,
        ]);
    }

    public function update(Article $article)
    {
        $article->title = request('title');
        if (request('image')) {
            $article->image = request('image')->store('images');
        }
        $article->body = request('body');
        $article->save();

        return redirect('/admin')->with('message', 'Artikel telah diubah');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/admin');
    }

}
