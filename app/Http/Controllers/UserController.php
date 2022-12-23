<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book ;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    
    public function index(){
    
        $books = book::take(4)->get();
        return view('user.home' , compact('books'));
    }

    public function home() {

        $books = book::take(4)->get();
        return view('user.home' , compact('books')); 
    
    }


    public function books(){
        $books = book::all();
        return view('user.books' , compact('books'));
    }


    public function search(Request $request){

     $word = $request->search ;

     if($word != "") {
		$books =book::where('title','like','%'.$word.'%') 
        ->orWhere('author','like','%'.$word.'%')
        ->orWhere('description','like','%'.$word.'%')
        ->orWhere('price','like', '%'.$word.'%') 
        ->get() ;      
        return view('user.search' , compact('books') );
     }
   else {
        return 'Can\'t find ';
     }
     
    }

    public function public(){
        $books = book::all()->where('catagory_id' , '1');
        return view('user.publicbooks' , compact('books'));

    }

    public function classic(){
        $books = book::all()->where('catagory_id' , '2');
        return view('user.ClassicBooks' , compact('books'));

    }

    public function kids(){
        $books = book::all()->where('catagory_id' , '3');
        return view('user.kidsbooks' , compact('books'));

    }

}
