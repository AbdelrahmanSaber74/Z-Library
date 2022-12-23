<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
 
    public function index()
    {
        $catagories = catagory::all();
        return view("admin.catagory" , compact('catagories'));
    }

   
    public function create()
    {
        return view('admin.addcatagory');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'photo' => 'required',
        ]);
    

        $imges = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('catagories', $imges ,'publiccatagory');

        catagory::create([
            'name' => $request->name,
            'path' => $path ,
        ]);

      return redirect()->route('catagory.index');

    }


    public function edit($id)
    {
        $catagory = catagory::find($id);
        return view('admin.editcatagory' , compact('catagory')) ;
    }

    public function update(Request $request  , $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        $catagory = catagory::find( $id);

        $catagory->update([

            'name' => $request->name , 
     
        ]);

        return redirect()->route('catagory.index') ;
    }




}
