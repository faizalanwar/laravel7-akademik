<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\dosen;

use App\Exports\DosenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {


        
        
        $this->middleware('cekadmin');
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $dosens = dosen::all();//tidak mengikuti default laravel
        $cari = $request->get('cari');
        $dosen = dosen::where('nama','LIKE','%'.$cari.'%')->paginate(5);;
        $totaldosen = $dosens->count();
        $totalmatkul = dosen::distinct()->count('matkul');

        return view('dosen.index',[
            "dosens"=>$dosens,
            "dosen"=>$dosen,
            "totaldosen"=>$totaldosen,
            "totalmatkul"=>$totalmatkul

            ]);
    }
    public function cari(Request $request)
    {
        $dosens = dosen::all();//tidak mengikuti default laravel
        $cari = $request->get('cari');
        $dosen = dosen::where('nama','LIKE','%'.$cari.'%')->paginate(5);
        $totaldosen = $dosens->count();
        $totalmatkul = dosen::distinct()->count('matkul');

        return view('dosen.index',[
            "dosens"=>$dosens,
            "dosen"=>$dosen,
            "totaldosen"=>$totaldosen,
            "totalmatkul"=>$totalmatkul

            ]);
    }
    public function exportExcell()
	{
        // return Excel::download(new StudentExport, 'mahasiswa.xlsx');
        return Excel::download(new DosenExport, 'dosen.xlsx');
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:8',            
            'matkul' => 'required',
            'tahunlulus' => 'required',
        ]);
        dosen::create([
            'nama'=> $request->nama,
            'nip'=> $request->nip,        
            'matkul'=> $request->matkul,
            'tahunlulus'=> $request->tahunlulus
        ]);
        
        
        // Student::create($request->all());
        Alert::success('Status','Data Berhasil Ditambah !');
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dosen $dosen)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:8',            
            'matkul' => 'required',
            'tahunlulus' => 'required',
        ]);
        dosen::where('id',$dosen->id)
            ->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'matkul' => $request->matkul,
                'tahunlulus' => $request->tahunlulus
                
                ]);
        Alert::success('Status','Data Berhasil Diubah !');
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        dosen::destroy($dosen->id);
        Alert::success('Status','Data Berhasil Dihapus !');
        return redirect('/dosen');
    }
}
