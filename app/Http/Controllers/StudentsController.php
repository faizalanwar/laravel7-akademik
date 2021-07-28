<?php

namespace App\Http\Controllers;

use App\Student;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->middleware(['cekdosen'], ['cekadmin']);
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $students = student::all(); //tidak mengikuti default laravel

        $totalmhs = $students->count();
        $kelasmalam = student::where('kelas', '=', 'malam')->count();
        $kelassiang = student::where('kelas', '=', 'siang')->count();
        $cari = $request->get('cari');
        $student = student::where('nama', 'LIKE', '%' . $cari . '%')->paginate(10);
        $multimedia = round(student::where('jurusan', '=', 'Multimedia')->count() * 100 / $totalmhs, 2);
        $managementinformatika = round(student::where('jurusan', '=', 'Management Informatika')->count() * 100 / $totalmhs, 2);
        $teknikinformatika = round(student::where('jurusan', '=', 'Teknik Informatika')->count() * 100 / $totalmhs, 2);
        $sisteminformasi = round(student::where('jurusan', '=', 'Sistem Informasi')->count() * 100 / $totalmhs, 2);

        return view('students.index', [
            "students" => $students,

            "student" => $student,
            "totalmhs" => $totalmhs,
            "kelasmalam" => $kelasmalam,
            "kelassiang" => $kelassiang,
            "multimedia" => $multimedia,
            "managementinformatika" => $managementinformatika,
            "teknikinformatika" => $teknikinformatika,
            "sisteminformasi" => $sisteminformasi
        ]);
    }
    public function cari(Request $request)
    {
        $students = student::all(); //tidak mengikuti default laravel

        $totalmhs = $students->count();
        $kelasmalam = student::where('kelas', '=', 'malam')->count();
        $kelassiang = student::where('kelas', '=', 'siang')->count();

        $multimedia = round(student::where('jurusan', '=', 'Multimedia')->count() * 100 / $totalmhs, 2);
        $managementinformatika = round(student::where('jurusan', '=', 'Management Informatika')->count() * 100 / $totalmhs, 2);
        $teknikinformatika = round(student::where('jurusan', '=', 'Teknik Informatika')->count() * 100 / $totalmhs, 2);
        $sisteminformasi = round(student::where('jurusan', '=', 'Sistem Informasi')->count() * 100 / $totalmhs, 2);

        $cari = $request->get('cari');
        $student = student::where('nama', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('students.index', [
            "students" => $students,
            "student" => $student,
            "totalmhs" => $totalmhs,
            "kelasmalam" => $kelasmalam,
            "kelassiang" => $kelassiang,
            "multimedia" => $multimedia,
            "managementinformatika" => $managementinformatika,
            "teknikinformatika" => $teknikinformatika,
            "sisteminformasi" => $sisteminformasi
        ]);
    }
    public function exportExcell()
    {
        // return Excel::download(new StudentExport, 'mahasiswa.xlsx');
        return Excel::download(new StudentExport, 'mahasiswa.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:8',
            'email' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        // $foto = $request->file('foto')->getClientOriginalName();

        $file = $request->file('foto');

        $filename = $file->getClientOriginalName();
        $filename = $request->nrp .'_' . $request->nama .'_'. time().'_'.$filename;

        // This will store only the filename. Update with full path if you like
        $foto = $file->move('images/', $filename);

        Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
            'foto' => $filename

        ]);
        // Student::create($request->all());
        Alert::success('Status', 'Data Berhasil Ditambah !');
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // dd($student->foto);
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:8',
            'email' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'kelas' => $request->kelas,
                'semester' => $request->semester,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat,
                'jeniskelamin' => $request->jeniskelamin


            ]);
        
        if ($request->hasFile('foto') != "") {
            $student->foto = $student->foto;
            $student->save();
        }
        else {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $filename = $request->nrp .'_' . $request->nama .'_'. time().'_'.$filename;
            // This will store only the filename. Update with full path if you like
            $foto = $file->move('images/', $filename);
            $student->foto = $filename;
            $student->save();
        }
            
        
        
        Alert::success('Status', 'Data Berhasil Diubah !');
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        Alert::success('Status', 'Data Berhasil Dihapus !');
        return redirect('/students');
    }
}
