@extends('layouts.master')

@section('content')
<div class="uk-card uk-grid-collapse uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container uk-width-3-5@l uk-width-5-2@s">
    <video width="320" height="240" controls autoplay loop>
        <source src="images/bg1.mp4" type="video/mp4">
        </video>
</div>
    <div class="uk-width-2-5@l uk-width-1-2@s">
        <div class="uk-card-body">
            <h1 class="uk-card-title">WELCOME TO WeSender</h1>
            <h3>It is a Simple Chat Application developed by Group 1. It uses Laravel Livewire Package and Polling Method. It allows you to interact to other who are registered in the Software for Free.</h3>
            <a href="{{ route('login') }}" class="uk-button started uk-box-shadow-medium">Explore </a>
        </div>
    </div>
</div> 
@endsection
</div>
    </body>
</html>
