@extends('layouts.adminnavbar')


@section('title')
    Edit Catagories
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

<form class="pure-form pure-form-stacked" method="POST" action="{{route('catagory.update' , $catagory->id)}}">
@method("PUT")
    @csrf

    <table>
        <fieldset class="pure-group">

        <tr>
        <td>Catagories Name</td>
        <td>
        <input type="text"  placeholder="Enter Title" name="name" value="{{$catagory->name}}" />
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