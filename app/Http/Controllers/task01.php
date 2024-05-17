<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud; 
use Session;
class task01 extends Controller
{
    public function add(){
        return view('Add');
    }
    public function show(){
        $showData = Crud::all();
        return view('show', compact('showData'));
    }
    public function store(Request $request){
        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->address = $request->address;
        $crud->short_description = $request->short_description;
        $crud->save();
        Session::flash('msg','Data Added Successfully');
        return redirect()->back();
       
    }
}
