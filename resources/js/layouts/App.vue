<template>
  <div style="background-color:#F2F8FE;height:100vh">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm navbarNew" style="">
      <router-link :to="{ name: 'home' }" class="navbar-brand logo"
        >Logo</router-link
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

export default {
  watch: {
    $route() {
    //   $("#navbarCollapse").collapse("hide");
    },
  },
};
</script>