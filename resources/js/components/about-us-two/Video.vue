<template>
    <div>
        <div class="video-area-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="video-gallery">
                            <div class="thumbnail">
                                <img src="/images/others/video-01.jpg" alt="Thumb">
                                <span v-for="( _, imageIndex ) in items" :key="imageIndex">
                                    <a @click="index = imageIndex" class="video-play-btn video-popup-activation">
                                        <i class="icon-18"></i>
                                    </a>
                                </span>
                            </div>
                            <ul class="shape-group">
                                <li class="shape-1">
                                    <img class="rotateit" src="/images/about/shape-25.png" alt="Shape">
                                </li>
                                <li class="shape-2">
                                    <img src="/images/faq/shape-04.png" alt="Shape">
                                </li>

                                <MouseMove addClassName="shape-3 shape-light" dataDepth="2"
                                    imgSrc="/images/faq/shape-14.png" />

                                <MouseMove addClassName="shape-3 shape-dark" dataDepth="2"
                                    imgSrc="/images/faq/dark-shape-14.png" />
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <CoolLightBox :items="items" :index="index" @close="index = null">
        </CoolLightBox>
    </div>
</template>

<script>
import MouseMove from "../animation/MouseMove";
export default {
    components: {
        MouseMove,
    },
    data() {
        return {
            items: [
                {
                    src: "https://www.youtube.com/watch?v=PICj5tr9hcc"
                }
            ],
            index: null
        }
    }
}
</script>