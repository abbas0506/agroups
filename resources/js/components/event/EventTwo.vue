<template>
    <div class="edu-event-list event-list-3" :class="eventInfo.colorClass">
        <div class="inner">
            <div class="thumbnail">
                <a to="/event/event-details">
                    <img :src="'/images/event/event-02/' + eventInfo.imgSrc" :alt="(eventInfo.name) + ' Thumbnail'" />
                </a>
            </div>
            <div class="content">
                <ul class="event-meta">
                    <li><i class="icon-27"></i>{{ eventInfo.date }}</li>
                </ul>
                <h4 class="title">
                    <a to="/event/event-details">{{ eventInfo.title }}</a>
                </h4>
                <span class="event-location"><i class="icon-40"></i>{{ eventInfo.location }}</span>
                <p>{{ eventInfo.excerpt }}</p>
                <div class="read-more-btn">
                    <a class="edu-btn btn-medium curved-medium" to="/event/event-details">Attend <i
                            class="icon-4"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['eventInfo']
}
</script>