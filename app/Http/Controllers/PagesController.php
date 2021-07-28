<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\dosen;
use App\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        $students = student::all(); //tidak mengikuti default laravel

        $totalmhs = $students->count();
        
        $totaljurusan = student::distinct()->count('jurusan');
        $daftarjurusan = student::distinct()->select('jurusan')->get();

        $dosen = dosen::all(); //tidak mengikuti default laravel
        $totaldosen = $dosen->count();
        $totalmatkul = dosen::distinct()->count('matkul');
        $daftarmatkul = dosen::distinct()->get(['matkul']);
       
        return view('index', [
            "students" => $students,
            "totalmhs" => $totalmhs,
            "totaljurusan" => $totaljurusan,
            "daftarjurusan" => $daftarjurusan,
            "dosen" => $dosen,
            "totaldosen" => $totaldosen,
            
            "totalmatkul" => $totalmatkul,
            "daftarmatkul" => $daftarmatkul,
        ]);
    }

   

    public function about()
    {
        return view('about', ['nama' => 'ini nama zal']);
    }
}
