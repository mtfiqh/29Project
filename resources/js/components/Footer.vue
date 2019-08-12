<template>
<div class="text-center mt-5">
        <div class="mx-auto">
            <router-link :to="{path:count>1?'/stories/'+count : '/stories/'}"><button @click="prev()" :disabled="count<=1" class="btn btn-sm btn-warning mr-2">Prev</button></router-link>
            <router-link :to="{path:'/stories/'+count}"><button @click="next()" :disabled="count==max" class="btn btn-sm btn-primary ml-2">Next</button></router-link>
        </div>
    <p class="mt-4">Created with love ♥ | Copyright fiq@2019 | for Reza Octaviany | Source in <a href='https://github.com/taufiq2810/29Project'>Github</a></p>
</div>
</template>

<script>
export default {
    data(){
        return{
            count:1,
            max:2
        }
    },
    methods:{
        next(){
            this.count++
        },
        prev(){
            this.count--
        }
    }
}
</script>
