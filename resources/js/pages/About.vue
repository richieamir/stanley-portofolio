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
      <div class="col-md-12 row mt-4">
        <div class="col-md-3 skill">
          <img :src="experience" alt="" class="skills">
          <button class="btn-skill">My experience</button>
        </div>
        <div class="col-md-3 skill">
          <img :src="background" alt="" class="skills">
          <button class="btn-skill">My background</button>
          
        </div>
        <div class="col-md-3 skill">
          <img :src="offering" alt="" class="skills">
          <button class="btn-skill">What I'm offering</button>
          
        </div>
        <div class="col-md-3 skill">
          <img :src="mywork" alt="" class="skills">
          <button class="btn-skill">Check out my work</button>
        </div>
      </div>
      <div class="col-md-12 mt-4 mr-2">
        <bubble></bubble>
      </div>
    </div>
  </div>
</template>

<script>

require('./../../css/about.css');
import photo from "./../../../public/images/photo-detail.png"
import experience from "./../../../public/images/about_me/experience.png"
import background from "./../../../public/images/about_me/background.png"
import offering from "./../../../public/images/about_me/offering.png"
import mywork from "./../../../public/images/about_me/mywork.png"
import footer from "./../layouts/Footer.vue";
import bubble from "../components/Bubble.vue"
export default {
      data:function(){
        return{
          photo:photo,
          experience:experience,
          background:background,
          offering:offering,
          mywork:mywork,
          footer:footer
        }
    },
    components:{
      'bubble':bubble
    }
}
</script>