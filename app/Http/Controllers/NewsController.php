<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('newses', News::paginate(10));
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'title_bangla' => 'required|string',
            'content' => 'nullable|string',
            'content_bangla' => 'nullable|string'
        ]);

        $news = new News();

        if ($request->file('image') !== null) {
            $news->image = $request->file('image')->store('public/uploads');
        }

        $news->title = $request->title;
        $news->title_bangla = $request->title_bangla;
        $news->slug = Str::slug($request->title);
        $news->content = $request->content;
        $news->content_bangla = $request->content_bangla;
        $news->published = $request->published ? 1 : 0;
        $news->save();

        return redirect()->route('admin.news.index')->with(['status' => 'success', 'message' => 'Successfuly created news.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        view()->share('news', $news);

        return view('admin.news.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string',
            'title_bangla' => 'required|string',
            'content' => 'nullable|string',
            'content_bangla' => 'nullable|string'
        ]);

        if ($request->file('image') !== null) {
            $news->image = $request->file('image')->store('public/uploads');
        }

        $news->title = $request->title;
        $news->title_bangla = $request->title_bangla;
        $news->content = $request->content;
        $news->content_bangla = $request->content_bangla;
        $news->published = $request->published ? 1 : 0;
        $news->save();

        return redirect()->back()->with(['status' => 'warning', 'message' => 'Successfuly updated news.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with(['status' => 'danger', 'message' => 'The message has been deleted.']);
    }
}
