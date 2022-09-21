<template>
    <div class="edu-team-area team-area-1 gap-tb-text">
        <div class="container">
            <SectionTitle preTitle='Instructors' title='Course Instructors' alignment='section-center' />
            <div class="row g-5">
                <div class="col-lg-3 col-sm-6 col-12" data-aos-delay="50" data-aos="fade-up" data-aos-duration="800"
                    v-for="(instructor, key) in instructors.slice(0, 4)" :key="key">
                    <InstructorOne :instructor="instructor" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import instructorData from '../../data/instructor';
import SectionTitle from '../common/SectionTitle'
import InstructorOne from '../instructor/InstructorOne'
export default {
    components: {
        SectionTitle,
        InstructorOne,
    },
    props: ['instructors'],
    data() {
        return {
            instructorData
        }
    }
}
</script>