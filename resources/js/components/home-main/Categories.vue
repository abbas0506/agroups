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

}
</script>