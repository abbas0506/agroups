<template>
    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="page-title">
                    <h1 class="title">{{ title }}</h1>
                </div>
                <ul class="edu-breadcrumb">
                    <li class="breadcrumb-item">
                        <a to="/" class="breadcrumb-item">Home</a>
                    </li>
                    <li class="separator"><i class="icon-angle-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ pageTitle }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['title', 'pageTitle']
}
</script>
