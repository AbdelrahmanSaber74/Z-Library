@extends('layouts.adminnavbar')


@section('title')
    Edit Page
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

<form class="pure-form pure-form-stacked" method="POST" action="{{route('Admin.update' , $book->id)}}">
@method('PUT')
@csrf
    <table>
        <fieldset class="pure-group">

        <tr>
        <td>Book Title</td>
        <td>
        <input type="text"  placeholder="Enter Title" name="title" value="{{$book->title}}" />
        </td>
        </tr> 


        <tr>
            <td>Author Name</td>
            <td>
            <input type="text"  placeholder="Enter Author Name" name="author" value="{{$book->author}}" />
            </td>
         </tr> 

         <tr>
            <td>description </td>
            <td>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </td>
         </tr> 


         <tr>
            <td>Price</td>
            <td>
            <input type="text"  placeholder="Enter Price"   name="price" value="{{$book->price}}"/>
            </td>
         </tr> 
            
        <tr>
            <td>Edition Date</td>
            <td>
            <input type="date"  placeholder="Enter first name" name="edition" value="{{$book->edition}}" />
            </td>
        </tr>


        <tr>
            <td>Submission Date</td>
            <td>
            <input type="date"  placeholder="Enter first name" name="submission" value="{{$book->submission}}" />
            </td>
        </tr>

            

            <tr>
                <td>
                <input type="submit"  value="Submit" />
                </td>
                </tr> 
    
   </fieldset>

    </table>

</form>

@endsection

@section('homeimg')

@endsection


@section('footer')
@parent

@endsection