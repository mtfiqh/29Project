<template>
    <div>
        <div class="bg-particles" id="particles-js"></div>
        <router-view></router-view>
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
