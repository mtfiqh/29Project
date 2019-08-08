<template>
<div class="container mt-3">
    <h2>Page 1</h2>
    <hr />
    <div class="mt-2 card col-md-12">
            <div class="row">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid thumbnail" src="/image/awal-jadian.JPG">
                        </div>
                        <div class="col-md-6 my-auto">
                            <p>
                                Aku tau ngomong ini berulang-ulang, tapi inget ga? momment ini? Kalo diinget-inget kadang lucu ya hehe...
                                <br/>
                                Disini siang hari <i>(hampir sore sih kayaknya hehe)</i>, tanggal 29 Juli 2017, i ask you, <i>do you want to be my girlfriend</i>, and you <b>accepted</b> it !
                                <br/>
                                whoaaaaaa!! i'm so happy to hear that!!
                            </p>
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
                                <p>Tes</p>
                                <audio  controls>

                                </audio>
                            </div>
                            <div class="col-md-6 my-auto">
                                    <img class="img-fluid thumbnailR" src="image/ke2.jpg">
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
                                    <img class="img-fluid thumbnail" src="image/awal-jadian.JPG">
                                </div>
                                <div class="col-md-6 my-auto">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <audio  controls>

                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</template>

<style>

    .parallax-window {
        min-height: 400px;
        background: transparent;
    }
</style>

<script>
import simpleParallax from 'simple-parallax-js';

export default {
    mounted(){
        var imageR = document.getElementsByClassName('thumbnailR');
        var image = document.getElementsByClassName('thumbnail');

        this.initParallax(image, 2)
        this.initParallax(imageR, 1.5, 'up right')
    },
    methods:{
        initParallax(obj, scale, orientation='up'){
            new simpleParallax(obj,{
                scale,
                orientation
            })
        }
    }
}
</script>
