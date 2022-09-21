<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title', 'Home') - SOT</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

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
        @elseif ($page == 'courses')
            <courses-page :courses="{{ $courses }}" />
        @endif
    </div>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ mix('js/app-vue.js') }}"></script>
</body>

</html>
