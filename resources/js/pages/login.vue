<template>
    <div id="main-wrapper" class="main-wrapper">
        <HeaderOne />

        <BreadCrumbTwo pageTitle='My Account' title='Account' />

        <section class="account-page-area section-gap-equal">
            <div class="container position-relative">
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-5">
                        <div class="login-form-box">
                            <h3 class="title">Sign in</h3>
                            <p>Don’t have an account? <a href="#">Sign up</a></p>
                            <form>
                                <div class="form-group">
                                    <label for="current-log-email">Username or email*</label>
                                    <input type="email" name="current-log-email" id="current-log-email"
                                        placeholder="Email or username">
                                </div>
                                <div class="form-group">
                                    <label for="current-log-password">Password*</label>
                                    <input type="password" name="current-log-password" id="current-log-password"
                                        placeholder="Password">
                                    <span class="password-show"><i class="icon-76"></i></span>
                                </div>
                                <div class="form-group chekbox-area">
                                    <div class="edu-form-check">
                                        <input type="checkbox" id="remember-me">
                                        <label for="remember-me">Remember Me</label>
                                    </div>
                                    <a href="#" class="password-reset">Lost your password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="edu-btn btn-medium">Sign in <i
                                            class="icon-4"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="login-form-box registration-form">
                            <h3 class="title">Registration</h3>
                            <p>Already have an account? <a href="#">Sign in</a></p>
                            <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                            <ul>
                                <li v-for="error in errors" class="text-red-100">{{ error }}</li>
                            </ul>
                            </p>
                            <form novalidate="true">
                                <div class="form-group">
                                    <label for="reg-name">Name*</label>
                                    <input v-model="password" type="text" name="reg-name" id="reg-name"
                                        placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="reg-name">Course*</label>
                                    <select v-model="course" name="course" id="course" placeholder="Full name">
                                        <option value="1">Mobile App Development</option>
                                        <option value="2">Full Stack Web Development</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="log-email">Username or email*</label>
                                    <input v-model="email" type="email" name="log-email" id="log-email"
                                        placeholder="Email or username">
                                </div>
                                <div class="form-group">
                                    <label for="log-password">Password*</label>
                                    <input v-model="password" type="password" name="log-password" id="log-password"
                                        placeholder="Password">
                                    <span class="password-show"><i class="icon-76"></i></span>
                                </div>
                                <div class="form-group chekbox-area">
                                    <div class="edu-form-check">
                                        <input type="checkbox" id="terms-condition">
                                        <label for="terms-condition">I agree the User Agreement and <a
                                                href="terms-condition.html">Terms & Condition.</a> </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" v-on:click="reigster" class="edu-btn btn-medium">Create
                                        Account
                                        <i class="icon-4"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <ul class="shape-group">
                    <MouseMove addClassName="shape-1" dataDepth="2" imgSrc="/images/about/shape-07.png" />
                    <MouseMove addClassName="shape-2" dataDepth="-2" imgSrc="/images/about/shape-13.png" />
                    <MouseMove addClassName="shape-3" dataDepth="2" imgSrc="/images/counterup/shape-02.png" />
                </ul>
            </div>
        </section>

        <FooterTwo />
    </div>
</template>

<script>
import HeaderOne from '../components/header/HeaderOne';
import BreadCrumbTwo from '../components/common/BreadCrumbTwo';
import FooterTwo from '../components/footer/FooterTwo.vue';
import MouseMove from '../components/animation/MouseMove';
export default {
    props: ['course_id'],
    components: {
        HeaderOne,
        BreadCrumbTwo,
        FooterTwo,
        MouseMove,
    },
    mounted() {
        this.course = this.course_id ?? '';
    },
    data() {
        return {
            'name': '',
            'email': '',
            'password': '',
            'course': '',
            'errors': [],
        }
    },
    head() {
        return {
            title: 'Terms & Condition'
        }
    },
    methods: {
        reigster() {
            if (!this.email) {
                this.errors.push('Email required.');
            } else if (!this.validEmail(this.email)) {
                this.errors.push('Valid email required.');
            }
            if (!this.errors.length) {
                return;
            }
            axios.post('/register', {
                'name': this.name,
                'email': this.email,
                'password': this.password,
            }).then((response) => {
                console.log(response);
            }, (error) => {
                console.log(error);
            });
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    }
}
</script>