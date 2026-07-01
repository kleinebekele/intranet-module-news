<?php

namespace Intranet\Modules\News\Http\Controllers;

use Illuminate\Http\Request;
use Intranet\Modules\News\Models\NewsPost;

/**
 * Ein ganz normaler Laravel-Controller. Er muss nichts Besonderes erben –
 * $request->validate() genügt für die Formularprüfung.
 */
class NewsController
{
    public function index()
    {
        $posts = NewsPost::latest()->get();

        return view('news::index', compact('posts'));
    }

    public function create()
    {
        return view('news::create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        NewsPost::create($data + ['user_id' => $request->user()->id]);

        return redirect()
            ->route('module.news.index')
            ->with('status', 'Beitrag wurde veröffentlicht.');
    }
}
