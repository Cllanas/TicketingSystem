<!-- 
The program is structured to interact with each specified nth div. As a result models sections (Features, About us, Contact and Footer) and their respective animations. Body receives a response from its' child components creating scroll effects. This program file does not include navbar to its structure due to the laravel authentication system.  
!-->
<template>
<section class="fill-height-or-more some-area">
  <AboutComp @scrolled="handleScroll"></AboutComp>
  <Features  @fscrolled="iconScroll"> </Features>   
   <div class="container-fluid back " id="contact-block" >
      <h5 class="font">We would love to understand more about your IT Support Concerns.</h5>
      <p class="font">Thank you for being our customer. Your bussiness means a lot to us. We appreciate the concerns you are brining to us.</p>
      <a class="btn search btn-lg "  role="button" href="/contact/create" >Contact Support</a>
    </div>
  <foot></foot>
</section> 
</template>

<script>
import foot from './Footer.vue'
import Features from "./Features.vue"
import AboutComp from './About.vue'
//Create scrolling and release scroll effect when met with target value 
Vue.directive('scroll', {
  inserted: function(el, binding) {
    let f = function(evt) {
      if (binding.value(evt, el)) {
        window.removeEventListener('scroll', f);
      }
    };
    window.addEventListener('scroll', f);
  },
});
export default {
  components:{
  AboutComp,
  Features,
  foot,
  },
  methods: {
   handleScroll: function(evt, el) {
    if (window.scrollY > 10) {
      el.setAttribute("style", "opacity: 1; transform: translate3d(0, -10px, 0)");
    }
    return window.scrollY > 10;
    },
    iconScroll: function(evt, el) {
    if (window.scrollY > 1000){
    el.setAttribute("style", "opacity: 1; transform: translate3d(0, -10px, 0)");
    document.getElementsByClassName('fa-handshake')[0].style.color = "#D2691E";
    document.getElementsByClassName('fa-hat-wizard')[0].style.color = "#4B0082";
    document.getElementsByClassName('fa-hiking')[0].style.color = "#556B2F";
    document.getElementsByClassName('fa-database')[0].style.color = "#B0C4DE";
    document.getElementsByClassName('fa-code-branch')[0].style.color = "#2F4F4F";
      }
    }
  }
}
</script>

<style scoped>
.some-area > #contact-block {
  min-height: 800px;
  height: auto;
  position: relative;
  background: rgba(0, 0, 0, 0.5) url(../images/notebook-1280538_1920.jpg) no-repeat;
  background-position: center center;
  background-size: cover;
  background-attachment: fixed;
  font-size: 14pt;
  justify-content: center;
  align-items: center; 
}
</style>
