<template>
  <div>
    <div>
      <p class="intro">Hi, I am Stanley Muliawan</p>
    </div>
      <img class="path path-position" :src="path" alt="" >
      <img class="group group-position" :src="group " alt="" >
    <div class="background-custom rectangle">
      <img class="photo photo-position" :src="photo" alt="">
    </div>
  </div>
</template>

<script>
require('./../../css/shape.css');
import group from "./../../../public/images/group.png";
import photo from "./../../../public/image/photo.png"
import path from "./../../../public/images/path.png"
export default {
    data:function(){
      return{
        photo:photo,
        path:path,
        group:group
      }
    }
}
</script>