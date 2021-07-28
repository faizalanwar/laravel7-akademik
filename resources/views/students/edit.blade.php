@extends('layout/dashboard')
@section('heading','Form Ubah Data Mahasiswa')
@section('title','Form ubah Mahasiswa')

@section('container')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <form method="post" action="/students/{{$student->id}}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group row">
                            <div class="form-group col-sm-6">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $student->nama }}">
                                @error('nama')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan nrp" name="nrp" value="{{ $student->nrp }}">
                                @error('nrp')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{ $student->email }}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="jurusan" class="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control" value="{{$student->jurusan}}">
                                    <option value="Teknik Informatika" {{ $student->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                    <option value="Management Informatika" {{ $student->jurusan == 'Management Informatika' ? 'selected' : '' }}>Management Informatika</option>
                                    <option value="Sistem Informasi" {{ $student->jurusan == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                    <option value="Multimedia" {{ $student->jurusan == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                                </select>
                                @error('jurusan')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>


                        </div>
                        <div class="form-group row">
                            <div class="form-group col-sm-6">
                                <label for="jeniskelamin" class="">Jenis Kelamin</label>
                                <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                    <option value="Laki-Laki" {{ $student->jeniskelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki - Laki</option>
                                    <option value="Perempuan" {{ $student->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>perempuan</option>
                                </select>
                                @error('jeniskelamin')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>



                            <div class="form-group col-sm-3">
                                <label for="kelas" class="">Kelas</label>
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="siang" {{ $student->kelas == 'siang' ? 'selected' : '' }}>Siang</option>
                                    <option value="malam" {{ $student->kelas == 'malam' ? 'selected' : '' }}>Malam</option>
                                </select>
                                @error('kelas')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="semester" class="">Semester</label>
                                <select name="semester" id="semester" class="form-control">
                                    <option value="2" {{ $student->semester == 2 ? 'selected' : '' }}>2</option>
                                    <option value="4" {{ $student->semester == 4 ? 'selected' : '' }}>4</option>
                                    <option value="6" {{ $student->semester == 6 ? 'selected' : '' }}>6</option>
                                    <option value="8" {{ $student->semester == 8 ? 'selected' : '' }}>8</option>
                                </select>
                                @error('semester')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-sm-6">
                                <label for="alamat" class="">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" style="height: 150px;">{{$student->alamat}}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="position-relative form-group col-sm-6">
                                <label for="foto" class="">Upload Foto </label> <br>
                                <img src="{{$student->getFoto()}}" alt="" / width="90px" ><br><br>
                                <input type="file" name="foto" value="{{ $student->email }}" >
                                <small id="emailHelp" class="form-text text-muted">Note : <br>Extensi gambar yang diperbokehkan ( jpeg , jpg , png , gif , svg ) .<br>Maksimal ukuran 2MB atau 2048 KB.</small>
                                @error('foto')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-sm-6">
                                <a href="/students/{{$student->id}}" class="card-link">Kembali</a>
                            </div>
                            <div class="form-group col-sm-6 text-right">
                                <button type="submit" class="btn btn-success">Ubah data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection