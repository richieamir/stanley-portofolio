<template>
    <div>
        <div class="imgBox">
        <img v-bind:src="pic" class="w-100 img">
        </div>
        <div class="mt-2 type">
            {{ type }}
        </div>
        <div class="mt-2 title">
            {{ title }}
        </div>
    </div>
</template>
<script>
require('./../../css/work.css');
export default {
    data() {
        return {
            pic: 'https://picsum.photos/560/600',
            type:'UI/UX',
            title:'Mobile Apps Design of Klik Indomaret Food'
        }
    }
}
</script>