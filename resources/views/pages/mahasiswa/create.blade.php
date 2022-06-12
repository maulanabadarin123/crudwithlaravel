@extends('layouts.default');

@section('content')
   <div class="card">
       <div class="card-header">
            <strong>Tambah Data Mahasiswa</strong>
       </div>
       <div class="card-body card-block">
            <form action="{{route('mahasiswa.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" value="{{old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                @error('nama') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                    @error('email') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan" class="form-control-label">Jurusan</label>
                    <input type="text" name="jurusan" value="{{old('jurusan')}}" class="form-control @error('jurusan') is-invalid @enderror">
                    @error('jurusan') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror">
                    @error('alamat') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-grup">
                 <button class="btn btn-primary btn-block" type="submit">Tambah Data</button>
                </div>
            </form>
       </div>
   </div>
@endsection