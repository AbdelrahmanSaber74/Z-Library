<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book ;
use App\Models\imges;
use App\Models\catagory ;

class AdminController extends Controller
{
   
    public function index()
    {
        $books = book::all();
        $catagory = catagory::all();
        return view('admin.showbook' , compact('books' , 'catagory') ) ;
    }

    
    public function home()
    {
        return view('admin.home');
    }


    public function create()
    {
        $data = catagory::all();
        return view('admin.create' , compact('data'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'edition' => 'required',
            'submission' => 'required',
        ]);

            $imges = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('books', $imges ,'public');

            book::create([
                'catagory_id' => $request->id , 
                'title' => $request->title , 
                'author' => $request->author , 
                'description' => $request->description , 
                'price' => $request->price , 
                'edition' => $request->edition , 
                'submission' => $request->submission , 
                'path' => $path ,
            ]) ;


            return redirect()->route('Admin.index') ;

    }

    public function edit($id)
    {

         $book = book::find($id);
     return view('admin.edit' , compact('book'));
    }


    public function update(Request $request, $id)
    {
        
        $book = book::find($id);

        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'edition' => 'required',
            'submission' => 'required',
        ]);

        $book->update([

            'title' => $request->title , 
            'author' => $request->author , 
            'description' => $request->description , 
            'price' => $request->price , 
            'edition' => $request->edition , 
            'submission' => $request->submission , 


        ]);

        return redirect()->route('Admin.index') ;


    }

    
    public function destroy($id)
    {
        
        $book = book::find($id);
        book::destroy($id) ;
        return redirect()->back() ;

    }




}
