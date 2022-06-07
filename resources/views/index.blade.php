@extends('layouts.index')

@section('header')
<section class="header">
   <x-index.header></x-index.header>
   <div id="image-animator">
      <img src="{{asset('/images/bg/full/4.png')}}" alt="">
      <img src="{{asset('/images/bg/full/3.png')}}" alt="">
      <img src="{{asset('/images/bg/full/2.png')}}" alt="">
      <img src="{{asset('/images/bg/full/1.png')}}" alt="">
   </div>
   <div class="app-msg">
      <p>We teach the best technologies of the world</p>
      <h1>Learn to earn</h1>
      <button class="btn btn-red rounded">
         @if(session('user'))
         <a href="{{url('/')}}">Apply Now</a>
         @else
         <a href="{{url('signin')}}">Apply Now</a>
         @endif

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
            <p>Intermediate students face issues, regrading decision making about their future scope of studies, and ....</p>
         </div>
         <a href="{{url('blog#find-university')}}" class="btn-blue">
            Read More
         </a>
      </div>

      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/laptop.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Web Designing</h1>
            <p>Long, time consuming and complex admission forms are a bitter jump student make due to which they dont take interest ....</p>
         </div>
         <a href="{{url('blog#apply-through-us')}}" class="btn-blue">
            Read More
         </a>

      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/laptop.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Web Development</h1>
            <p>Long, time consuming and complex admission forms are a bitter jump student make due to which they dont take interest ....</p>
         </div>
         <a href="{{url('blog#apply-through-us')}}" class="btn-blue">
            Read More
         </a>

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
            <p>With less insight about the universities and without a proper career counseling, students may take
               wrong decisions and end-up in a place where they shouldn’t be ....</p>
         </div>
         <a href="{{url('blog#career-counselling')}}" class="btn-blue">
            Read More
         </a>
      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/graphics.png')}}" alt="">
         </div>
         <div class="content">
            <h1>Graphics Designing</h1>
            <p>We do not charge anything for providing information. We charge $1 ($1=150/-) per
               university only for the applying process. There are no hidden charges included ....</p>
         </div>
         <a href="{{url('blog#faq')}}" class="btn-blue">
            Read More
         </a>
      </div>
      <div class="col fancy-pallet one-third">
         <div class="ico">
            <img src="{{asset('/images/icons/ppsc.png')}}" alt="">
         </div>
         <div class="content">
            <h1>PPSC</h1>
            <p>Personalized report as the name displays, is specific for each student containing all the available options for him according to his field, interest, location and budget ....</p>
         </div>
         <a href="{{url('blog#personalized-report')}}" class="btn-blue">
            Read More
         </a>
      </div>




   </div>
</section>

<!-- Quotation -->
<section class="quote">
   <p>The world is full of wonderful things you have not seen yet.<br>
      Don't ever give up on the chance of seeing them.</p>
</section>
<!-- FAQ -->
<section class="faq">
   <h2 class="drivethru">DRIVETHRU</h2>
   <div class="title red-underline">Frequently Asked Questions</div>

   <div class="row">
      <div class="col">

         <div class="question show">
            <div class="q"> <i data-feather="bell" class="feather-small"></i> What is drivethru.pk? </div>
            <div class="ans">Drivethru.pk is first of its kind, an ed-tech firm that is working to meet the higher educational requirements of students of Pakistan. </div>

         </div>
         <div class="question">
            <div class="q"> <i data-feather="bell" class="feather-small"></i> What services do you provide? </div>
            <div class="ans">Drivethru provides information about 175+ National HEC Recognized Universities and International Universities from 17+ countries, for FREE. We let you know about their eligibility criteria, offered programs, Fee structure, Entrance tests, past papers and complete counselling.</div>

         </div>
         <div class="question">
            <div class="q"><i data-feather="bell" class="feather-small"></i> How much do you charge? </div>
            <div class="ans">We provide complete information about National and International admissions, FREE OF COST. If you want us to apply on your behalf in these Universities, then we charge $1/ University ($1=150 pkr). (Note: We charge no consultancy fees.</div>
         </div>
         <div class="question">

            <div class="q"><i data-feather="bell" class="feather-small"></i> How can I book an appointment?</div>
            <div class="ans">You can reach us via WhatsApp in office timing 9:00 A.M-5:00 P.M at following Contact Number.<br>
               <strong>+92 316 4515249</strong> <br>
               Further, you can leave your message at our Facebook and Instagram. Our team is available for you 24/7 on mentioned sites.
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