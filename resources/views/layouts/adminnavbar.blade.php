<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cssfile/adminstyle.css')}}">
    <link rel="stylesheet" href=
    "https://unpkg.com/purecss@1.0.0/build/pure-min.css" 
              integrity=
    "sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" 
              crossorigin="anonymous">
    
    <!-- CSS only -->
    <title>@yield('title')</title>
</head>
<body>

        <!-- Navbar Section Starts Here -->

    @section('navbar')
        <section class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="" title="Logo">
                        <img src="{{asset('imges/clipart2765762.png')}}" alt="Restaurant Logo" class="img-responsive">
                    </a>
                </div>
   

                <div class="menu text-right">
                    <ul>

                        <li>
                            <a href="{{route('Admiin.home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('Admin.create')}}">Add Book</a>
                        </li>
                       
                        <li>
                            <a href="{{route('Admin.index')}}">Edit Book</a>
                        </li>

                        <li>
                            <a href="{{route('catagory.index')}}">Catagory</a>
                        </li>
                        <li> 
                            <form  method="POST" action="{{ route('logout') }}">
                            @csrf
                
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                            <!-- Navbar Section Ends Here -->
                            
                        </li>

                    </ul>
                </div>

                {{-- <div class="clearfix"></div> --}}
            

            </div>
        </section>
        <!-- Navbar Section Ends Here -->
    @show



    @section('homeimg')

    <img class="bg" src="{{asset('imges/landingbook.jpg')}}" alt="HomeImg">
        
    @show

@section('footer')
    
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Abdelrahamn Saber</a></p>
        </div>
    </section>
    
    @show 
 


    


</body>
</html>