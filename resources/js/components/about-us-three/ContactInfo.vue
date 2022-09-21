<template>
    <div class="cta-area-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="home-four-cta edu-cta-box cta-style-3 bg-image bg-image--16">
                        <div class="inner">
                            <div class="content text-end">
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a href="mailto:schooloftechnologies@gmail.com">School Of Techs</a>
                                </h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+9230210731000">+92 302 10731000</a></h3>
                            </div>
                        </div>
                        <ul class="shape-group">
                            <MouseMove addClassName="shape-01" dataDepth="2" imgSrc="/images/cta/shape-06.png" />
                            <MouseMove addClassName="shape-02" dataDepth="-2" imgSrc="/images/cta/shape-12.png" />
                            <MouseMove addClassName="shape-03" dataDepth="-3" imgSrc="/images/cta/shape-04.png" />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MouseMove from '../animation/MouseMove'
export default {
    components: {
        MouseMove,
    }
}
</script>