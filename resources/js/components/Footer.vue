<!-- The footer program will not direct the user to any social media prescence. Their inclusion will be based as a mock example of a footer.!-->
<template>
<section class="fill-height-or-more some-area">
   <div class="container-fluid back" id="foot" >
    <footer>  
      <div class="row">
      <a class="links"  href="#" >Click to go top</a>
       </div>
      <div class="row">
        <ul>
          <li class="link"><a href="#" ><i class="fab fa-facebook"></i></a></li>
          <li class="link"><a href="#"> <i class="fab fa-twitter"></i></a></li>
          <li class="link"><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
          <li class="link"> <a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </footer>
  </div>
</section>
</template>
<style >
.some-area > #foot {
  background-color: whitesmoke;  
  font-size: 14pt;
  flex-direction: row;
  justify-content: space-evenly;
}
.links{
  font-size: 25pt;
  color: black;
}
.links:hover{
  color: black;
}
.link{
  left: 100px;
  letter-spacing: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 25pt;
  color: black;
}
 footer {
  flex-shrink: 0;
  padding:100px;   
}
.fab:hover{
  opacity: 0.6;
}
</style>