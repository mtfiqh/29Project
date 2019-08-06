@extends('template')

@section('content')
<div style="background-image: url({{asset('header.jpg')}}); height:100vh;" id="particles-js"></div>

<div class="container">
    <h2>Page 1</h2>
    <hr />
    <div class="mt-2 card col-md-12">
            <div class="row">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid thumbnail" src="{{asset('image/awal-jadian.JPG')}}">
                        </div>
                        <div class="col-md-6">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <audio  controls>

                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 card col-md-12">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <audio  controls>

                                </audio>
                            </div>
                            <div class="col-md-6">
                                    <img class="img-fluid thumbnailR" src="{{asset('image/awal-jadian.JPG')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 card col-md-12">
                    <div class="row">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="img-fluid thumbnail" src="{{asset('image/awal-jadian.JPG')}}">
                                </div>
                                <div class="col-md-6">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <audio  controls>

                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection

@section('css')
    <style>
        body{
            background-color: #fafafa
        }
    .parallax-window {
        min-height: 400px;
        background: transparent;
    }
</style>
@endsection

@section('js')
    <script src="{{ asset('js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        var imageR = document.getElementsByClassName('thumbnailR');
        var image = document.getElementsByClassName('thumbnail');
        new simpleParallax(image,{
            // overflow: true,
            scale:2,
            // orientation:right,
        });
        new simpleParallax(imageR,{
            // overflow: true,
            scale:1.5,
            orientation:'right',
        });
        this.conf = '{{asset('particlesjs-config.json')}}'
        particlesJS.load('particles-js', this.conf, function() {
            console.log('callback - particles.js config loaded');
        });
    </script>

@endsection
