<template>
  <div class="container mt-5">
    <div class="col-md-12 row mt-5">
        <div class="col-md-12 mt-5 row">
          <div class="col-md-1 nav mt-5">
            All
          </div>
          <div class="col-md-1 nav mt-5">
            UI/UX
          </div>
          <div class="col-md-2 nav mt-5">
            Graphic Design
          </div>
        </div>
        <work class="col-md-6  p-2"></work>
        <work class="col-md-6  p-2"></work>
        <work class="col-md-6  p-2 mt-5"></work>
        <work class="col-md-6  p-2 mt-5"></work>
    </div>
  </div>
</template>

<script>
require('./../../css/works.css');
import web1 from "./../../../public/images/web.png"
import work from "../components/work.vue"
export default {
    data:function(){
      return{
        web1:web1
      }
    },
    components:{
      'work':work
    }
}
</script>