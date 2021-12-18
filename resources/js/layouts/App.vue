<template>
  <div style="height:100vh;
              overflow:hidden;
              background-image:linear-gradient(180deg, #FDFDFD 0%, #A9D4FF 100%);
              ">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbarNew" style="">
      <router-link :to="{ name: 'home' }" class="navbar-brand logo"
        ><img :src="logo" alt="" class="logo-img" style="margin-top:2vh;width:200px"></router-link
      >
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav ml-auto navbar-nav">
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'home' }"
            >
              Home
            </router-link>
          </li>

          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'about' }"
            >
              About Me
            </router-link>
          </li>
          
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'works' }"
            >
              My works
            </router-link>
          </li>
          
          <li class="nav-item">
            <router-link
              class="nav-link"
              data-toggle="collapse"
              :to="{ name: 'contact' }"
            >
              Contact Me
            </router-link>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
require('./../../css/navbar.css');
import logo from "./../../../public/images/logo.png"

export default {
  data:function(){
    return{
      logo:logo
    }
  },
  watch: {
    $route() {
    //   $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>