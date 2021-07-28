<?php

namespace App\Http\Controllers;
use App\Student;
use App\Dosen;
use Illuminate\Http\Request;

class IndexController extends Controller
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
        $students = student::all(); //tidak mengikuti default laravel

        $totalmhs = $students->count();


        $dosen = dosen::all(); //tidak mengikuti default laravel
        $totaldosen = $dosen->count();

        // return view('beranda')->with($totalmhs);
        return view('beranda', [
            "students" => $students,
            "totalmhs" => $totalmhs,

            "dosen" => $dosen,
            "totaldosen" => $totaldosen,
        ]);
    }
}
