<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

</head>

<body class="antialiased">
    <div id="app">
        <register-page course_id="2" />
    </div>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ mix('js/app-vue.js') }}"></script>
</body>

</html>
