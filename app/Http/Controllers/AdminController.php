<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
		return view('teachers.teachers');
    }

    public function showteachers() {
        $teachers = User::where('role', 'A')->paginate(10);
        return view('teachers.teachers')->with('teachers', $teachers);
    }

}