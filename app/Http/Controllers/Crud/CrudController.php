<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Crud;

class CrudController extends Controller
{

    //index
    public function index(){

        $cruds = Crud::get();

        return view('crud.index',compact('cruds'));
    }



    //store
    public function store(Request $request){

        $request->validate([
            'item' => 'required',
            'description' => 'required',
        ]);

        Crud::create($request->all());
     
        return redirect()->route('crud.index')
                        ->with('success','Item Created successfully.');
    }

    //update
    public function update(Request $request){

        $request->validate([
            'item' => 'required',
            'description' => 'required',
        ]);
    
        $crud->update($request->all());
    
        return redirect()->route('crud.index')
                        ->with('success','Item updated successfully');

    }

    //delete
    public function remove(Request $request){

        $crud->delete();
    
        return redirect()->route('crud.index')
                        ->with('success','Item deleted successfully');

    }
}
