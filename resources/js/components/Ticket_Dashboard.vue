<template>
    <div class="container-fluid">
        <h2>Select component for IT Request.</h2>
        <div class="tech"> 
 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Desktop</h5>
    <i class="fas fa-power-off"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Monitor</h5>
   <i class="fas fa-desktop"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Mouse</h5>
<i class="fas fa-mouse"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Laptop</h5>
    <i class="fas fa-laptop"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Internet Connection</h5>
    <i class="fas fa-wifi"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Account</h5>
    <i class="fas fa-user-circle"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Application</h5>
    <i class="fas fa-sort-alpha-down"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Database</h5>
    <i class="fas fa-server"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Virtual Desktop</h5>
    <i class="fas fa-sitemap"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Printer/Scanning</h5>
    <i class="fas fa-print"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Keyboard</h5>
   <i class="fas fa-keyboard"></i>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Mobile</h5>
   <i class="fas fa-mobile-alt"></i>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tablet</h5>
   <i class="fas fa-tablet-alt"></i>
  </div>
</div>
</div>
    </div>
</template>
<script>
import workstation from "../images/computer-158675_960_720.png"
export default {
   data: function () {
       return{ 
           workstation : workstation
           }
    }
}
</script>
<style scoped>
.tech{
    display: flex;
    flex-direction: row;
}
</style>

