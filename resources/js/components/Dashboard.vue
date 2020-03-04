<!-- Program is actively in development. Hover over Description for preview. !-->

<template>
<section class="dashboard">
<div class=" side-bar">
  <div class="icon"><img class="profile" src="../images/person-1824144_960_720.png" style="width:150px;"></div>

  <ul class="dashboard-person-info"> 
    <li>ID: </li>
    <li>Reports to: </li>
    <li>Role: </li>
    <li >Email: </li>
  </ul>
<form class="form-inline dashboard-search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <br>
      <div class="dropdown">
  <button class="btn btn-dropdown-color dropdown-toggle mr-sm-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Search Options
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Customer</a>
    <a class="dropdown-item" href="#">Service Request</a>
  </div>
</div>
</form> 
  <a href="#Queue" class="dashboard-link">View All Queue</a>
  </div>
<div class="container-fluid"> 
   <h1 class="ticket-header">Team Ticket Queue</h1>
<div class=" priority">
 <table class="table table-striped">
  <thead>
    <tr class="table-headers">
     <th scope="col"> #Service Request</th>
      <th scope="col">Priority</th>
      <th scope="col">Customer</th>
      <th scope="col">Owned</th>
      <th scope="col">Parent Category</th>
       <th scope="col">Title</th>
       <th scope="col">Quick View Description (<i class="fas fa-binoculars"></i>)</th> 
      <th scope="col">Assigned team</th>
      <th scope="col">Created Date</th>
      <th scope="col">Resolution Date</th>  
      
    </tr>
  </thead>
  <tbody>
    <tr class="table-row">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr class="table-row">
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td >@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr class="table-row">
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

<h1 class="ticket-my">My Ticket Queue</h1>
<div class=" priority">
 <table class="table table-striped">
  <thead>
    <tr class="table-headers">
     <th scope="col"> #Service Request</th>
      <th scope="col">Priority</th>
      <th scope="col">Customer</th>
      <th scope="col">Owned</th>
      <th scope="col">Parent Category</th>
       <th scope="col">Title</th>
       <th scope="col">Quick View Description (<i class="fas fa-binoculars"></i>)</th> 
      <th scope="col">Assigned team</th>
      <th scope="col">Created Date</th>
      <th scope="col">Resolution Date</th>       
    </tr>
  </thead>
  <tbody>
    <tr class="table-row">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr class="table-row">
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td >@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr class="table-row">
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td class="quick">@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

    <div class="card-group  card-group-position">
    <div class="card-columns card-layout">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">My Ticket's Status</h5>
          <p class="card-text">* Amount of Ticket pending  *Amount nearing deadline *Reopened (be shown as graph with ticket numbers)</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">Team Average Feedback Rating</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.    This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">Ticket Without Owners</h5>
          <p class="card-text"> *Service request numbers</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
      <div class="card">
      <div class="card-body">
          <h5 class="card-title">Completed Monthly tickets</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.    This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
      <div class="card-body">
          <h5 class="card-title">My submitted tickets</h5>
          <p class="card-text">Service Request nubmers (hover: give popup for short description)</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
      <div class="card-body">
          <h5 class="card-title">Breached Deadline Tickets</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.    This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    </div>
</div>
   </section>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.dashboard{
  margin-top: 3%;
  flex: 1;
  display:flex;   
}
.btn:hover{
  color: #D7C49EFF;
   background-color: #343148FF;
}
.dashboard-person-info{
  list-style: none;
  margin: 0;
  padding-left: 5px;
}
.profile{
  margin-top: 10px;
  margin-left: 50px; 
}
.icon{
  height: 10rem;
  min-width: 300px;
 
}
.dashboard-search{
  padding-left: 5px;
  margin-top: 50px; 
}
.btn-dropdown-color{
  border: 2px solid #343148FF;
  color: #343148FF;
}
.dashboard-link{
  padding-left: 5px;
  color:  #343148FF;
}
.ticket-header{
  padding-top: 7px;
  padding-left: 10px;
}
.ticket-my{
  padding-top: 7px;
  padding-left: 17px;
}
.side-bar{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  min-height:760px;
  height: 100%; 
  z-index: 1; /* Stay on top */
  margin-top: 20px;
  margin-left: 20px;
  min-width: 300px;
  position: relative;
  background-color: #EFE1D4;
  color: #343148FF;
  overflow-x: hidden;
}
.table{
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
  background-color:#E3E2DF;
  color: black;
}
.table-headers{
  background-color: #343148FF;
  color: #EFE1D4;
}
.fa-binoculars{
  color:#D6ED17FF;
}
.priority{
  margin-left: 20px;
  width: 99%;
}
.card-layout{
  width: 99%;
  margin-left: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;  
}
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #EFE1D4;
  flex: 0 1 15%;
}

</style>