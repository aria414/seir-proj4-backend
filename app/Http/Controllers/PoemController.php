<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poem;

class PoemController extends Controller
{
    //
    public function index () {
        // Response function allows us to send response
        return response(Poem::all(), 200)
        ->header('Content-Type', 'application/json');
    }
    public function show($id){
        return response(Poem::findOrFail($id), 200)
        ->header('Content-Type', 'application/json');
    }

    public function edit(Request $request, $id)
    {
        $edit = Poem::Find($id);
        // $edit->title = $request->title;
        // $edit->content = $request->content;
        // $edit->translation = $request->translation;
        $edit->citation = $request->citation;
        // $edit->comment = $request->comment;
        //  $edit->intextref = $request->intextref;
        // $edit->recitedby = $request->recitedby;
        // $edit->language = $request->language;
        // $edit->bgimage = $request->bgimage;
        $edit->save();
        
        return response()->json($edit);
    }

    // public function create(Request $request)
    // {
    //     $newpoem = new Poem;
    //     $newpoem->title = $request->title;
    //     $newpoem->content = $request->content;
    //     $newpoem->translation = $request->translation;
    //     $newpoem->citation = $request->citation;
    //     $newpoem->comment = $request->comment;
    //     $newpoem->intextref = $request->intextref;
    //     $newpoem->recitedby = $request->recitedby;
    //     $newpoem->language = $request->language;
    //     $newpoem->bgimage = $request->bgimage;
    //     $newpoem->save();
        
    //     return response()->json($newpoem);
      
    // }
}
