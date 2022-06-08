@extends('layouts.index')

@section('header')
<section class="registration ">
   <x-index.header></x-index.header>
</section>
@endsection
@section('content')
<div class="page-centered w-70 bg-white p-4 overlay">
   <div class="frow stretched">
      <div class="txt-grey txt-l txt-b lh-40">New Registration</div>
      <div class="frow txt-s centered hoverable">
         <div class="fcol circular-25 border-0 bg-green centered" onclick="reset()">
            <i data-feather='refresh-ccw' class="feather-xsmall txt-white"></i>
         </div>
         <div class="ml-2 txt-grey">Reset</div>
      </div>
   </div>

   <ul class="txt-s txt-grey ml-3">
      <span class='txt-blue'>Read me **</span>
      <li class="ml-3">You can choose only one course at a time</li>
      <li class="ml-3">All fields are necessary</li>
   </ul>
   <!-- personal data fields -->
   <form action="{{ route('students.store') }}" method="post" id='form' onsubmit="return validate()">
      @csrf

      <!-- display authentication error if any -->
      @if ($errors->any())
      <div class="fcol my-2 txt-orange">
         @foreach ($errors->all() as $error)
         <div class="txt-s">- {{ $error }}</div>
         @endforeach
      </div>
      @endif
      <div class="frow stretched auto-col">
         <div class="fcol w-48 mt-4 fancyselect">
            <select name="group_id">
               @foreach ($groups as $group)
               <option value="{{ $group->id }}">{{ $group->course->name }}</option>
               @endforeach
            </select>
            {{-- <label for="">Choose Your Course</label> --}}
         </div>


      </div>
      <div class="frow stretched auto-col">
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="text" name='name' placeholder="Your Name" required>
            {{-- <label for="">Name</label> --}}
         </div>
         <div class="fcol w-48 mt-3 fancyselect">
            <select name="gender">
               <option value="m">M</option>
               <option value="f">F</option>
            </select>
            {{-- <label for="">Gender</label> --}}
         </div>

      </div>
      <div class=" frow stretched auto-col">
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="text" name='phone' placeholder="Phone" required pattern="[0-9][0-9]{10}">
            {{-- <label for="">Phone (03001234567)</label> --}}
         </div>
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="email" name='email' placeholder="Email" required>
            {{-- <label for="">Email</label> --}}
         </div>

      </div>
      <div class="frow stretched auto-col">

         <div class="fcol w-48 mt-3 fancyinput">
            <input type="date" name='birthdate'>
            {{-- <label for="">Date of Birth</label> --}}
         </div>
         <div class="fcol w-48 mt-4 fancyinput">
            <input type="text" name='qualification' placeholder="Qualification" required>
            {{-- <label for="">Qualification</label> --}}
         </div>
      </div>
      <div class="frow w-100 mt-3 fancyinput">
         <input type="text" name='address' placeholder="Address">
         {{-- <label for="">Address </label> --}}
      </div>

      <frow class="frow mid-right mt-3">
         <a class="btn btn-sm btn-primary mr-2" href='/'>Cancel</a>
         <button type='submit' class="btn btn-sm btn-red">Save</button>
      </frow>


   </form>
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