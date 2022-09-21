<template>
    <div id="main-wrapper" class="main-wrapper">

        <HeaderOne />

        <BreadCrumbTwo title='Courses' />

        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container">
                <div class="edu-sorting-area">
                    <div class="sorting-left">
                        <h6 class="showing-text">We found <span>{{ courses.length }}</span> courses available for you
                        </h6>
                    </div>
                    <!-- <div class="sorting-right">
                        <div class="layout-switcher">
                            <label>Grid</label>
                            <ul class="switcher-btn">
                                <li>
                                    <a href="/course/course-one" class="active"><i class="icon-53"></i></a>
                                </li>
                                <li>
                                    <a href="/course/course-four"><i class="icon-54"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="edu-sorting">
                            <div class="icon"><i class="icon-55"></i></div>
                            <select class="edu-select">
                                <option>Filters</option>
                                <option>Low To High</option>
                                <option>High Low To</option>
                                <option>Last Viewed</option>
                            </select>
                        </div>
                    </div> -->
                </div>

                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 col-xl-3" v-for="course in coursesComputed" :key="course.id">
                        <CourseTypeOne :course="course" extraClass="course-box-shadow" />
                    </div>
                </div>

                <div class="load-more-btn">
                    <button class="edu-btn" @click="loadMore" v-if="defaultNumberOfCourses < courses.length">
                        Load More <i class="icon-56"></i>
                    </button>
                </div>
            </div>
        </div>

        <FooterTwo />
    </div>
</template>

<script>
import HeaderOne from '../components/header/HeaderOne';
import BreadCrumbTwo from '../components/common/BreadCrumbTwo';
import CourseTypeOne from '../components/course/CourseTypeOne';
import FooterTwo from '../components/footer/FooterTwo';
export default {
    components: {
        HeaderOne,
        BreadCrumbTwo,
        CourseTypeOne,
        FooterTwo,
    },
    props: ['courses'],
    data() {
        return {
            defaultNumberOfCourses: 8
        }
    },
    computed: {
        coursesComputed() {
            return this.courses.slice(0, this.defaultNumberOfCourses);
        }
    },
    methods: {
        loadMore() {
            this.defaultNumberOfCourses += 4;
        }
    },
    head() {
        return {
            title: 'Course Style 1'
        }
    }
}
</script>