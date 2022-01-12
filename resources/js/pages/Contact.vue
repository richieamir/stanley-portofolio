<template>
  <div class="container mt-5 row">
    <div class="col-md-5">
      <div class="col-md-12 mt-5">
        <h1><b>Let's get in touch !</b></h1>
      </div>
      <div class="col-md-12 mt-5">
        <span class="fa-stack fa-1x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-comment-alt fa-stack-1x fa-inverse"></i>
        </span>
          My Contacts
      </div>
      <div class="col-md-12 mt-2">
        <b>stanleymuliawan996@gmail.com</b>
      </div>
      <div class="col-md-12 mt-2">
        <a href="">linkedin</a>
      </div>
      <div class="col-md-12">
        <a href="">instagram</a>
      </div>
      <div class="col-md-12 mt-5">
        <span class="fa-stack fa-1x">
          <i class="fas fa-circle fa-stack-2x"></i>
          <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
        </span>
          My Location
      </div>
      <div class="col-md-12 mt-2">
        <b>Jakarta, Indonesia</b>
      </div>
    </div>
    <div class="col-md-6 mt-5" style="margin-top:100px !important">
        <img :src="logo" alt="">
    </div>
    <div class="col-md-1" style="margin-top:600px !important;">.</div>
  </div>
</template>

<script>
require('./../../css/contact.css');
import logo from "./../../../public/images/contact/logo.svg"
export default {
    data:function(){
      return{
        logo:logo
        }
    }
}
</script>