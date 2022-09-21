<template>
    <div id="main-wrapper" class="main-wrapper">
        <HeaderOne />
        <BreadCrumbTwo title='Contact Us' />
        <section class="contact-us-area">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6">
                        <div class="contact-us-info">
                            <h3 class="heading-title">We're Always Eager to Hear From You!</h3>
                            <ul class="address-list">
                                <li>
                                    <h5 class="title">Address</h5>
                                    <p>Rasheed u Din Colony, Near Wagon Stand, Depalpur, Okara</p>
                                </li>
                                <li>
                                    <h5 class="title">Email</h5>
                                    <p><a href="mailto:schooloftechnologies@gmail.com"
                                            target="_blank">schooloftechnologies@gmail.com</a>
                                    </p>
                                </li>
                                <li>
                                    <h5 class="title">Phone</h5>
                                    <p><a href="tel:+0923021073000">(+92) 302 1073000</a></p>
                                </li>
                            </ul>
                            <ul class="social-share">
                                <li><a href="#"><i class="icon-share-alt"></i></a></li>
                                <li><a href="https://facebook.com/schooloftechs"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://twitter.com/schooloftechs"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-xl-2 col-lg-6">
                        <div class="contact-form form-style-2">
                            <div class="section-title">
                                <h4 class="title">Get In Touch</h4>
                                <p>Fill out this form for booking a consultant advising session.</p>
                            </div>

                            <form class="rnt-contact-form rwt-dynamic-form" ref="form" @submit.prevent="sendEmail">
                                <div class="row row--10">
                                    <div class="form-group col-12">
                                        <input type="text" name="fullname" placeholder="Your name">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="tel" name="phone" placeholder="Phone number">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" cols="30" rows="4"
                                            placeholder="Your message"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="rn-btn edu-btn btn-medium submit-btn" name="submit"
                                            type="submit">Submit Message <i class="icon-4"></i></button>
                                        <div v-if="showResult" class="col-12 success-msg">
                                            <p>{{ resultText }}</p>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <ul class="shape-group">
                                <MouseMove addClassName="shape-1" dataDepth="1" imgSrc="/images/about/shape-13.png" />
                                <MouseMove addClassName="shape-2" dataDepth="-1"
                                    imgSrc="/images/counterup/shape-02.png" />
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="google-map-area">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=@30.672141,73.658810&t=&z=18&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>

        <FooterTwo />
    </div>
</template>

<script>
import emailjs from 'emailjs-com';
import HeaderOne from '../components/header/HeaderOne';
import BreadCrumbTwo from '../components/common/BreadCrumbTwo';
import FooterTwo from '../components/footer/FooterTwo';
import MouseMove from '../components/animation/MouseMove';
export default {
    components: {
        HeaderOne,
        BreadCrumbTwo,
        FooterTwo,
        MouseMove,
    },
    data() {
        return {
            resultText: '',
            showResult: false
        }
    },
    methods: {
        sendEmail(e) {
            emailjs.sendForm(
                'service_bxh6md3',
                'template_1g7v07n',
                this.$refs.form, 'user_8Lx0gfI1ktOoeEN8DTV10'
            )
                .then((result) => {
                    this.showResult = true;
                    this.resultText = 'Your message has been sent successfully. We will contact you soon.';
                    setTimeout(() => {
                        this.showResult = false;
                    }, 5000);
                    e.target.reset();
                    console.log('SUCCESS!', result.text);
                }, (error) => {
                    this.showResult = true;
                    this.resultText = error.text;
                    setTimeout(() => {
                        this.showResult = false;
                    }, 5000);
                    console.log('FAILED...', error.text);
                });
        }
    },
    head() {
        return {
            title: 'Contact Us'
        }
    }
}
</script>