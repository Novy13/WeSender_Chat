<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WeSender | Dashboard</title>
        
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/uikit.min.css')}}" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!--font-->
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">


        <script src="{{url('js/uikit.min.js')}}"></script>
        <script src="{{url('js/uikit-icons.min.js')}}"></script>
 

    </head>
<body>

<div class="hq-wrapper">

<div id="menu-top" class="uk-container uk-container-large">
    <nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left">
        <h1 class="logo">WeSender</h1>

        <ul class="uk-navbar-nav">
    </ul>

    </div>
 
    <div class="uk-navbar-right">



    <a href="{{ route('login') }}" class="uk-button login-btn">Login</a>




    <a href="{{ route('register') }}" class="uk-button uk-box-shadow-medium signup-btn">Register</a>



</nav>

</div>

<div id="hq-slideshow" class="uk-container uk-container-large">

 @yield('content')
</div>
</div>
<div class="copyright">
<p>DEVELOPED BY GROUP 1</p>
</div>  
</body>
</html>