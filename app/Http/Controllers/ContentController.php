<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contents = Content::query();

        $title = $request->get('keyword');
        $category = $request->get('category');

        $contents->when($title, function ($query) use ($title) {
            return $query->whereRaw("title LIKE '%" . strtolower($title) . "%'");
        });

        $contents->when($category, function ($query) use ($category) {
            return $query->where('category', '=', $category);
        });

        return view("contents.index", ['contents' => $contents->orderBy('id', 'DESC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contents.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            "title" => "required|string",
            "description" => "required|string",
            "image" => "required",
            "category" => "required|in:AGENDA,BERITA"
        ];

        Validator::make($request->all(), $rules)->validate();

        $new_content = new Content;

        $new_content->title = $request->get('title');
        $new_content->description = $request->get('description');
        $new_content->category = $request->get('category');
        $new_content->user_id = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image')->store('content-thumbnails', 'public');
            $new_content->image = $file;
        }

        $new_content->save();
        return redirect()->route("contents.create")->with('status', 'Content created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::with(["user"])->findOrFail($id);
        return view('contents.detail', ['content' => $content]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::with(["user"])->findOrFail($id);
        return view('contents.edit', ['content' => $content]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            "title" => "string",
            "description" => "string",
            "category" => "in:AGENDA,BERITA"
        ];

        Validator::make($request->all(), $rules)->validate();

        $content = Content::with(["user"])->findOrFail($id);

        $content->title = $request->get('title');
        $content->description = $request->get('description');
        $content->category = $request->get('category');

        if ($request->file('image')) {
            if ($content->image && file_exists(storage_path('app/public/' . $content->image))) {
                Storage::delete('public/' . $content->image);
            }
            $file = $request->file('image')->store('content-thumbnails', 'public');
            $content->image = $file;
        }

        return redirect()->route('contents.edit', [$id])->with('status', 'User succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        Storage::delete('public/' . $content->image);
        $content->delete();

        return redirect()->route("contents.index")->with('status', 'User deleted successfully');
    }

    public function indexAgenda()
    {
        $contents = Content::where('category', '=', "AGENDA")->orderBy('id', 'DESC')->paginate(9);

        return view('public.agenda.agenda', ['contents' => $contents]);
    }

    public function indexBerita()
    {
        $contents = Content::where('category', '=', "BERITA")->orderBy('id', 'DESC')->paginate(9);

        return view('public.berita.berita', ['contents' => $contents]);
    }

    public function showBerita($id)
    {
        $content = Content::with(["user"])->findOrFail($id);
        return view('public.berita.detailBerita', ['content' => $content]);
    }

    public function showAgenda($id)
    {
        $content = Content::with(["user"])->findOrFail($id);
        $currentContents = Content::where('category', '=', "AGENDA")
            ->where('id', '!=', $id)
            ->orderBy('id', 'DESC')
            ->paginate(3);

        return view('public.agenda.detailAgenda', ['content' => $content, 'indexs' => $currentContents]);
    }
}
