<template>
    <span v-observe-visibility="{callback: visibilityChanged, once: true}" class="d-flex justify-content-center">
        <count-up :startVal="startVal ? startVal : 0" :endVal=number :duration="duration ? duration : 5"
            :autoplay="true" :enableScrollSpy="true" :decimalPlaces="decimal ? decimal : null" v-if="isVisible">
        </count-up>
        <span class="edu-vue-count-suffix m-1" v-if="suffix"> {{ suffix }}</span>
    </span>
</template>

<script>

import CountUp from 'vue-countup-v3'
export default {
    props: ['number', 'decimal', 'suffix', 'duration', 'startVal'],
    components: {
        CountUp
    },
    data() {
        return {
            isVisible: true,
        }
    },
    methods: {
        visibilityChanged(isVisible) {
            this.isVisible = isVisible;
        }
    }
}
</script>