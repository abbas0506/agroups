<?php

namespace App\Http\Controllers;

use App\Mail\StudentRegister;
use App\Mail\StudentRegisterAdmin;
use App\Models\Course;
use App\Models\Group;
use App\Models\Registration;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::orderBy('name', 'asc')->get();
        return view('students.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|unique:users',
            'address' => 'required',
            'dob' => 'required',
            'course_id' => 'required',
            'qualification' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $password = Str::random(8);
            $user = User::where('email', $request->email)->first();
            $user = new User;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = Hash::make($password);
            $user->role_id = 5;
            $user->save();

            $student = new Student;
            $student->user_id = $user->id;
            $student->registration = Str::random(5);
            $student->address = $request->address;
            $student->birthdate = $request->dob;
            $student->qualification_id = $request->qualification;
            $student->save();

            $group = Group::where('course_id', $request->course_id)->where('status', 1)->orderBy('id', 'desc')->first();
            if ($group) {
                $registration = new Registration;
                $registration->student_id = $student->id;
                $registration->group_id = $group->id;
                $registration->save();
            }
            DB::commit();
            Mail::to($user)->queue(new StudentRegister($user));
            Mail::to('schooloftechnologies@gmail.com')->queue(new StudentRegisterAdmin($user, Course::find($request->course_id)));
            return response()->json(['message' => 'Registration done successfully']);
        } catch (Exception $e) {
            Db::rollBack();
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
