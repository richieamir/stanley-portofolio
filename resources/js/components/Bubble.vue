<template>
        <div class="mt-5">
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-exp" v-if="type === 'experience'"></i>
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-background" v-if="type === 'background'"></i>
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-offer" v-if="type === 'offer'"></i>
            <div class="bubble row mt-5">
                <div class="m-5 col-md-12">
                    <div v-for="exp in experiences" :key="exp.id" class="content row col-md-12 mt-3">
                        <div class="col-md-5">
                            <h3><b>{{exp.company}}</b></h3>
                            {{exp.startDate}} - {{exp.endDate}}
                        </div>
                        <div class="col-md-1">
                            <span class="vertical-line-icon" >
                                <i class="fas fa-circle fa-2x"></i>
                            </span>
                        </div>
                        <div class="col-md-5">
                            <h3><b>{{exp.role}}</b></h3>
                            {{exp.description}}
                        </div>
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
            type:'experience'
        }
    }
}
</script>