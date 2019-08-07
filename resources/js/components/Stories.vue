<template>
    <div>
        <div class="bg-particles" id="particles-js"></div>
        <transition name="slide">
            <router-view></router-view>

        </transition>
    </div>
</template>
<script>
    import 'particles.js'
    import particleConf from '../assets/particlejs-config.json'
    export default {
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
