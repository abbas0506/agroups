<template>
    <div class="edu-team-area team-area-3 edu-section-gap z-10">
        <div class="container">
            <SectionTitle preTitle='Instructors' title='Course Instructors' alignment='section-center' />

            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-aos-delay="50" data-aos="fade-up" data-aos-duration="800"
                    v-for="(instructor, key) in instructors.slice(0, 3)" :key="key">
                    <InstructorThree :instructor="instructor" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import instructorData from '../../data/instructor';
import SectionTitle from '../common/SectionTitle';
import InstructorThree from '../instructor/InstructorThree';
export default {
    components: {
        SectionTitle,
        InstructorThree,
    },
    props: ['instructors']
}
</script>