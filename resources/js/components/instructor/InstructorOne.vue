<template>
    <div class="edu-team-grid team-style-1">
        <div class="inner">
            <div class="thumbnail-wrap">
                <div class="thumbnail">
                    <a href="/instructor/instructor-profile">
                        <img :src="instructor.photo" :alt="(instructor.name) + ' Thumbnail'" />
                    </a>
                </div>
                <ul class="team-share-info">
                    <li><a href="#"><i class="icon-share-alt"></i></a></li>
                    <li v-for="(social, key) in instructor.socialLinks" :key="key">
                        <a :aria-label="social.name" :href="social.url">
                            <i :class="social.iconName"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <h5 class="title">
                    <a href="/instructor/instructor-profile">{{ instructor.name }}</a>
                </h5>
                <span class="designation">{{ instructor.instructor.specialization }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['instructor']
}
</script>