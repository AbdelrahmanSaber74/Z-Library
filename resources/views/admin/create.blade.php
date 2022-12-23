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



<form class="pure-form pure-form-stacked" method="POST"  enctype="multipart/form-data" action="{{route('Admin.store')}}" >

@csrf
    <table>

        <fieldset class="pure-group">

        <tr>
        <td>Book Title</td>
        <td>
        <input type="text"  placeholder="Enter Title" name="title" />
        </td>
        </tr> 


        <tr>
            <td>Author Name</td>
            <td>
            <input type="text"  placeholder="Enter Author Name"   name="author"/>
            </td>
         </tr> 

         <tr>
            <td>description </td> 
            <td>
                <textarea name="description" id="" cols="30" rows="10"></textarea>

            </td>
         </tr> 

         <tr>
            <td>img </td>
            <td>
                <input type="file" name="photo" >
            </td>
         </tr> 


         <tr>
            <td>Price</td>
            <td>
            <input type="text"  placeholder="Enter Price"   name="price"/>
            </td>
         </tr> 
            
         
         <tr>
            <td>Catagories</td>
            <td>
                <select name="id" >

                    @foreach ($data as $item)
                    <option name="id" value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach

                </select>

            </td>
         </tr> 
            
        <tr>
            <td>Edition Date</td>
            <td>
            <input type="date"  placeholder="Enter first name" name="edition" />
            </td>
        </tr>


        <tr>
            <td>Submission Date</td>
            <td>
            <input type="date"  placeholder="Enter first name" name="submission" />
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
