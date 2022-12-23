@extends('layouts.adminnavbar')

@section('title')
    Create Page
@endsection


@section('navbar')
@parent

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="pure-form pure-form-stacked" method="POST"  enctype="multipart/form-data" action="{{route('catagory.store')}}" >

@csrf
    <table>

        <fieldset class="pure-group">
        <tr>
        <td>Catagory Name</td>
        <td>
        <input type="text"  placeholder="Enter Catagory Name" name="name" />
        </td>
        </tr> 

         <tr>
            <td>img </td>
            <td>
                <input type="file" name="photo" >
            </td>
         </tr> 
         <tr>
            <td>
                <input type="submit" value="submit" >
            </td>
         </tr> 
   
   </fieldset>

    </table>

</form>

@endsection

@section('homeimg')

@endsection


