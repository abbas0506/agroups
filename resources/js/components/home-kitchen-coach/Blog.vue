<template>
    <div class="edu-blog-area blog-area-1 edu-section-gap">
        <div class="container">
            <SectionTitle preTitle="Latest Articles" title="Get News with EduBlink" alignment="text-center" />
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-12" data-aos-delay="100" data-aos="fade-up" data-aos-duration="800"
                    v-for="blogItem in blogData.blogs.slice(0, 3)" :key="blogItem.id">
                    <div class="edu-blog blog-style-1">
                        <div class="inner">
                            <div class="thumbnail">
                                <a to="/blog/blog-details">
                                    <img :src="'/images/blog/kitchen/' + blogItem.imgSrc" :alt="blogItem.alt">
                                </a>
                            </div>
                            <div class="content position-top">
                                <div class="read-more-btn">
                                    <a to="/blog/blog-details" class="btn-icon-round">
                                        <i class="icon-4"></i>
                                    </a>
                                </div>
                                <div class="category-wrap">
                                    <a to="/blog/blog-masonry" class="blog-category">{{ blogItem.category }}</a>
                                </div>
                                <h5 class="title"><a to="/blog/blog-details">{{ blogItem.title }}</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-27"></i>{{ blogItem.date }}</li>
                                    <li><i class="icon-28"></i>{{ blogItem.comment }}</li>
                                </ul>
                                <p>{{ blogItem.excerpt }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import blogData from '~/data/blog'
export default {
    components: {
        SectionTitle: () => import('@/components/common/SectionTitle')
    },
    data() {
        return {
            blogData
        }
    }
}
</script>