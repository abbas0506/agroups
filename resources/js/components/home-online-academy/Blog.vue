<template>
    <div class="edu-blog-area blog-area-3 edu-section-gap">
        <div class="container">
            <SectionTitle preTitle="Latest Articles" title="Get News with EduBlink" alignment="section-center" />
            <div class="row g-5 row--45">

                <div class="col-lg-6 col-12" data-aos-delay="50" data-aos="fade-up" data-aos-duration="800"
                    v-for="blog in blogData.blogs.slice(0, 1)" :key="blog.id">
                    <div class="edu-blog blog-style-2 first-large-blog">
                        <div class="inner">
                            <div class="thumbnail">
                                <a to="/blog/blog-details">
                                    <img :src="'/images/blog/blog-two/' + blog.imgSrc" :alt="blog.alt">
                                </a>
                            </div>
                            <div class="content">
                                <div class="blog-date">
                                    <span class="day">{{ blog.dateOnly }}</span>
                                    <span class="month">{{ blog.monthOnly }}</span>
                                </div>
                                <div class="category-wrap">
                                    <a to="/blog/blog-masonry" class="blog-category">{{ blog.category }}</a>
                                </div>
                                <h4 class="title">
                                    <a to="/blog/blog-details">{{ blog.title }}</a>
                                </h4>
                                <p>{{ blog.excerpt2 }}</p>
                                <ul class="blog-meta">
                                    <li><i class="icon-25"></i>By <a to="/blog/blog-masonry">{{ blog.author }}</a></li>
                                    <li><i class="icon-28"></i>{{ blog.comment }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12" data-aos-delay="50" data-aos="fade-up" data-aos-duration="800">
                    <div class="edu-blog blog-style-2" v-for="blog in blogData.blogs.slice(1, 4)" :key="blog.id">
                        <div class="inner">
                            <div class="thumbnail">
                                <a to="/blog/blog-details">
                                    <img :src="'/images/blog/blog-two/' + blog.imgSrc" :alt="blog.alt">
                                </a>
                                <div class="blog-date">
                                    <span class="day">{{ blog.dateOnly }}</span>
                                    <span class="month">{{ blog.monthOnly }}</span>
                                </div>
                            </div>
                            <div class="content">
                                <div class="category-wrap">
                                    <a to="/blog/blog-masonry" class="blog-category">{{ blog.category }}</a>
                                </div>
                                <h5 class="title"><a to="/blog/blog-details">{{ blog.title }}</a></h5>
                                <ul class="blog-meta">
                                    <li><i class="icon-25"></i>By <a to="/blog/blog-masonry">Edward</a></li>
                                    <li><i class="icon-28"></i>{{ blog.comment }}</li>
                                </ul>
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