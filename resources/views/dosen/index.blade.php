@extends('layout/dashboard')
@section('title','Daftar Dosen')
@section('heading','Daftar Dosen')
@section('container')
<div class="row">
    <div class="col-md-12 col-xl-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Dosen</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$totaldosen}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Mata Kuliah</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">{{$totalmatkul}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" id="Dosen">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <div class="mr-4">
                    Daftar Dosen
                </div>
                @if (session('status'))
                <br>
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="search-wrapper active ml-2">
                    <div class="input-holder">
                        <form action="/dosen/cari" method="GET">
                            <input type="text" class="search-input" name="cari" id="cari" placeholder=" Type to cari" value="{{ old('cari') }}">
                            <button class="search-icon mx-10"><span></span></button>
                        </form>
                    </div>
                    <!-- <button class="close"></button> -->
                </div>
                <div class="btn-actions-pane-right">

                    <div role="group" class="btn-group-sm btn-group">
                        <a href="/dosen/create" class="btn btn-secondary my-3">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama</th>
                            <th class="text-center">Mata Kuliah</th>
                            <th class="text-center">Tahun Lulusan</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php $count = 1; ?> 
                        @foreach($dosen as $dsn)
                        <tr>
                            <td class="text-center text-muted">{{$dosen ->perPage()*($dosen->currentPage()-1)+$count}}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{$dsn->nama}}</div>
                                            <div class="widget-subheading opacity-7">{{$dsn->nip}}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$dsn->matkul}}</td>
                            <td class="text-center">{{$dsn->tahunlulus}}</td>

                            <td class="text-center">
                            <a href="dosen/{{ $dsn->id }}/edit" class="btn btn-success">Edit</a>
                            <form onclick="return confirm('Are you sure?')" action="dosen/{{$dsn->id}}" method="post" class='d-inline'>
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        
                        <?php $count++; ?> 

                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer mx-auto">
            {{ $dosen->links() }}
            </div>
        </div>
    </div>
</div>
@endsection