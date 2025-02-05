<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Folder;
class FolderController extends Controller
{
    public function index(){
        $folders = Folder::all();
        return view('admin.layouts.pages.folders.index',compact('folders'));
    }

    public function create(){
        return view('admin.layouts.pages.folders.create');
    }

    public function store(Request $request){
        Folder::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('folders.index');
    }


    public function edit($id){
        $folder = Folder::find($id);
        return view('admin.layouts.pages.folders.edit',compact('folder'));
    }

    public function update(Request $request , $id){
        $folder = Folder::find($id);
        $folder->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('folders.index');

    }


    public function destroy($id){
        $folder = Folder::find($id);
        $folder->delete();
              return redirect()->route('folders.index');

    }
}
