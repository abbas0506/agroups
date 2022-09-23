<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> @yield('title', 'School Of Technologies') - SOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="8eifeekuWZJchWMACTD4mdVASieejCossoBoomiNt18" />
    <meta name="description"
        content="School Of Technologies Institute for skill development programs, Where you can learn most demanding skill for freelancing by Online Courses or Physical Classes" />
    <meta property="og:title" content="School Of Technologies">
    <meta property="og:description"
        content="School Of Technologies Institute for skill development programs, Where you can learn most demanding skill for freelancing by Online Courses or Physical Classes.">
    <meta property="og:image" content="{{ url('/images/logo/logo-dark.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="{{ url('/images/logo/logo-dark.png') }}">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="favicon.png">

</head>

<body class="antialiased">
    <div id="app">
        @if ($page == 'home')
            <home-page :instructors="{{ $instructors }}" :courses="{{ $courses }}"
                :categories="{{ $categories }}" inline-template />
        @elseif ($page == 'register')
            <register-page @if ($course) :course_id="{{ $course->id }}" @endif
                :courses="{{ $courses }}" :qualifications="{{ $qualifications }}" />
        @elseif ($page == 'contact-us')
            <contactus-page />
        @elseif ($page == 'about-us')
            <aboutus-page :instructors="{{ $instructors }}" />
        @elseif ($page == 'courses')
            <courses-page :courses="{{ $courses }}" />
        @endif
    </div>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ mix('js/app-vue.js') }}"></script>
</body>

</html>
