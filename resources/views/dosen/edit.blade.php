@extends('layout/dashboard')
@section('heading','Form Ubah Data Dosen')
@section('title','Form ubah Dosen')

@section('container')
<div class="container">
    <div class="col-12">

        <form method="post" action="/dosen/{{$dosen->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $dosen->nama }}">
                @error('nama')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukan nip" name="nip" value="{{ $dosen->nip }}">
                @error('nip')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
           
            <div class="form-group">
                <label for="matkul">Mata Kuliah</label>
                <input type="text" class="form-control @error('matkul') is-invalid @enderror" id="matkul" placeholder="Masukan matkul" name="matkul" value="{{ $dosen->matkul }}">
                @error('matkul')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="position-relative form-group">
                                     <label for="tahunlulus" class="">Tahun lulus</label>
                                     <select name="tahunlulus" id="tahunlulus" class="form-control" required>  
                                        <option value="" selected="selected" hidden="hidden">Pilih tahun lulus</option>
                                         <option value="2010" {{ $dosen->tahunlulus == 2010 ? 'selected' : '' }} >2010</option>
                                         <option value="2011" {{ $dosen->tahunlulus == 2011 ? 'selected' : '' }}>2011</option>
                                         <option value="2012" {{ $dosen->tahunlulus == 2012 ? 'selected' : '' }} >2012</option>
                                         <option value="2013" {{ $dosen->tahunlulus == 2013 ? 'selected' : '' }}>2013</option>
                                         <option value="2014" {{ $dosen->tahunlulus == 2014 ? 'selected' : '' }} >2014</option>
                                         <option value="2015" {{ $dosen->tahunlulus == 2015 ? 'selected' : '' }}>2015</option>
                                         <option value="2016" {{ $dosen->tahunlulus == 2016 ? 'selected' : '' }} >2016</option>
                                         <option value="2017" {{ $dosen->tahunlulus == 2017 ? 'selected' : '' }}>2017</option>
                                         <option value="2018" {{ $dosen->tahunlulus == 2018? 'selected' : '' }}>2018</option>
                                         <option value="2019" {{ $dosen->tahunlulus == 2019 ? 'selected' : '' }} >2019</option>
                                         <option value="2020" {{ $dosen->tahunlulus == 2020 ? 'selected' : '' }}>2020</option>
                                     </select>
                                     
                </div>

            <a href="/dosen" class="card-link">Kembali</a>
            <button type="submit" class="btn btn-primary">Ubah data</button>
        </form>

    </div>
</div>
@endsection