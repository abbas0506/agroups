@extends('layouts.index')

@section('header')
<section class="registration mini_header">
   <x-index.header></x-index.header>
</section>
@endsection
@section('content')
<div class="page-centered w-70 bg-white p-4">
   <div class="frow stretched">
      <div class="txt-grey txt-m lh-40">New Registration</div>
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
   <form action="{{route('students.store')}}" method="post" id='form' onsubmit="return validate()">
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
            <select name="level_id">
               @foreach($courses as $course)
               <option value="{{$course->id}}">{{$course->name}}</option>
               @endforeach
            </select>
            <label for="">Choose Your Course</label>
         </div>
         <div class="fcol w-48 mt-4 fancyinput">
            <input type="text" name='qualification' placeholder="Qualification" required>
            <label for="">Qualification</label>
         </div>

      </div>
      <div class="frow stretched auto-col">
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="text" name='name' placeholder="Your Name" required>
            <label for="">Name</label>
         </div>
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="text" name='phone' placeholder="Phone" required>
            <label for="">Phone</label>
         </div>
      </div>
      <div class="frow stretched auto-col">
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="email" name='email' placeholder="Email" required>
            <label for="">Email</label>
         </div>
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="text" name='address' placeholder="Address (short)">
            <label for="">Address </label>
         </div>
      </div>
      <div class="frow stretched auto-col">
         <div class="fcol w-48 mt-4 fancyselect">
            <select name="gender">
               <option value="m">M</option>
               <option value="f">F</option>
            </select>
            <label for="">Gender</label>
         </div>
         <div class="fcol w-48 mt-3 fancyinput">
            <input type="date" name='birthdate'>
            <label for="">Date of Birth</label>
         </div>
      </div>

      <frow class="frow mid-right mt-3">
         <button type='submit' class="btn btn-sm btn-primary mr-2">Cancel</button>
         <button type='submit' class="btn btn-sm btn-success">Save</button>
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