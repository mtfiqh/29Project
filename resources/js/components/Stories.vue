<template>
    <div>
                <div class="bg-particles" id="particles-js">

                </div>


        <transition name="slide">
            <router-view></router-view>

        </transition>

        <footerstories></footerstories>
    </div>
</template>

<style>
    body{
        background-color: #fafafa !important;
    }
</style>

<script>
    import 'particles.js'
    import particleConf from '../assets/particlejs-config.json'

    import FooterStories from './Footer'
    export default {
        components:{
            footerstories:FooterStories
        },
        mounted(){
            this.initParticles()
            // particlesJS("particle-js", )
        },
        methods:{
            initParticles(){
                window.particlesJS("particles-js", particleConf)
            },
        },
        created(){

        }
    }
</script>
