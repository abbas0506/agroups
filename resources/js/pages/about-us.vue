<template>
    <div id="main-wrapper" class="main-wrapper">

        <HeaderOne />

        <BreadCrumbThree title='About Us' />

        <About />

        <FunFact />

        <WhyChoose />

        <ContactInfo />

        <Instructor :instructors="instructors" />

        <!-- <Testimonial /> -->

        <FooterTwo />
    </div>
</template>

<script>
import HeaderOne from '../components/header/HeaderOne';
import BreadCrumbThree from '../components/common/BreadCrumbThree';
import About from '../components/about-us-three/About';
import FunFact from '../components/about-us-three/FunFact';
import WhyChoose from '../components/about-us-three/WhyChoose';
import ContactInfo from '../components/about-us-three/ContactInfo';
import Instructor from '../components/about-us-three/Instructor';
import Testimonial from '../components/about-us-three/Testimonial';
import FooterTwo from '../components/footer/FooterTwo';
export default {
    components: {
        HeaderOne,
        BreadCrumbThree,
        About,
        FunFact,
        WhyChoose,
        ContactInfo,
        Instructor,
        Testimonial,
        FooterTwo,
    },
    props: ['instructors'],
    head() {
        return {
            title: 'About Us 3'
        }
    }
}
</script>