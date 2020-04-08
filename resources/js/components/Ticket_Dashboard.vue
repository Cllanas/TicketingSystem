<template>
<div class="container-fluid ticket-creating">
    <h2 class="category-header"><b>Step 1. Select Category For IT Request.</b></h2>
<div class="tech"> 
<div class="card desktop-hardware" @click="onToggle" >
  <div class="card-body">
    <h5 class="card-title">Desktop Hardware</h5>
    <i class="fas fa-desktop fa-2x"></i>
  </div>
</div>
<div class="card laptop-hardware">
  <div class="card-body" @click="onToggle">
    <h5 class="card-title">Laptop Hardware</h5>
    <i class="fas fa-laptop fa-2x"></i>
  </div>
</div>
<div class="card mobile">
  <div class="card-body">
    <h5 class="card-title">Mobile</h5>
   <i class="fas fa-mobile-alt fa-2x"></i>
  </div>
</div>
<div class="card telephone">
  <div class="card-body">
    <h5 class="card-title">Telephone</h5>
   <i class="fas fa-phone-square-alt fa-2x"></i>
  </div>
</div>
 <div class="card printer-faxing">
  <div class="card-body">
    <h5 class="card-title">Printer/Faxing</h5>
    <i class="fas fa-print fa-2x"></i>
  </div>
</div>
<div class="card virtual-desktop" >
  <div class="card-body">
    <h5 class="card-title">Virtual Desktop</h5>
    <i class="fas fa-sitemap fa-2x"></i>
  </div>
</div>
</div>
<br>
<div class="tech"> 
<div class="card application-support">
  <div class="card-body">
    <h5 class="card-title">Application Support</h5>
    <i class="fas fa-sort-alpha-down fa-2x"></i>
  </div>
</div>
<div class="card internet-connection">
  <div class="card-body">
    <h5 class="card-title">Internet Connection</h5>
    <i class="fas fa-wifi fa-2x"></i>
  </div>
</div>
<div class="card information-security">
  <div class="card-body">
    <h5 class="card-title">Information Security</h5>
    <i class="fas fa-key fa-2x"></i>
  </div>
</div>
<div class="card account-management" >
  <div class="card-body">
    <h5 class="card-title">Account Management</h5>
    <i class="fas fa-user-lock fa-2x"></i>
  </div>
</div>
<div class="card database-reporting">
  <div class="card-body">
    <h5 class="card-title">Database Reporting</h5>
    <i class="fas fa-server fa-2x"></i>
  </div>
</div>
<div class="card employee-service" >
  <div class="card-body">
    <h5 class="card-title">Employee Services</h5>
    <i class="far fa-id-badge fa-2x"></i>
  </div>
</div>
  </div>
    </div>
</template>
<script>

export default {
  data: function(){

    return{
    toggle: false
    }
},
methods:{
   onToggle: function(evt, el){
    if(this.toggle === true)
    this.toggle = false;
     document.getElementsByClassName('card')[0].style.color = "#D2691E";
     
   },

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
.category-header{
  text-align: center;
  margin-bottom: 2%;
}
.card{
  width: 20rem;
  height: 8rem;
}
.card:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.20);
  cursor: pointer;
}
.card-body{
  text-align: center;
  font-size: 16px;
}

</style>

