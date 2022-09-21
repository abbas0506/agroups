<template>
    <div id="main-wrapper" class="main-wrapper">
        <HeaderOne showHeaderTop="true" />

        <Banner />

        <Features />

        <Categories :categories="categories" />

        <About />

        <Course :courses="courses" />

        <FunFact />

        <!-- <TestimonialOne /> -->

        <!-- <ContactInfo /> -->

        <Instructor :instructors="instructors" />

        <CTAOne />

        <!-- <LogoOne /> -->

        <!-- <Blog /> -->

        <FooterTwo />
    </div>
</template>

<script>
import HeaderOne from "../components/header/HeaderOne.vue";
import Banner from "../components/home-main/Banner";
import Features from "../components/home-main/Features";
import Categories from "../components/home-main/Categories";
import About from "../components/home-main/About";
import Course from "../components/home-main/Course";
import FunFact from "../components/home-main/FunFact";
import TestimonialOne from "../components/testimonial/TestimonialOne";
import ContactInfo from "../components/home-main/ContactInfo";
import Instructor from "../components/home-main/Instructor";
import CTAOne from "../components/cta/CTAOne";
import LogoOne from "../components/logo/LogoOne";
import Blog from "../components/home-main/Blog";
import FooterTwo from "../components/footer/FooterTwo";
export default {
    components: {
        HeaderOne,
        Banner,
        Features,
        Categories,
        About,
        Course,
        FunFact,
        TestimonialOne,
        ContactInfo,
        Instructor,
        CTAOne,
        LogoOne,
        Blog,
        FooterTwo,
    },
    props: ['instructors', 'courses', 'categories'],
    head() {
        return {
            title: 'SOT Education'
        }
    },
}
</script>