<!--About us section, the program emits the position of the scroll to its parent Body component for its animation effect. Limitation of the program is the responsiveness. when the card body gets resized it collapses into column. At a later date this issue will be resolved.!-->
<template>
  <div class="container-fluid back " id="about-us">
    <div class="card-div"> 
    <div class="card card-color animation " v-scroll="Scroll" >
       <h2 class="card-font"><b>About Us</b></h2>
    <div class="card-body">
      <p class="text-font"> Our inspiration for creating the IT ticketing system is to reduce the learning curve for requesting IT support. As an IT professional, I have had customers discouraged from using a ticketing portal because of the complexity of the system. With the information overload and lack of proper technical knowledge from non-technical staff requesting IT support is rather difficult. I was inspired create a support system that still has usability for non-technical professionals and functionality for IT professionals.
      </p>
    </div>
  </div>
</div>
  <div class="about-img-div">
    <img class="About-img animation" :src="About"  v-scroll="Scroll" alt="Programmer">
  </div>
  </div>
</template>
<script>
import About from "../images/programmer-1653351_1280.png";

export default {
 data: function () {
  return {
     About : About,
  }
 },
 methods:{
    Scroll(evt, el){
    this.$emit('scrolled', evt, el);   
  }  
 }
}
</script>
<style scoped>
/*create animation and make image response*/
.animation{
  border:2px solid black;
  opacity: 0;
  transform: translateZ(0);
  transition: 1.5s all cubic-bezier(0.39, 0.575, 0.565, 1);
}
.About-img{

  border-radius: 50%;
  height: 20rem;
  width: 20rem;
}
.text-font{
  color: white;
}
.card-font{
  color: #F0E68C;
  text-align: center !important;
 /*#ADFF2F, #F0FFFF, F0E68C*/
}
.card-div, .about-img-div{
  margin-right: 5%;
  margin-top: 5%;
}
.card-div{
  margin-left:2%;
  width: 50%;
}

.card-color{
  background-color:#2F4F4F;
}
.some-area > #about-us {
  flex-direction: row;
  background-color:#DCDCDC;
  align-items: center;

}
</style>



