<template>
        <div class="mt-5">
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-exp" v-if="type === 'experience'"></i>
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-background" v-if="type === 'background'"></i>
                    <i class="fas fa-caret-up fa-5x mb-5 arrow-offer" v-if="type === 'offer'"></i>
            <div class="bubble row mt-5">
                <div class="m-5 col-md-12" v-if="type === 'experience'">
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

                <div class="m-5 col-md-12" v-if="type === 'background'">
                    <div class="mr-5">{{background}}</div>
                </div>

                <div class="m-5 col-md-12 row" v-if="type === 'offer'">
                    <div class="col-md-3">
                        <div>
                            <img :src="uiux" alt="">
                        </div>
                        <div class="d-flex justify-content-center">
                            <b>UI UX</b>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <img :src="graphic" alt="">
                        </div>
                        <div class="d-flex justify-content-center">
                            <b>Graphic Design</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
require('./../../css/bubble.css');
import uiux from "./../../../public/images/offer/uiux.png";
import graphic from "./../../../public/images/offer/graphic_design.png";
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
                }
                ,
                {
                    id:2,
                    company:'PT Indomarco Prismatama',
                    startDate:'March 2019',
                    endDate:'Present',
                    role:'UI/UX Designer',
                    description:'UI/UX Designer in Ecommerce Division'
                }
            ],
            background:"I graduate from Bina Nusantara University in 2020, and my major is Computer Science. At this point you might be wondering why I didn't choose the IT career path and chose the design career path instead. That's because when I was still in university, I enjoy design much further than programming. Even though I didn't have a background in graphic design, I'm passionate to learn about design. My degree in computer science helps me with the analysis and technical understanding in UI / UX Design.",
            offering:"0",
            graphic:graphic,
            uiux:uiux,
            type:'experience'
        }
    }
}
</script>