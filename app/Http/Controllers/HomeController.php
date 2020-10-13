<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->rol == 'teacher') {
          $data = Classes::where('teacher_id', auth()->user()->id)->get();

          $students = User::where('rol', 'student')->get();
        }

        return view('home', compact('data', 'students'));
    }
}
