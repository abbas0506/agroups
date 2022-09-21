<template>
    <div class="edu-blog blog-style-list">
        <div class="inner">
            <div class="thumbnail">
                <a to="/blog/blog-details">
                    <img :src="'/images/blog/blog-list/' + blogInfo.imgSrc" :alt="blogInfo.alt">
                </a>
            </div>
            <div class="content">
                <h5 class="title">
                    <a to="/blog/blog-details">{{ blogInfo.title }}</a>
                </h5>
                <ul class="blog-meta">
                    <li><i class="icon-27"></i>{{ blogInfo.date }}</li>
                    <li><i class="icon-28"></i>{{ blogInfo.comment }}</li>
                </ul>
                <p>{{ blogInfo.excerpt4 }}</p>
                <div class="read-more-btn">
                    <a to="/blog/blog-details" class="edu-btn btn-border btn-medium">
                        Learn More <i class="icon-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['blogInfo']
}
</script>