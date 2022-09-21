<template>
    <div id="main-wrapper" class="main-wrapper">
        <HeaderOne showHeaderTop="true" />

        <BreadCrumbThree pageTitle='My Account' title='Register' />

        <section class="account-page-area section-gap-equal">
            <div class="container position-relative">
                <div class="row g-5 justify-content-center">
                    <div class="">
                        <div class="login-form-box registration-form">
                            <!-- <h3 class="title">Registration</h3>
                            <p>Already have an account? <a href="#">Sign in</a></p> -->
                            <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                            <ul>
                                <li v-for="error in errors" class="color-danger">{{ error }}</li>
                            </ul>
                            </p>
                            <form novalidate="true" ref="regform">
                                <div class="form-group">
                                    <label for="reg-name">Select Course*</label>
                                    <select v-model="course">
                                        <option v-for="(c,index) in courses" :key="index" :value="c.id">{{ c.name}}
                                        </option>

                                    </select>
                                </div>
                                <div class="row g-lg-5 ">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="reg-name">Name*</label>
                                            <input v-model="name" type="text" id="reg-name" placeholder="Full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone*</label>
                                            <input v-model="phone" type="text" id="phone" minlength="11" maxlength="11"
                                                placeholder="03001234567">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-lg-5">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="address">Address*</label>
                                            <input v-model="address" type="text" id="address" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth*</label>
                                            <input v-model="dob" type="date" id="dob" placeholder="dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-lg-5">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="log-password">Email*</label>
                                            <input v-model="email" type="text" id="email" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="reg-name">Select Qualifications*</label>
                                            <select v-model="qualification">
                                                <option v-for="(c,index) in qualifications" :key="index" :value="c.id">
                                                    {{
                                                    c.title}}
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group chekbox-area">
                                    <div class="edu-form-check">
                                        <input type="checkbox" v-model="agreetc" id="terms-condition">
                                        <label for="terms-condition">I agree the User Agreement and <a href="#">Terms &
                                                Condition.</a> </label>
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
import BreadCrumbThree from '../components/common/BreadCrumbThree';
import FooterTwo from '../components/footer/FooterTwo.vue';
import MouseMove from '../components/animation/MouseMove';
export default {
    props: ['course_id', 'courses', 'qualifications'],
    components: {
        HeaderOne,
        BreadCrumbTwo,
        BreadCrumbThree,
        FooterTwo,
        MouseMove,
    },
    mounted() {
        this.course = this.course_id ?? '1';
    },
    data() {
        return {
            'name': '',
            'email': '',
            'phone': '',
            'address': '',
            'qualification': 1,
            'course': '',
            'dob': new Date('2000-01-02T00:00').toISOString().slice(0, 10),
            'agreetc': true,
            'errors': [],
        }
    },
    methods: {
        reigster: async function () {
            this.errors = [];
            if (!this.name) {
                this.errors.push('Name required.');
            } if (!this.phone) {
                this.errors.push('Phone required.');
            } if (!this.address) {
                this.errors.push('Address required.');
            } if (!this.dob) {
                this.errors.push('Date of Birth required.');
            }
            if (!this.email) {
                this.errors.push('Email required.');
            } else if (!this.validEmail(this.email)) {
                this.errors.push('Valid email required.');
            }
            if (this.errors.length) {
                this.$swal.fire({
                    icon: 'error',
                    title: 'Please fill the required fields',
                    showConfirmButton: false,
                });
                return;
            }
            try {
                var res = await axios.post('/students', {
                    'name': this.name,
                    'qualification': this.qualification,
                    'course_id': this.course,
                    'phone': this.phone,
                    'address': this.address,
                    'email': this.email,
                    'dob': this.dob,
                });
                console.log(res.data);
                this.$refs.regform.reset();
                this.$swal.fire({
                    icon: 'success',
                    title: 'Course register successfully, Please check your email',
                    showConfirmButton: false,
                });
            } catch (error) {
                if (error.response) {
                    console.log(error.response.data);
                    var msg = error.response.data.errors;
                    if (msg.email) {
                        msg = msg.email[0];
                    } else if (msg.phone) {
                        msg = msg.phone[0];
                    }
                    msg = msg ?? error.response.data.message;
                    this.$swal.fire({
                        icon: 'error',
                        title: msg,
                        showConfirmButton: false,
                    });
                } else if (error.request) {
                    console.log(error.request);
                } else {
                    console.log('Error', error.message);
                }
            }
        },
        validEmail: function (email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    }
}
</script>