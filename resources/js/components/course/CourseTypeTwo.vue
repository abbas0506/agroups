<template>
    <div class="edu-course course-style-3" :class="extraClass">
        <div class="inner">
            <div class="thumbnail">
                <a to="/course/course-details">
                    <img :src="'/images/course/course-type-02/' + course.image" :alt="course.alt">
                </a>
                <div class="time-top">
                    <span class="duration"><i class="icon-61"></i>{{ course.type }}</span>
                </div>
            </div>
            <div class="content">
                <span class="course-level">{{ course.category }}</span>
                <h5 class="title">
                    <a to="/course/course-details">{{ course.title }}</a>
                </h5>
                <p>{{ course.excerpt }}</p>
                <div class="course-rating">
                    <div class="rating">
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                        <i class="icon-23"></i>
                    </div>
                    <span class="rating-count">({{ course.ratingAvarage }} /{{ course.ratingTotal }} {{
                    course.ratingTotal > 1 ? 'Ratings' : 'Rating' }})</span>
                </div>
                <div class="read-more-btn">
                    <a to="/course/course-details" class="edu-btn btn-small btn-secondary">Learn More <i
                            class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['extraClass', 'course']
}
</script>