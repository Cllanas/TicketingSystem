<!-- Program is actively in development. Hover over Description for preview. !-->

<template>
<section class="dashboard">
<div class=" side-bar">
  <a href="#Profile">Profile (Picture, ID, Role, chain of leadership, contact number and email)</a>
  <form class="form-inline my-2 my-sm-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  <a href="#services">View General Queue</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  </div>
<div class="container-fluid"> 
   <h1>Team Ticket Queue</h1>
<div class=" priority">
 <table class="table table-striped table-dark">
  <thead>
    <tr>
     <th scope="col"> #Service Request</th>
      <th scope="col">Priority</th>
      <th scope="col">Customer</th>
      <th scope="col">Owned</th>
      <th scope="col">Ticket Status</th>
      <th scope="col">Parent Category</th>
      <th scope="col">Description</th>
      <th scope="col">Assigned team</th>
      <th scope="col">Created Date</th>
      <th scope="col">Resolution Date</th>  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
  <div class="dashboard-buttons ">
    <div class="card-group  card-group-position">
    <div class="card-columns">
      <div class="card ">
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
</div>
   </section>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.dashboard  {
    flex: 1;
display:flex;
 
  
    
}
.side-bar{
  
  min-height: 900px;
  height: 100%; /* Full-height: remove this if you want "auto" height */
  z-index: 1; /* Stay on top */
  padding-right: 100px;
  margin-top: 20px;
  margin-left: 20px;
  width: 8%;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */

}
.dashboard-buttons{
 margin-left: 20px;
  float: left;
 width: 92%;
display: flex;
margin-top: 20px;

}
.priority{
   margin-left: 20px;
display: flex;
margin-top: 20px;
 width: 92%;
 

}

</style>