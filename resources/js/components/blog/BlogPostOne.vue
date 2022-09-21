<template>
    <div class="edu-blog blog-style-1">
        <div class="inner">
            <div class="thumbnail">
                <a to="/blog/blog-details">
                    <img :src="'/images/blog/blog-one/' + blogInfo.imgSrc" :alt="blogInfo.alt">
                </a>
            </div>
            <div class="content position-top">
                <div class="read-more-btn">
                    <a to="/blog/blog-details" class="btn-icon-round">
                        <i class="icon-4"></i>
                    </a>
                </div>
                <div class="category-wrap">
                    <a to="/blog/blog-masonry" class="blog-category">{{ blogInfo.category }}</a>
                </div>
                <h5 class="title"><a to="/blog/blog-details">{{ blogInfo.title }}</a></h5>
                <ul class="blog-meta">
                    <li><i class="icon-27"></i>{{ blogInfo.date }}</li>
                    <li><i class="icon-28"></i>{{ blogInfo.comment }}</li>
                </ul>
                <p>{{ blogInfo.excerpt }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['blogInfo']
}
</script>