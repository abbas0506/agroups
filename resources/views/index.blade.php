@extends('layouts.index')

@section('header')
<section class="header">
   <x-index.header></x-index.header>
   <!-- <div id="image-animator">
      <img src="{{asset('/images/bg/full/4.png')}}" alt="">
      <img src="{{asset('/images/bg/full/3.png')}}" alt="">
      <img src="{{asset('/images/bg/full/2.png')}}" alt="">
      <img src="{{asset('/images/bg/full/1.png')}}" alt="">
   </div> -->
   <div class="app-msg">
      <p>We teach the best technologies of the world</p>
      <h1>Learn to earn</h1>
      <button class="btn btn-red rounded">
         <a href="{{route('students.create')}}">Register Now</a>
      </button>
   </div>
</section>
@endsection
@section('content')

<section class="who">
   <div class="title red-underline">Our Services</div>
   <div class="row">
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/android.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Android Development</h1>
            <p>Fluter is used to teach android devevelopment</p>
         </div>
         <!-- <a href="{{url('blog#find-university')}}" class="btn-blue">
            Read More
         </a> -->
      </div>

      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/laptop.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Web Designing</h1>
            <p>HTML, CSS, Bootstrap, tailwind css, Javascript, jquery </p>
         </div>
         <!-- <a href="{{url('blog#apply-through-us')}}" class="btn-blue">
            Read More
         </a> -->

      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/coding.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Web Development</h1>
            <p>Wordpress, core PHP and Laravel framework</p>
         </div>


      </div>


   </div>
   <!-- 2nd row -->
   <div class="row mt-5">
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/amazon.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Amazon</h1>
            <p>Amazon Virtual Assistant using latest tools</p>
         </div>

      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/graphics.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Graphics Designing</h1>
            <p>Adobe XD, Illustrtor</p>
         </div>

      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/ppsc.png')}}" alt="">
         </div>
         <div class="content">
            <h1>PPSC/FPSC</h1>
            <p>Preparation for various PPSC, FPSC jobs</p>
         </div>

      </div>




   </div>
</section>

<!-- Quotation -->
<section class="quote">
   <p>Better skills give you better earning</p>
</section>
<!-- FAQ -->
<section class="faq">
   <div class="title red-underline">Frequently Asked Questions</div>

   <div class="row">
      <div class="col">

         <div class="question show">
            <div class="q"> <i data-feather="bell" class="feather-small"></i> What is school of technologies for? </div>
            <div class="ans">School of technologies gives you state the art technologies on the basis of "learn to earn" mode. </div>

         </div>
         <div class="question">
            <div class="q"> <i data-feather="bell" class="feather-small"></i> What services do you provide? </div>
            <div class="ans">We offer android development, web development, amazon virtual assistant, graphics designing and ppsc preparation courses</div>

         </div>
         <div class="question">
            <div class="q"><i data-feather="bell" class="feather-small"></i> How much do you charge? </div>
            <div class="ans">It varies from course to course. For detail, you may put a separate query using whatsapp or contact us page</div>
         </div>
         <div class="question">

            <div class="q"><i data-feather="bell" class="feather-small"></i> Are classes online?</div>
            <div class="ans">
               No, all classes are physical. We believe in quality, not in quantity. We care our students by direct coachig.
            </div>
         </div>
      </div>

</section>


@endsection
@section('footer')
<section class="footer">
   <x-index.footer></x-index.footer>
</section>

@if ($errors->any())
<div class="alert alert-danger mt-5">
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
<br />
@elseif(session('success'))
<script>
Swal.fire({
   icon: 'success',
   title: "Successful",
   showConfirmButton: false,
   timer: 1500
});
</script>
@endif

@endsection

@section('script')
<script>
function validate() {
   var regex = /^\d{10}$/;
   var msg = '';
   var name = $('#name').val()
   var phone = $('#phone').val();
   var email = $('#email').val();
   var message = $('#message').val();

   //validate name
   if (name == '' || name == null) msg = 'Name required!';
   //validare phone no.
   else if (phone == '' || phone == null) msg = 'Phone required!';
   else if (email == '' || email == null) msg = 'Email required!';
   else if (phone.length < 10) msg = 'Too short phone no!';
   else if (phone.length > 10) msg = 'Too long phone no!';
   else if (regex.test(phone) == false) msg = 'invalid phone';
   else if (message == '' || messaage == null) msg = 'Message required!';

   //show validation error, if any
   if (msg != '') {
      Toast.fire({
         icon: 'warning',
         title: msg
      });
      return false;
   }
}

// if window scrolled down, make header light
window.onscroll = function(ev) {
   // var navbar=document.getElementById('navbar');


   if ((window.scrollY) >= 120) {
      // you're at the bottom of the page
      if (!$('#navbar').hasClass('light'))
         $('#navbar').addClass('light');
      $('#menubars').toggleClass('feather-light');

   } else {
      $('#navbar').removeClass('light');
   }
};
</script>
@endsection