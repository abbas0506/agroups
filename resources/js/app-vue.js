require('./bootstrap');
require('./scrollToTop');
import { createApp } from 'vue'
const app = createApp({})


import VueObserveVisibility from 'vue-observe-visibility'
import VueAwesomeSwiper from 'vue-awesome-swiper';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

// import AOS from 'aos';
// import 'aos/dist/aos.css';
// export default ({ app }) => {
//     app.AOS = new AOS.init({ disable: 'phone', once: true, offset: 10 });
// }

// import CoolLightBox from 'vue-cool-lightbox';
// import 'vue-cool-lightbox/dist/vue-cool-lightbox.min.css';

import { InlineSvgPlugin } from 'vue-inline-svg';
import VueMasonry from 'vue-masonry-css'
import Pagination from 'vue-pagination-2';
import * as VueGoogleMaps from 'vue2-google-maps';


import HomePage from './pages/index'
import CoursesPage from './pages/courses'
import RegisterPage from './pages/register'
import AboutUsPage from './pages/about-us'
import ContactUsPage from './pages/contact-us'

app.use(VueObserveVisibility)
// app.use(VueAwesomeSwiper)
app.use(VueSweetalert2)
// app.use(InlineSvgPlugin)
// app.use(VueMasonry)
// app.use(VueGoogleMaps, {
//     load: {
//         key: 'AIzaSyDPzbTIM3WV8njIqWnGQH47umIP92dfUdY'
//     }
// })
// app.use(CoolLightBox)

// app.component('header-one', HeaderOne)
app.component('home-page', HomePage)
app.component('register-page', RegisterPage)
app.component('courses-page', CoursesPage)
app.component('aboutus-page', AboutUsPage)
app.component('contactus-page', ContactUsPage)
// app.component('pagination', Pagination);
// app.component('CoolLightBox', CoolLightBox)


app.mount('#app')