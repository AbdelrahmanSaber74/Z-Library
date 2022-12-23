
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="{{asset('cssfile/usershow.css')}}">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="{{asset('imges/clipart2765762.png')}}" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="{{route('user.index')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('userBooks')}}">Books</a>
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

            <div class="clearfix"></div>
        </div>
    </section>
    
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <form action="{{route('userSearch')}}" method="POST">
                @csrf
                <input type="search" name="search" placeholder="Search for Books.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container"> 
        <h2 class="text-center">Books</h2>

        @foreach ($books as $book) 
                
        <div class="food-menu-box">
            <div class="food-menu-img">
                <td><img src="{{asset('imges/'. $book->path )}}" width="70px" height="70px" alt="No img"></td>
            </div>

            <div class="food-menu-desc">
                <h4> Title : {{$book->title}} </h4>  <br>

                <h4> Author : {{$book->author}} </h4> 
                <h4 class="food-price"> price :  {{$book->price}}</h4> 

                <h4 class="food-price"> edition :  {{$book->edition}}</h4> 
                <h4 class="food-price"> submission :  {{$book->submission}}</h4> 

                <h5 class="food-detail">
                Description :   {{$book->description}} 
                </h5>

                <br>

            </div>
        </div> 

    @endforeach 
         

          <div class="clearfix"></div>
        </div>

        <p class="text-center">
            <a href="{{route('userBooks')}}">See All Books</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    
    <div class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Abdelrahamn Saber</a></p>
        </div>
    </div>
    
 
    <!-- footer Section Ends Here -->

</body>
</html>