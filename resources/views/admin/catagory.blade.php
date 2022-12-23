@extends('layouts.adminnavbar')

@section('title')
    Show Page
@endsection


@section('navbar')
@parent

<div class="container">

  <a href="{{route('catagory.create')}}"> <button>AddCatagoris</button></a>

</div>

<h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="black">Responsive</span></h1>
    <h2>Created by Abdelrahman Saber </h2>
    
    <table class="tablecontainer">

      <thead>
        <tr>

          <th><h1>Id</h1></th>
          <th><h1>Name</h1></th>
          <th><h1>Imges</h1></th>
          <th><h1>created_at</h1></th>
          <th><h1>updated_at</h1></th>
          <th><h1>Actions</h1></th>
        </tr>
      </thead>

      <tbody>

       @foreach ($catagories as $catagory)
      <tr>

        <td>{{$catagory->id}}</td>
        <td>{{$catagory->name}}</td>
        <td><img src="{{asset('imges/'. $catagory->path )}}" width="70px" height="70px" alt="No img"></td>
        <td>{{$catagory->created_at}}</td>
        <td>{{$catagory->updated_at}}</td>
        <td>

            <a href="{{route('catagory.edit' , $catagory->id)}}">Edit</a>

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