<!-- Features section, the program emits the position of the scroll to its parent Body component for its animation effect. Before the scroll condition is met, the icons will be grayed out.!-->

<template>
  <div class="container-fluid back " id="features" >
  <h1 class="header">Features</h1>
  <div class="card-deck card-deck-Icon">
    <div class="card card-Icon" >
    <i class="far fa-handshake fa-5x"></i>
    <div class="card-body cardAnimation"  v-scroll="featureScroll" >
    <h5 class="card-title">Customer Relations</h5>
    <p class="card-text">We create dialog with our customer to close the gaps from technical to non-technical language. With this personalized contextual approach leads to improved customer experience.</p>
  </div>
  </div>
  <div class="card card-Icon">
    <i class="fas fa-hat-wizard fa-5x "></i>
    <div class="card-body cardAnimation"  v-scroll="featureScroll">
    <h5 class="card-title">Tech Wizzards</h5>
    <p class="card-text">We connect people to people that know how to solve system issues. We provide tools to gather details of the customer and their system. Your IT team will be the wizzards of your organization. </p>
  </div>
  </div> 

  <div class="card card-Icon">
    <i class="fas fa-hiking fa-5x" ></i>
    <div class="card-body cardAnimation"  v-scroll="featureScroll">
    <h5 class="card-title">Routing System</h5>
    <p class="card-text">Your team will have more visibility on how issues can be tracked. This includes how support can be requested, where the appropriate teams can be found, and how the support is implemented. </p>
    </div>
  </div>
  <div class="card card-Icon ">
    <i class="fas fa-database fa-5x"></i>
    <div class="card-body cardAnimation"  v-scroll="featureScroll">
    <h5 class="card-title">Database</h5>
    <p class="card-text">Your organization can utilize our database for searching support requests, dashboards to examine team performance, and maintain access level for respective teams. </p>
  </div>
  </div>
  <div class="card card-Icon">
    <i class="fas fa-code-branch fa-5x" ></i>
    <div class="card-body cardAnimation"  v-scroll="featureScroll">
    <h5 class="card-title">Software</h5>
    <p class="card-text">The software you use must be reiliable, easy to use, scalable and fast. We empower you with system that is ready for today and competitive with tomorrows new technology. </p>
  </div>
  </div>
  </div>
  </div> 
</template>

<script>
export default {
    methods:{  
        featureScroll(evt, el){
          this.$emit('fscrolled', evt, el);
  },     
 }
}
</script>
<style scoped>
.cardAnimation{
  opacity: 0;
  transform: translateZ(0);
  transition: 1.5s all cubic-bezier(0.39, 0.575, 0.565, 1);
}
.some-area > #features {
  font-size: 14pt;    
  justify-content: space-evenly;
  flex-direction: row;
  background-color: whitesmoke;
  
}
.header{
  position: absolute;
  align-items: center;
  text-align: center;
}
.card-deck-Icon, .card-Icon{
  align-items: center;
  text-align: center;
  background-color: whitesmoke;
  border: none;
}
</style>