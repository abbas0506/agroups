<template>
    <div class="edu-course course-style-1 hover-button-bg-white" :class="extraClass">
        <div class="inner">
            <div class="thumbnail">
                <a :href="'/course/'+course.slug">
                    <img :src="course.logo" :alt="course.alt" class="">
                </a>
                <div class="time-top">
                    <span class="duration"><i class="icon-61"></i>{{ course.duration }} Hours</span>
                </div>
            </div>
            <div class="content">
                <span class="course-level">{{ course.level.toUpperCase() }}</span>
                <h6 class="title">
                    <a href="/course/course-details">{{ course.name }}</a>
                </h6>
                <div class="course-rating">
                    <div class="rating">
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                    </div>
                    <span class="rating-count">({{ 4.8 }} /{{ 5 }} {{
                    course.ratingTotal > 1 ? 'Ratings' : 'Rating' }})</span>
                </div>
                <!-- <div class="course-price">${{ course.currentPrice }}</div> -->
                <ul class="course-meta">
                    <li><i class="icon-24"></i>{{ course.lessons }} {{ course.lessons > 1 ? 'Lessons' : 'Lesson' }}</li>
                    <li><i class="icon-25"></i>{{ course.students }} {{ course.students ? 'Students' : 'Student' }}</li>
                </ul>
            </div>
        </div>
        <div class="course-hover-content-wrapper">
            <button class="wishlist-btn"><i class="icon-22"></i></button>
        </div>
        <div class="course-hover-content">
            <div class="content">
                <button class="wishlist-btn"><i class="icon-22"></i></button>
                <span class="course-level">{{ course.level.toUpperCase() }}</span>
                <h6 class="title">
                    <a href="/course/course-details">{{ course.name }}</a>
                </h6>
                <div class="course-rating">
                    <div class="rating">
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                    </div>
                    <span class="rating-count">({{ 4.8 }} /{{ 5 + course.ratingTotal >
                    1 ? 'Ratings' : 'Rating' }})</span>
                </div>
                <!-- <div class="course-price">${{ course.currentPrice }}</div> -->
                <p>{{ course.short_description }}</p>
                <ul class="course-meta">
                    <li><i class="icon-24"></i>{{ course.lessons + course.lessons > 1 ? 'Lessons' : 'Lesson' }}</li>
                    <li><i class="icon-25"></i>{{ course.students + course.students ? 'Students' : 'Student' }}</li>
                </ul>
                <a :href="'/register/'+course.slug" class="edu-btn btn-secondary btn-small">Enrolled <i
                        class="icon-4"></i></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['extraClass', 'course']
}
</script>