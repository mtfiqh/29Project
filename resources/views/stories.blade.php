@extends('template')

@section('content')
<!-- particles.js container -->
<div style="background-image: url({{asset('header.jpg')}}); height:100vh;" id="particles-js"></div>
<div class="container">

</div>
@endsection

@section('css')

@endsection

@section('js')
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        this.conf = '{{asset('particlesjs-config.json')}}'
        particlesJS.load('particles-js', this.conf, function() {
            console.log('callback - particles.js config loaded');
        });
    </script>

@endsection
