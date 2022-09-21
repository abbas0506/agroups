<template>
    <div class="edu-blog-area blog-area-1 edu-section-gap">
        <div class="container">
            <SectionTitle preTitle='Latest Articles' title='Get News with EduBlink' alignment='section-center' />

            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-12" data-aos-delay="100" data-aos="fade-up" data-aos-duration="800"
                    v-for="blog in blogData.blogs.slice(0,3)" :key="blog.id">
                    <BlogPostOne :blogInfo="blog" />
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <MouseMove addClassName="shape-1" dataDepth="-1.4" imgSrc="/images/about/shape-02.png" />
            <MouseMove addClassName="shape-2" dataDepth="2.5" />
            <MouseMove addClassName="shape-3" dataDepth="-2.3" imgSrc="/images/counterup/shape-05.png" />
        </ul>
    </div>
</template>

<script>
import blogData from '../../data/blog.json';
import SectionTitle from '../common/SectionTitle.vue';
import BlogPostOne from '../blog/BlogPostOne.vue';
import MouseMove from '../animation/MouseMove.vue';
export default {
    components: {
        SectionTitle,
        BlogPostOne,
        MouseMove,
    },
    data() {
        return {
            blogData
        }
    }
}
</script>