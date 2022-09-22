@component('mail::message')
    New Registration

    Account Information:
    Name: {{ $user->name }}
    Email: {{ $user->email }}
    Phone: {{ $user->phone }}
    Course: {{ $course->name }}

    Regards,
    School Of Technologies | SOT
@endcomponent
