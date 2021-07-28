@extends('layout/dashboard')
@section('title','Daftar Mahasiswa')
@section('heading','Daftar Mahasiswa')
@section('container')



<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Mahasiswa</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$totalmhs}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Kelas Siang</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">{{$kelassiang}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Kelas Malam</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">{{$kelasmalam}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Income</div>
                        <div class="widget-subheading">Expected totals</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-focus">$147</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">Expenses</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- ---------------------------------------------------------------------------------------------------------------- -->



		
<div class="row" id="mahasiswa">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <div class="mr-4">
                    Daftar Mahasiswa
                </div>
                @if (session('status'))
                <br>
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="search-wrapper active ml-2">
                    <div class="input-holder">
                        <form action="/students/cari" method="GET">
                            <input type="text" class="search-input" name="cari" id="cari" placeholder=" Type to search" value="{{ old('cari') }}">
                            <button class="search-icon mx-10"><span></span></button>
                        </form>
                    </div>
                    <!-- <button class="close"></button> -->
                </div>
                <div class="btn-actions-pane-right">

                    <div role="group" class="btn-group-sm btn-group">
                        <a href="/students/create" class="btn btn-secondary my-3">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama Mahasiswa</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 1; ?> 
                        @foreach($student as $std)
                        <tr>
                            <td class="text-center text-muted">{{$student ->perPage()*($student->currentPage()-1)+$count}}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{$std->nama}}</div>
                                            <div class="widget-subheading opacity-7">{{$std->nrp}}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$std->semester}}</td>
                            <td class="text-center">{{$std->kelas}}</td>
                            <td class="text-center">
                                @if ($std->jurusan =='Management Informatika')
                                <div class="badge badge-info">{{$std->jurusan}}</div>
                                @elseif ($std->jurusan == 'Teknik Informatika')
                                <div class="badge badge-success">{{$std->jurusan}}</div>
                                @elseif ($std->jurusan == 'Sistem Informasi')
                                <div class="badge badge-warning">{{$std->jurusan}}</div>
                                @elseif ($std->jurusan == 'Multimedia')
                                <div class="badge badge-danger">{{$std->jurusan}}</div>
                                @endif
                            </td>

                            <td class="text-center">
                                <a href="/students/{{$std->id}}" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                        <?php $count++; ?> 
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class=" text-center card-footer mx-auto d-inline">
                {{ $student->links() }}
                
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-danger">{{$multimedia}}%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: {{$sisteminformasi}}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Multimedia</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-success">{{$teknikinformatika}}%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width:{{$teknikinformatika}}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Teknik Informatika</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">{{$sisteminformasi}}%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:{{$sisteminformasi}}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Sistem Informasi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">{{$managementinformatika}}%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width:{{$managementinformatika}}%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Management Informatika</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ---------------------------------------------------------------------------------------------------------------- -->





@endsection