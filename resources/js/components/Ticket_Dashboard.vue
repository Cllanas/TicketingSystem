<template>
<div class="container-fluid ticket-creating">
<h2 class="category-header"><b>Step 1. Select Category For IT Request.</b></h2>


<div class="tech">
<button class="btn" v-for="category in categories" :key="category.id" v-on:click="onToggle(category.id)">
  <div class="card-body" :id="category.identify" >
    <h5 class="card-title">{{category.title}}</h5>
    <i :class="category.icon"></i>
    </div>
</button>
</div>
<br>
<h2 class="category-header"><b>Step 2. Select Sub-Category For IT Request.</b></h2>


<div class="tech">
<button class="btn" v-for="category in categories" :key="category.id" v-on:click="onToggle(category.id)">
  <div class="card-body" :id="category.identify" >
    <h5 class="card-title">{{category.title}}</h5>
    <i :class="category.icon"></i>
    </div>
</button>
</div>
<br>
<h2 class="category-header"><b>Step 3. Additional Details For Request.</b></h2>


<form>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Callback number:</span>
  </div>
  <input type="text" class="form-control">
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">How many people are affected:</span>
  </div>
  <input type="text" class="form-control">
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Has production stopped?</span>
  </div>
  <input type="text" class="form-control">
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Time of incident reported to the business:</span>
  </div>
  <input type="text" class="form-control">
</div>
<br>
<h5>Adding additional details improves the quality of service:</h5>
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="15"  placeholder="Name of employee(s) affected:
ID of employee(s) affected:
Location of employee(s) affected:">Name of employee(s) affected:

ID of employee(s) affected:

Location of employee(s) affected:

System's not listed above: 

Error message(s) recieved from system affected:
</textarea>
  </div>
</form>
<br>
<br>
<br>
<br>
</div>
</template>
<script>

export default {
 

  data: function(){

    return{
    categories:[
      {
        id: 0,
        identify: 'Desktop', 
        title: 'Desktop',
        icon: 'fas fa-desktop fa-2x',
        status: false
      },
      {
        id: 1,
        identify: "Laptop", 
        title: 'Laptop',
        icon: 'fas fa-laptop fa-2x',
        status: false
      },
      {
        id: 2,
        identify: 'Mobile', 
        title: 'Mobile',
        icon: 'fas fa-mobile-alt fa-2x',
        status: false
      },
      {
        id: 3,
        identify: 'telephone', 
        title: 'Telephone',
        icon: 'fas fa-phone-square-alt fa-2x',
        status: false
      },
      {
        id: 4,
        identify: 'printer-faxing', 
        title: 'Printer',
        icon: 'fas fa-print fa-2x',
        status: false
      },
      {
        id: 5,
        identify: 'virtual-desktop', 
        title: 'Virtual Desktop',
        icon: 'fas fa-sitemap fa-2x',
        status: false
      },
      {
        id: 6,
        identify: 'application-support', 
        title: 'Application Support',
        icon: 'fas fa-sort-alpha-down fa-2x',
        status: false
      },   
      {
        id: 7,
        identify: 'internet-connection', 
        title: 'Internet Connection',
        icon: 'fas fa-wifi fa-2x',
        status: false
      },
      {
        id: 8,
        identify: 'information-security', 
        title: 'Information Security',
        icon: 'fas fa-key fa-2x',
        status: false
      },
      {
        id: 9,
        identify: 'account-management', 
        title: 'Account Management',
        icon: 'fas fa-user-lock fa-2x',
        status: false
      },
      {
        id: 10,
        identify: 'database-reporting', 
        title: 'Database Reporting',
        icon: 'fas fa-server fa-2x',
        status: false
      },
      {
        id: 11,
        identify: 'employee-service', 
        title: 'Employee Service',
        icon: 'far fa-id-badge fa-2x',
        status: false
      }
    ]
  }
},

methods:{
   onToggle: function(id){
    
    console.log("this is ID: " + id);
  //Toggle off selected states.
     for(let i = 0; i < this.categories.length; i++){
      if(this.categories[i].status === true){
        document.getElementById(this.categories[i].identify).classList.toggle("toggleOn");
    }
  }
  //Toggle on target state and ensure all other states are deselected.
    for(let i = 0; i < this.categories.length; i++){
      if(id === this.categories[i].id){
      this.categories[i].status = true;
      document.getElementById(this.categories[i].identify).classList.toggle("toggleOn");
      }else{
      this.categories[i].status = false;
      }
    } 
   },

 }
}
</script>
<style scoped>
.toggleOn{
  color: #D2691E !important;
}

.ticket-creating{
margin-top:3%;

}
.tech{
  display: flex;
  justify-content: center;
  flex-direction: row;
  flex-wrap: wrap;
  flex-flow: row wrap;
  
}
.category-header{
  text-align: center;
  margin-bottom: 2%;
}
.btn{
  margin-bottom: 30px;
  margin-right:45px;
  border:1px  black solid;
  width: 20rem;
  height: 8rem;
}
.btn:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.20);
}

    

.card-body{

  text-align: center;
  font-size: 16px;
}

</style>
Desktop
<i class="fas fa-power-off"></i>
<i class="far fa-keyboard">
</i><i class="fas fa-tv"></i>
<i class="fas fa-mouse"></i>
<i class="fas fa-volume-up"></i>
<i class="fab fa-bluetooth-b"></i>
<i class="fas fa-wifi"></i>
<i class="fas fa-network-wired"></i>
<i class="fab fa-microsoft"></i>
<i class="fab fa-linux"></i>
<i class="fab fa-redhat"></i>
<i class="fab fa-centos"></i>
<i class="far fa-save"></i>
-------------------------------
Laptop
<i class="fas fa-laptop"></i>
<i class="far fa-keyboard">
<i class="fas fa-mouse"></i>
<i class="fas fa-volume-up"></i>
<i class="fab fa-bluetooth-b"></i>
<i class="fas fa-wifi"></i>
<i class="fas fa-network-wired"></i>
<i class="fab fa-microsoft"></i>
<i class="far fa-save"></i>
-------------------------------
Mobile
<i class="fas fa-sync"></i>
<i class="fab fa-google-play"></i>
<i class="fab fa-app-store"></i>
<i class="fas fa-qrcode"></i>
<i class="far fa-save"></i>
<i class="fab fa-bluetooth-b"></i>
<i class="fas fa-wifi"></i>
<i class="fas fa-network-wired"></i>
-------------------------------
Telephone
<i class="fas fa-headset"></i>
<i class="fas fa-volume-up"></i>
<i class="fas fa-phone-slash"></i>
----------------------------------
Printer
<i class="fas fa-print"></i>
<i class="fas fa-power-off"></i>
<i class="fas fa-wifi"></i>
<i class="fas fa-lock-open"></i>
---------------------------------
Virtual Desktop
<i class="fas fa-lock-open"></i>
<i class="far fa-window-close"></i>
<i class="fas fa-tachometer-alt"></i>
<i class="fas fa-universal-access"></i>
----------------------------------
Application support
<i class="fab fa-firefox-browser"></i>
<i class="fab fa-internet-explorer"></i>
<i class="fab fa-chrome"></i>
<i class="fab fa-edge"></i>
<i class="fab fa-safari"></i>
<i class="far fa-envelope"></i>

<i class="fab fa-amazon"></i>
<i class="fab fa-java"></i>
<i class="fas fa-bug"></i>
---------------------------------
Internet connection
<i class="fas fa-cloud"></i>
<i class="fas fa-server"></i>
<i class="fas fa-wifi"></i>
<i class="fas fa-network-wired"></i>
-----------------------------------
Information security
<i class="fab fa-usb"></i>
<i class="far fa-flag"></i>
<i class="fas fa-bug"></i>
<i class="fas fa-trash-restore"></i>
<i class="fas fa-fingerprint"></i>
<i class="fas fa-shield-virus"></i>
<i class="fas fa-ban"></i>
-----------------------------------
Account management
<i class="far fa-address-book"></i>
<i class="fas fa-unlock"></i>
<i class="fas fa-user-edit"></i>
<i class="fas fa-user-alt-slash"></i>
----------------------------------
Database Reporting
<i class="fas fa-file-excel"></i>
<i class="fas fa-chart-pie"></i>
<i class="fas fa-chart-bar"></i>
<i class="fas fa-chart-area"></i>
<i class="fas fa-chart-line"></i>
---------------------------------
Employee Services
<i class="fas fa-people-carry"></i>
<i class="fas fa-plus"></i>