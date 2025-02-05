<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
class PersonController extends Controller
{
    public function index(){
        $person = Person::first();
        return view('admin.layouts.pages.person.index',compact('person'));
    }

    public function create(){
        return view('admin.layouts.pages.person.create');
    }

    public function store(Request $request){
        Person::create(attributes: [
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('person.index');
    }


    public function edit($id){
        $person = Person::find($id);
        return view('admin.layouts.pages.person.edit',compact('person'));
    }

    public function update(Request $request , $id){
        $person = Person::find($id);
        $person->update([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('person.index');

    }


    public function destroy($id){
        $person = Person::find($id);
        $person->delete();
        return redirect()->route('person.index');
    }
}
