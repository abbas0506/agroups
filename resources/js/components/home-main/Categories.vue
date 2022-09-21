<template>
    <div class="edu-categorie-area categorie-area-2 edu-section-gap">
        <div class="container">
            <SectionTitle alignment="section-center" title="Top Categories"
                subTitle="We offer following categories for Freelancing skills" />

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-aos-delay="50" data-aos="fade-up" data-aos-duration="800"
                    v-for="(category, index) in categories" :key="index">
                    <div class="categorie-grid categorie-style-2 color-secondary-style">
                        <div class="icon">
                            <i :class="category.icon"></i>
                        </div>
                        <div class="content">
                            <a :href="'/categories/'+category.slug">
                                <h5 class="title">{{ category.name }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SectionTitle from "../common/SectionTitle.vue";
export default {
    components: {
        SectionTitle,
    },
    props: ['categories'],
    // data() {
    //     return {
    //         categories: [
    //             {
    //                 slug: 'mad',
    //                 title: "Mobile App Developemnt (Flutter)",
    //                 iconClass: "icon-11",
    //                 colorClass: "color-primary-style",
    //                 extraClass: "business-management"
    //             },
    //             {
    //                 slug: 'fsw',
    //                 title: "Full Stack Web Development",
    //                 iconClass: "icon-10",
    //                 colorClass: "color-secondary-style",
    //                 extraClass: "art-design"
    //             },
    //             {
    //                 slug: 'wwd',
    //                 title: "Wordpress Web Development",
    //                 iconClass: "icon-11",
    //                 colorClass: "color-extra01-style",
    //                 extraClass: "personal-development"
    //             },
    //             {
    //                 slug: 'ava',
    //                 title: "Amazon Virtual Assistant",
    //                 iconClass: "icon-12",
    //                 colorClass: "color-tertiary-style",
    //                 extraClass: "health-fitness"
    //             },
    //             {
    //                 slug: 'agd',
    //                 title: "Advance Graphic Designing",
    //                 iconClass: "icon-13",
    //                 colorClass: "color-extra02-style",
    //                 extraClass: "data-science"
    //             },
    //             {
    //                 slug: 'avd',
    //                 title: "Video Editing",
    //                 iconClass: "icon-14",
    //                 colorClass: "color-extra03-style",
    //                 extraClass: "marketing"
    //             },
    //             {
    //                 slug: 'bgd',
    //                 title: "Basic Graphic Designing",
    //                 iconClass: "icon-15",
    //                 colorClass: "color-extra04-style",
    //                 extraClass: "business-finance"
    //             },
    //             {
    //                 slug: 'jtp',
    //                 title: "Job Test Prepration",
    //                 iconClass: "icon-17",
    //                 colorClass: "color-extra06-style",
    //                 extraClass: "video-photography"
    //             }
    //         ]
    //     }
    // }
}
</script>