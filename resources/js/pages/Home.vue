<template>
  <div class="row" style="overflow:hidden">
    <div class="col-md-12 row">

      <img class="path path-position" :src="path" alt="" >
      <img class="group group-position" :src="group " alt="" >
    <div class="col-md-6">
      <p class="intro">Hi, I am Stanley Muliawan</p>
      <p class="intro-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas suscipit lacus sit amet maximus. Mauris in sodales ante. Aenean tincidunt orci vitae sollicitudin sodales.</p>
      <button type="submit" class="button">More about me</button>
    </div>
    <div class="col-md-6">
      <img class="photo photo-position" :src="photo" alt="">

    </div>
    </div>
  </div>
</template>

<script>
require('./../../css/shape.css');
import group from "./../../../public/images/group.png"
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