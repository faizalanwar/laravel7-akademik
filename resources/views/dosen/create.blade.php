@extends('layout/dashboard')
 @section('title','Form tambah Dosen')
@section('heading','Tambah Data Dosen')
 @section('container')


             <div class="row">
                 <div class="col-md-12">
                     <div class="main-card mb-12 card">
                         <div class="card-body">
                             <h5 class="card-title">Form Tambah</h5>
                             <form method="post" action="/dosen">
                                 @csrf
                                 <div class="position-relative form-group">
                                     <label for="nama">Nama</label>
                                     <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                                     @error('nama')
                                     <div class="invalid-feedback">{{$message}}</div>
                                     @enderror
                                 </div>
                                 <div class="position-relative form-group">
                                     <label for="nip">NIP</label>
                                     <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukan nip" name="nip" value="{{ old('nip') }}">
                                     @error('nip')
                                     <div class="invalid-feedback">{{$message}}</div>
                                     @enderror
                                 </div>
                                 <div class="position-relative form-group">
                                     <label for="matkul">Mata Kuliah</label>
                                     <input type="text" class="form-control @error('matkul') is-invalid @enderror" id="matkul" placeholder="Masukan matkul" name="matkul" value="{{ old('matkul') }}">
                                     @error('matkul')
                                     <div class="invalid-feedback">{{$message}}</div>
                                     @enderror
                                 </div>
                                 <div class="position-relative form-group">
                                     <label for="tahunlulus" class="">Tahun lulus</label>
                                     <select name="tahunlulus" id="tahunlulus" class="form-control" required>  
                                        <option value="" selected="selected" hidden="hidden">Pilih tahun lulus</option>
                                         <option value="2010" {{ old('tahunlulus') == "2010" ? 'selected' : '' }} >2010</option>
                                         <option value="2011" {{ old('tahunlulus') == "2011" ? 'selected' : '' }}>2011</option>
                                         <option value="2012" {{ old('tahunlulus') == "2012" ? 'selected' : '' }} >2012</option>
                                         <option value="2013" {{ old('tahunlulus') == "2013" ? 'selected' : '' }}>2013</option>
                                         <option value="2014" {{ old('tahunlulus') == "2014" ? 'selected' : '' }} >2014</option>
                                         <option value="2015" {{ old('tahunlulus') == "2015" ? 'selected' : '' }}>2015</option>
                                         <option value="2016" {{ old('tahunlulus') == "2016" ? 'selected' : '' }} >2016</option>
                                         <option value="2017" {{ old('tahunlulus') == "2017" ? 'selected' : '' }}>2017</option>
                                         <option value="2018" {{ old('tahunlulus') == "2018" ? 'selected' : '' }}>2018</option>
                                         <option value="2019" {{ old('tahunlulus') == "2019" ? 'selected' : '' }} >2019</option>
                                         <option value="2020" {{ old('tahunlulus') == "2020" ? 'selected' : '' }}>2020</option>
                                     </select>
                                     
                                 </div>
                                 

                                 <button class="mt-1 btn btn-primary">Submit</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>

         @endsection