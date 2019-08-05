@extends('template')

@section('content')
<div class="wrapper">
    <div id="scene" class="bg">
        <div data-depth="0.3" style="height:100vh"><img src="{{asset('first_page/1.png')}}"></div>
        <div data-depth="0.4" style="height:100vh"><img src="{{asset('first_page/2.png')}}"></div>
        <div data-depth="0.9" style="height:100vh"><img src="{{asset('first_page/3.png')}}"></div>
        <div data-depth="0.6" style="height:100vh"><img src="{{asset('first_page/4.png')}}"></div>
        <div data-depth="0.7" style="height:100vh"><img src="{{asset('first_page/5.png')}}"></div>
        <div data-depth="0.8" style="height:100vh"><img src="{{asset('first_page/6.png')}}"></div>
        <div data-depth="0.9" style="height:100vh"><img src="{{asset('first_page/7.png')}}"></div>
        <div data-depth="1" style="height:100vh"><img src="{{asset('first_page/8.png')}}"></div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="width: 100%">
                <a href="{{url('stories')}}" class="btn btn-sm btn-primary" style="position:fixed;">Read Our Stories!</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link href="{{asset('css/my.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);
    </script>
@endsection
