<template>
    <div class="counterup-area-2">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="counterup-box-wrap">
                        <div class="counterup-box counterup-box-1">
                            <div class="edu-counterup counterup-style-2" v-for="(counter, i) in funFacts.slice(0, 2)"
                                :key="i">
                                <h2 class="counter-item count-number" :class="counter.class">
                                    <FunFact :number="counter.number" :decimal="counter.decimal"
                                        :suffix="counter.suffix" />
                                </h2>
                                <h6 class="title">{{ counter.title }}</h6>
                            </div>
                        </div>
                        <div class="counterup-box counterup-box-2">
                            <div class="edu-counterup counterup-style-2" v-for="(counter, i) in funFacts.slice(2, 4)"
                                :key="i">
                                <h2 class="counter-item count-number" :class="counter.class">
                                    <FunFact :number="counter.number" :decimal="counter.decimal"
                                        :suffix="counter.suffix" />
                                </h2>
                                <h6 class="title">{{ counter.title }}</h6>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <MouseMove addClassName="shape-1" dataDepth="-1.6" data-aos-delay="100" data-aos="fade"
                                data-aos-duration="100" imgSrc="/images/about/shape-13.png" />
                            <MouseMove addClassName="shape-3" dataDepth="1.6" data-aos-delay="100" data-aos="fade"
                                data-aos-duration="100" imgSrc="/images/counterup/shape-04.png" />
                            <MouseMove addClassName="shape-4" dataDepth="-1.6" data-aos-delay="100" data-aos="fade"
                                data-aos-duration="100" imgSrc="images/counterup/shape-05.png" />
                            <li class="shape-2">
                                <img class="rotateit" src="/images/counterup/shape-02.png" alt="Shape">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FunFact from "../FunFact";
import MouseMove from "../animation/MouseMove";
export default {
    components: {
        FunFact,
        MouseMove,
    },
    data() {
        return {
            funFacts: [
                {
                    number: 50,
                    decimal: 1,
                    class: 'primary-color',
                    title: 'STUDENT ENROLLED',
                    suffix: '+'
                },
                {
                    number: 6,
                    decimal: 1,
                    class: 'secondary-color',
                    title: 'CLASS COMPLETED',
                    suffix: '+'
                },
                {
                    number: 8,
                    decimal: null,
                    class: 'extra05-color',
                    title: 'TOP INSTRUCTORS',
                    suffix: '+'
                },
                {
                    number: 100,
                    decimal: null,
                    class: 'extra02-color',
                    title: 'SATISFACTION RATE',
                    suffix: '%'
                }
            ]
        }
    }
}
</script>