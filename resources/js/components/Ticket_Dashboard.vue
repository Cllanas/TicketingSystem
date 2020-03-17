<template>
    <div class="container-fluid ticket-creating">
        <h2 class="category-header"><b>Select Category For IT Request.</b></h2>
        <div class="tech"> 
 <div class="card">
  <div class="card-body">
    <h5 class="card-title">Desktop Hardware</h5>
    <i class="fas fa-desktop"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Laptop Hardware</h5>
    <i class="fas fa-laptop"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Mobile</h5>
   <i class="fas fa-mobile-alt"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Telephone</h5>
   <i class="fas fa-phone-square-alt"></i>
  </div>
</div>
 <div class="card">
  <div class="card-body">
    <h5 class="card-title">Printer/Faxing</h5>
    <i class="fas fa-print"></i>
  </div>
</div>
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Virtual Desktop</h5>
    <i class="fas fa-sitemap"></i>
  </div>
</div>
</div>
<br>
<div class="tech"> 
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Application Support</h5>
    <i class="fas fa-sort-alpha-down"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Internet Connection</h5>
    <i class="fas fa-wifi"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Information Security</h5>
    <i class="fas fa-key"></i>
  </div>
</div>
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Account Management</h5>
    <i class="fas fa-user-lock"></i>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Database Reporting</h5>
    <i class="fas fa-server"></i>
  </div>
</div>
<div class="card" style="">
  <div class="card-body">
    <h5 class="card-title">Employee Services</h5>
    <i class="far fa-id-badge"></i>
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
.ticket-creating{
margin-top:3%;
}
.tech{
  display: flex;
  justify-content: space-evenly;
  flex-direction: row;
}
.card{
  width: 18rem;
}
.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.20);
  cursor: pointer;
}
.category-header{
  text-align: center;
  margin-bottom: 2%;
}
</style>

