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
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Less than or equal to 5 people affected Priority  low</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"> 
    *Callback Number:
    * Location of Employee(s) Affected:
   * Name of Employee(s) Affected:
   * ID of Employee(s) Affected:
    * Additional Details of Request:
    </textarea>
  </div>
</form>
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">greater than or equal to 6 but less than 14 Priority Medium</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"> 
    *Callback Number:
    *Location of Employee(s) Affected:
    *Name of Employee(s) Affected:
    *ID of Employee(s) Affected:
    *Has Production Stopped:
    *Additional Details of Request:
    </textarea>
  </div>
</form>
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Greater than or equal to 15 Priority High All fields are required</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8">
    Callback Number:
    Location of Employee(s) Affected:
    Name of Employee(s) Affected:
    ID of Employee(s) Affected:
    Time of Incident Reported:
    Has Production Stopped:
    Additional Details of Request:
    </textarea>
  </div>
</form>




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
        title: 'Desktop Hardware',
        icon: 'fas fa-desktop fa-2x',
        status: false
      },
      {
        id: 1,
        identify: "Laptop", 
        title: 'Laptop Hardware',
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