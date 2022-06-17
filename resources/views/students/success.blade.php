@extends('layouts.index')

@section('header')
    <section class="registration">
        <x-index.header></x-index.header>
    </section>
@endsection
@section('content')
    <div class="page-centered w-50 bg-white p-4 overlay">

        <h1>Congratualtion!</h1>
        <p class="mt-2">You have successfully registered on schooloftechnologies.com. Keep in touch, soon you will
            be informed via email or phone about the classes.</p>

        <div class="txt-grey txt-l txt-b lh-40">Plese Attened the Orientation June 19, 2022 05:00 PM</div>
        <div class="txt-grey txt-l txt-b lh-40">Venue: <a href="https://www.google.com/maps/@30.6722083,73.6587437,21z"
                target="_blannk"> Rasheed-u-Din Colony, Street # 1, Near Wagon Stand, Depalpur</a></div>

        <a href="/" class="txt-blue mt-3" style="float:right">
            <button class="btn btn-success">Ok, I'll</button>
        </a>

    </div>
@endsection

<!-- script goes here -->
@section('script')
    <script>
        function reset() {
            $('#form')[0].reset();
        }

        function validate() {
            var obtained = $('#obtained').val()
            var total = $('#total').val()

            var msg = '';
            if (obtained < 0) msg = 'Obtained marks too low';
            else if (obtained > total) msg = 'Obtained greater than total?';
            if (msg != '') {
                Toast.fire({
                    icon: 'warning',
                    title: msg
                });
                return false;
            }

        }
    </script>
@endsection
