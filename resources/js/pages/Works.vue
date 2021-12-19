<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5">
        <p class="works">My Selected Works</p>
        <p class="works works-child">UI UX Design</p>
        <p class="works works-child">Grapic Design</p>
        <p class="works works-child">Digital Advertising</p>
      </div>
      <div class="col-md-7">
        <img :src="web1" alt="" class="web">
      </div>
    </div>
  </div>
</template>

<script>
require('./../../css/works.css');
import web1 from "./../../../public/images/web.png"
export default {
    data:function(){
      return{
        web1:web1
      }
    }
}
</script>