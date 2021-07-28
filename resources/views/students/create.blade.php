 @extends('layout/dashboard')
 @section('title','Form tambah Mahasiswa')
 @section('heading','Tambah Data Mahasiswa')
 @section('container')

 <div class="card">
     <div class="row mt-5">
         <div class="col-md-10 mx-auto">
             <form method="post" action="/students" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                     <div class="form-group col-sm-6">
                         <label for="nama">Nama</label>
                         <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}" required>
                         @error('nama')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                     <div class="form-group col-sm-6">
                         <label for="nrp">NRP</label>
                         <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan NRP" name="nrp" value="{{ old('nrp') }}" required>
                         @error('nrp')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>

                 </div>
                 <div class="form-group row">
                     <div class="form-group col-sm-6">
                         <label for="email">Email</label>
                         <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{ old('email') }}" required>
                         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                         @error('email')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                     <div class="form-group col-sm-6">
                         <label for="jurusan" class="">Jurusan</label>
                         <select name="jurusan" id="jurusan" class="form-control" required>
                             <option value="" selected="selected" hidden="hidden">Pilih Jurusan</option>
                             <option value="Teknik Informatika" {{ old('jurusan') == "Teknik Informatika" ? 'selected' : '' }}>Teknik Informatika</option>
                             <option value="Management Informatika" {{ old('jurusan') == "Management Informatika" ? 'selected' : '' }}>Management Informatika</option>
                             <option value="Sistem Informasi" {{ old('jurusan') == "Sistem Informasi" ? 'selected' : '' }}>Sistem Informasi</option>
                             <option value="Multimedia" {{ old('jurusan') == "Multimedia" ? 'selected' : '' }}>Multimedia</option>
                         </select>
                         @error('jurusan')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>


                 </div>
                 <div class="form-group row">
                     <div class="form-group col-sm-6">
                         <label for="jeniskelamin" class="">Jenis Kelamin</label>
                         <select name="jeniskelamin" id="jeniskelamin" class="form-control" required>
                            
                            <option value="" selected="selected" hidden="hidden">Pilih Jenis Kelamin</option>
                             <option value="Laki-Laki" {{ old('jeniskelamin') == "Laki-Laki" ? 'selected' : '' }}>Laki - Laki</option>
                             <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                         </select>
                         @error('jeniskelamin')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                     <div class="form-group col-sm-3">
                         <label for="kelas" class="">Kelas</label>
                         <select name="kelas" id="kelas" class="form-control" required>

                             <option value="" selected="selected" hidden="hidden">Pilih Kelas</option>
                             <option value="siang" {{ old('kelas') == "siang" ? 'selected' : '' }}>Siang</option>
                             <option value="malam" {{ old('kelas') == "malam" ? 'selected' : '' }}>Malam</option>
                         </select>
                         @error('kelas')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                     <div class="form-group col-sm-3">
                         <label for="semester" class="">Semester</label>
                         <select name="semester" id="semester" class="form-control" required>

                             <option value="" selected="selected" hidden="hidden">Pilih Semester</option>
                             <option value="2" {{ old('semester') == 2 ? 'selected' : '' }}>2</option>
                             <option value="4" {{ old('semester') == 4 ? 'selected' : '' }}>4</option>
                             <option value="6" {{ old('semester') == 6 ? 'selected' : '' }}>6</option>
                             <option value="8" {{ old('semester') == 8 ? 'selected' : '' }}>8</option>
                         </select>
                         
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="form-group col-sm-6">
                         <label for="alamat" class="">Alamat</label>
                         <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" style="height: 150px;" required>{{ old('alamat') }}</textarea>
                         @error('alamat')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                     <div class="position-relative form-group col-sm-6">
                         <label for="foto" class="">Upload Foto </label> <br>
                         <input type="file" name="foto" value="{{ old('foto') }}" required>
                         <br><br>
                         <small id="emailHelp" class="form-text text-muted">Note : <br>Extensi gambar yang diperbokehkan ( jpeg , jpg , png , gif , svg ) .<br>Maksimal ukuran 2MB atau 2048 KB.</small>
                         
                         @error('foto')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                     </div>
                 </div>
                 <div class="form-group row">
                     <div class="form-group col-sm-6">

                     </div>
                     <div class="form-group col-sm-6 text-right">
                         <button class="mt-1 btn btn-primary">Submit</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

 
 <!-- ---------------------------------------------------------------------------------------- -->


 @endsection