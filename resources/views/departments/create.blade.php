@extends('layouts/main')

@section('title', 'departemen')

@section('content')
<div class="main">
  <div class="main-content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel">
                      <div class="panel-heading">
                        <h3 class="panel-title" style="font-weight: bold">Tambah Data Surat Keluar</h3>
                      </div>
                      <div class="panel-body">
                    <form method="post" action="/departments">
                        @csrf
                            <div class="form-group">
                                <label for="kode_departemen">Kode Departemen</label>
                                    <input type="text" class="form-control @error('kode_departemen') is-invalid @enderror" id="kode_departemen" placeholder="Masukkan Kode" name="kode_departemen" value="{{ old('kode_departemen') }}">
                                        @error('kode_departemen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>    
                            <div class="form-group">
                                <label for="nama_departemen">Nama Departemen</label>
                                    <input type="text" class="form-control @error('nama_departemen') is-invalid @enderror" id="nama_departemen" placeholder="Masukkan Nama" name="nama_departemen" value="{{ old('nama_departemen') }}">
                                        @error('nama_departemen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <button type="submit" class="btn btn-primary shadow">Tambah Data</button>
                    </div>
                </div>    
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
