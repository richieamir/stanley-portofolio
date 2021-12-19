<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8">
        <p class="header-about-me">Something about me that you should know</p>
        <p class="detail-about-me">My Name is Stanley Muliawan and I'm a full time UI / UX Designer specialized in eCommerce with 4+ years of experience. I focused on creating usable, acceptable, and understandable user experiences for both web and mobile. I am very passionate in modern technology and continuously learning new things to ensure I offer you the best.</p>
      </div>
      <div class="col-md4">
        <img :src="photo" alt="" class="photo-about">
      </div>
      <div class="col-md-12 row">
        <div class="col-md-3">

        </div>
        <div class="col-md-3">
          
        </div>
        <div class="col-md-3">
          
        </div>
        <div class="col-md-3">
          
        </div>
      </div>
    </div>
  </div>
</template>

<script>

require('./../../css/about.css');
import photo from "./../../../public/images/photo-detail.png"
export default {
        data:function(){
      return{
        photo:photo
      }
    }
}
</script>