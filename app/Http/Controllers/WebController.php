<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $data = [];
        $data['page'] = 'home';
        $data['instructors'] = User::where('role_id', 4)->with('instructor')->take(4)->inRandomOrder()->get();
        $data['courses'] = Course::take(4)->inRandomOrder()->get();
        $data['categories'] = Category::all();
        return view('layouts.web_vue', $data);
    }


    public function getRegister($slug = null)
    {
        $data = [
            'page' => 'register',
            'course' => null,
            'courses' => Course::orderBy('name')->get(),
            'qualifications' => Qualification::all(),
        ];
        if ($slug) {
            $data['course'] = Course::where('slug', $slug)->first();
        }
        return view('layouts.web_vue', $data);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        return $request->all();
    }

    public function courses()
    {
        $courses = Course::all();
        return view('layouts.web_vue', ['page' => 'courses', 'courses' => $courses]);
    }


    public function contactUs()
    {
        return view('layouts.web_vue', ['page' => 'contact-us']);
    }

    public function aboutUs()
    {
        $data['page'] = 'about-us';
        $data['instructors'] = User::where('role_id', 4)->with('instructor')->take(4)->inRandomOrder()->get();
        return view('layouts.web_vue', $data);
    }

    public function sitemap()
    {
        return response()->view('web.sitemap')->header('Content-Type', 'text/xml');
    }
}
