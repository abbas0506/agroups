@extends('layouts.index')

@section('header')
<section class="registration mini_header">
   <x-index.header></x-index.header>
</section>
@endsection
@section('content')
<div class="page-centered w-70 bg-white p-4">

   <h1>Congratualtion!</h1>
   <p>You have successfully registered on schooloftechnologies.com. Keep in touch, soon you will be informed via email or phone about the classes</p>
   <a href="/" class="txt-blue">
      <button class="btn btn-success">Go back</button>

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