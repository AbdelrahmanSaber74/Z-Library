@extends('layouts.adminnavbar')

@section('title')
    Show Page
@endsection


@section('navbar')
@parent


<h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="black">Responsive</span></h1>
    <h2>Created by Abdelrahman Saber </h2>
    
    <table class="tablecontainer">

      <thead>
        <tr>

          <th><h1>Title</h1></th>
          <th><h1>Author</h1></th>
          <th><h1>Description</h1></th>
          <th><h1>price</h1></th>
          <th><h1>Img</h1></th>
          <th><h1>edition</h1></th>
          <th><h1>submission</h1></th>
          <th><h1>Actions</h1></th>

        </tr>
      </thead>

      <tbody>

      @foreach ($books as $book)
      <tr>

        <td  style="width: 150px">{{$book->title}}</td>
        <td style="width: 100px">{{$book->author}}</td>
        <td style="width: 250px">{{$book->description}} </td>
        <td>{{$book->price}}</td>

        <td><img src="{{asset('imges/'. $book->path )}}" width="70px" height="70px" alt="No img"></td>
        <td>{{$book->edition}}</td>
        <td>{{$book->submission}}</td>
        <td>

            <a href="{{route('Admin.edit' , $book->id)}}">Edit</a>

            <form action="{{route('Admin.destroy' , $book->id) }}" method="post">
              @method('DELETE')
              @csrf

              <button>Delete</button>

            </form>

        </td>

      </tr>
      @endforeach  



      </tbody>
    </table>
    
@endsection

@section('homeimg')

@endsection


@section('footer')
@parent

@endsection