<template>
    <div class="home-one-cta-two cta-area-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="home-one-cta edu-cta-box bg-image bg-image--7">
                        <div class="inner">
                            <div class="content text-md-end">
                                <span class="subtitle">Get In Touch:</span>
                                <h3 class="title"><a href="mailto:schooloftechnologies@gmail.com"
                                        target="_blank">info</a></h3>
                            </div>
                            <div class="sparator">
                                <span>or</span>
                            </div>
                            <div class="content">
                                <span class="subtitle">Call Us Via:</span>
                                <h3 class="title"><a href="tel:+923021073000">+92 302 1073000</a></h3>
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