<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\UploadTrait;

class DocumentController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $query = Document::orderBy('id', 'desc');

        $viewName = 'community.index';

        if ($type == 'notice') {
            $query = $query->where('type', '공지사항');
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/up17-1.png";
        }
        if ($type == 'news') {
            $query = $query->where('type', 'news');
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/KakaoTalk_Photo_2016-05-26-15-43-56_33.png";
        }
        if ($type == 'gallery') {
            $viewName = 'community.gallery';
            $query = $query->where('type', '갤러리');
            $imgUrl = "http://julienwaffle.com/wp-content/uploads/2016/05/up18.png";
        }
        $documents = $query->paginate(10);

        return view($viewName, compact('documents', 'imgUrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community.create');
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
            'type' => 'required',
            'title' => 'required',
            'content' => 'required',
            'main_image' => 'required',
        ]);

        $document = new Document([
            'type' => $request->get('type'),
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'main_image' => $request->get('main_image'),
        ]);
        
        $url = $this->uploadFile($request, 'main_image');
        $document->main_image = $url;
        $document->save();

        return redirect()->route('community.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document, $type, $id)
    {
        $document = Document::find($id);
        
        $document->view_count ++;
        $document->save();

        return view('community.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document, $id)
    {
        $document = Document::find($id);

        return view('community.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document, $id)
    {
        $document = Document::find($id);

        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'content' => 'required',
            'main_image' => 'required',
        ]);

        $document = new Document;
        $document->type = $request->get('type');

        return redirect()->route('community.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document, $id)
    {
        $document = Document::find($id);
        $document->delete();

        return redirect()->route('docu.admin');
    }

    public function admin(Document $document)
    {
        $documents = Document::all();
        // $documents = DB::table('documents')->orderBy('id', 'desc')->paginate(20);

        return view('community.admin', compact('documents'));
    }

    public function adshow($id)
    {
        $document = Document::find($id);

        return view('community.adshow', compact('document'));
    }
}
