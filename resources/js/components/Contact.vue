<!--Program accepts input from the user. Front-end validation occurs as the user types into the input fields. The fields will highlight green for success and red for failure. When submitting the form the program will check to return errors found in the required fields. Sever-validation has not been configured yet.!-->
<template>
<section class="some-area fill-height-or-more">
  <div class="container-fluid back" id="contact-block">

    <h1 class="contact-header">Contact Form</h1>
    <div class="contact-space"> 
    <div class="contact-form"> 
      
  <form @submit="checkForm" action="/contact" method="POST"  >


<Error :lar="valid_error"></Error>

   <input type="hidden" name="_token" :value="csrf">
    <p v-if="errors.length"><b>Please correct the following error(s):</b>
    <ul>
      <li v-for="error in errors" v-bind:key="error">
     {{error}}
      </li>  
    </ul>
     </p>
    <div class="form-group">
      <label for="name">First name <span class="star">*</span></label>
      <input type="text" class="form-control" placeholder="First name"  name="name" id="names" v-model="name" @keyup="firstValid">
    </div>
    <div class="form-group">
      <label for="lastName">Last name <span class="star">*</span></label>
      <input type="text" class="form-control" placeholder="Last name" name="last" id="lasts" v-model="last" @keyup="lastValid" >
    </div>   
    <div class="form-group">
    <label for="emailInput">Email address <span class="star">*</span></label>
    <input type="email" class="form-control "   name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" v-model="email" @keyup="emailValid">
    </div>
  <div class="form-group">
   <label for="validationTextarea font">Feedback <span class="star">*</span></label>
    <textarea class="form-control "  id="textArea"  name="textArea" placeholder="Please enter text for review" rows="10" v-model="text_area"  @keyup="textAreaValid"  > </textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-outline-success" >Submit</button>
  </div>
  </form> 
  </div>

  <div class="contact-card">
    <div class="card" style="max-width: 25rem;">
      <div class="card-header">Technical support (US)</div>
      <div class="card-body">
      <p class="card-text">Questions regarding how you can implement our IT based solution please contact    Techsupport@ITSupport.com or call 956-XXX-XXXX.</p>
      </div>
      </div>
    <br>
    <div class="card" style="max-width: 25rem;">
      <div class="card-header">Customer support (US)</div>
      <div class="card-body">
      <p class="card-text">Questions regarding features of the IT ticket solution please contact   Customersupport@ITSupport.com. or call 956-XXX-XXXX.</p>
      </div>
      </div>
    <br>  
  <div class="card" style="max-width: 25rem;">
      <div class="card-header">Business support</div>
      <div class="card-body">
      <p class="card-text">If you would like to invest in the business or have any other business related inquires   please contact Businesssupport@ITSupport.com. or call 956-XXX-XXXX.</p>
      </div>
      </div>
  </div>
</div>
</div>
</section>
</template>

<script>
import Error from './Error.vue'
export default {

  components:{
    Error,
  },
   props: ['csrf', 'valid_error'],
  data : function() {
    return{
    errors: [], 
    last: "",
    name: "",
    text_area: "",
    email: "",
    } 
  },
methods:{
  checkForm: function (e) {
  this.errors = [];
  if(this.name && this.last && this.email  && this.text_area ){
  return true;
  }
  if (!this.name) {
    this.errors.push('Invalid first name.');
    names.setAttribute("style", "border: 3px solid red; outline:none; ");
  }
  if(!this.last){
    this.errors.push('Invalid last name.');
    lasts.setAttribute("style", "border: 3px solid red; outline:none; ");
  }
  if (!this.email) {
    this.errors.push('Email required.');
    email.setAttribute("style", "border: 3px solid red; outline:none; ");
  } 
  if (!this.text_area) {
    this.errors.push('Text needs to be entered in feedback.');
    textArea.setAttribute("style", "border: 3px solid red; outline:none; ");
  }
  e.preventDefault();


      /*axios.post('contact', {names: this.name, lasts: this.last, emails: this.email, texts: this.text_area}).then(response => {
        const data = response.data;
        this.name = '';
        this.last = '';
        this.email = '';
        this.text_area = '';
      })

*/
 },
 
  emailValid: function(event){
  var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(this.email.match(re) && this.email !=''){
    email.setAttribute("style", "border: 3px solid green; outline:none;");
  } else{
    email.setAttribute("style", "border: 3px solid red; outline:none; ");
  }
 },
  firstValid: function(event){
  if(this.name !=''){
    names.setAttribute("style", "border: 3px solid green; outline:none;");
  }else{
    names.setAttribute("style", "border: 3px solid red; outline:none; ");
   }
 },
  lastValid: function(event){
  if( this.last !=''){
    lasts.setAttribute("style", "border: 3px solid green; outline:none;");
  }else{
    lasts.setAttribute("style", "border: 3px solid red; outline:none; ");
    }
   },
    textAreaValid: function(event){  
    if(this.text_area !=''){
    textArea.setAttribute("style", "border: 3px solid green; outline:none;");
    }else{
    textArea.setAttribute("style", "border: 3px solid red; outline:none; ");
      }
   },
   /*
  submit(event) {
      
      axios.post('http://127.0.0.1:8000/contact/store', {names: this.name, lasts: this.last, emails: this.email, texts: this.text_area}).then(response => {
        const data = response.data;
        this.name = '';
        this.last = '';
        this.email = '';
        this.text_area = '';
      })
    },
    */
   

  }
}
</script>

<style scoped>
.some-area > #contact-block{
  background-color:#DCDCDC;
}
 /*#ADFF2F, #F0FFFF, 2F4F4F, F0E68C*/
.contact-header{
  text-align: center;
  color: black;
}
input,textarea {
  outline:none !important;
  outline-width: 0px !important;
  box-shadow: none !important;
}
.star{
  color:red;
}
.contact-space{
  flex-direction: row;
}
.contact-form, .contact-card{
  width: 45%; 
}
.contact-form{
  float: left;
}
.contact-card{
  float: right;
}
/*#ADFF2F #F0E68C*/
.card-header{
  background-color: #2F4F4F !important;
  color: #F0E68C;
}
</style>