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
        if ($type == 'notice') {
            $documents = Document::all();
            $documents = DB::table('documents')->where('type', '공지사항')->orderBy('id', 'desc')->paginate(10);
        }
        if ($type == 'news') {
            $documents = Document::all();
            $documents = DB::table('documents')->where('type', 'news')->orderBy('id', 'desc')->paginate(10);
        }
        if ($type == 'gallery') {
            $documents = Document::all();
            $documents = DB::table('documents')->where('type', '갤러리')->orderBy('id', 'desc')->paginate(10);
        }

        return view('community.index', compact('documents'));
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

        return redirect()->route('community.test.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document, $id)
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
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
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

        return dirirect()->route('community.test.index');
    }

    public function admin()
    {
        return view('community.admin');
    }
}
