<template>
<div class="container">
   

    <ul :v-model="check(lar)">
    <div class="alert alert-danger"  v-if="found" > 
    <li v-for="lars in lar" v-bind:key="lars.id" >
    <div v-for="value in lars" :key="value.id" > {{value}}</div>
    </li>  

    </div>
    </ul>
    
 
</div>
</template>
<script>
export default {
    props:['lar'],
    data: function(){
        return{
            found: false,
        }
    },
    methods:{
        check: function(value){
            if(Object.keys(value).length > 0)
            this.found =true;
        },
    }
}
</script>

<style scoped>

</style>