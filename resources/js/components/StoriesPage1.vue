<template>
<div class="container mt-3">
    <h2>Page 1 - <i>The Beginning</i></h2>
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
                            <div class="col-md-6 my-auto">
                                <p>
                                    Terus kita photo disini hehe, lucu ya, masih canggung....<br/>
                                    Kadang inget ini lucu banget hehe, like -><i>beneran nih jadian</i>

                                </p>
                                <audio  controls>

                                </audio>
                            </div>
                            <div class="col-md-6 my-auto">
                                    <img class="img-fluid thumbnailR" src="/image/ke2.jpg">
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
                                    <img class="img-fluid thumbnail" src="/image/ke3.JPG">
                                </div>
                                <div class="col-md-6 my-auto">
                                    <p>
                                        Happiness is here !<br />
                                        ehe, ini waktu kita ke puncak mas ☺, kalo diliat-liat lagi photonya lucu-lucu<br />
                                        ehehehe ♥♥♥
                                        <b></b>
                                    </p>
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
        console.log(imageR)
        console.log(image)

        this.initParallax(image, 2)
        this.initParallax(imageR, 1.2, 'up right')
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
