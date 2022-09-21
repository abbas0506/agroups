@component('mail::message')
    Hi {{ $user->name }}, Your registration with School of Technologies was done successfully.

    Here is your Account Information:
    Name: {{ $user->name }}
    Email: {{ $user->email }}
    Phone: {{ $user->phone }}
    you can find more information on SOT : ({{ url('/') }})

    Regards,
    School Of Technologies | SOT
@endcomponent
