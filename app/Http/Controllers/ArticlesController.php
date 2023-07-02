<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if(request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }
        else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
//        $article = Article::findOrFail($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // persist the new article
//        dump(request()->all());

        // clean up

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    public function destroy()
    {

    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
