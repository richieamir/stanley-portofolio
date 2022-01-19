<template>
        <div class="bubble row mt-5">
            <div class="m-5 col-md-12">
                <div v-for="exp in experiences" :key="exp.id" class="content row col-md-12 mt-3">
                    <div class="col-md-5">
                        <h3><b>{{experiences[0].company}}</b></h3>
                        {{experiences[0].startDate}} - {{experiences[0].endDate}}
                    </div>
                    <div class="col-md-1">
                        <span class="vertical-line-icon" >
                            <i class="fas fa-circle fa-2x"></i>
                        </span>
                    </div>
                    <div class="col-md-5">
                        <h3><b>{{experiences[0].role}}</b></h3>
                        {{experiences[0].description}}
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
require('./../../css/bubble.css');
export default {
    data() {
        return {
            experiences:[
                {
                    id:1,
                    company:'PT Indomarco Prismatama',
                    startDate:'March 2018',
                    endDate:'March 2019',
                    role:'Graphic Designer',
                    description:'Graphic Designer for Digital Advertising in Ecommerce Division'
                },
                {
                    id:2,
                    company:'PT Indomarco Prismatama',
                    startDate:'March 2019',
                    endDate:'Present',
                    role:'UI/UX Designer',
                    description:'UI/UX Designer in Ecommerce Division'
                }
            ],
            pic: 'https://picsum.photos/560/600',
            type:'UI/UX',
            title:'Mobile Apps Design of Klik Indomaret Food'
        }
    }
}
</script>