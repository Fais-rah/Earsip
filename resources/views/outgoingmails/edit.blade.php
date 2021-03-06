@extends('layouts/main')

@section('title', 'Ubah Data Surat Keluar')

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
                            <form method="post" action="{{ url('outgoingmails/'.$outgoingmail->id) }}" onsubmit="return confirm('Yakin Ingin Mengubah?')">
                                @method('patch')
                                @csrf
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                                <input type="number" class="form-control @error('nomor_surat') is-invalid @enderror" id="nomor_surat" placeholder="Masukkan Nomor Surat" name="nomor_surat" value="{{ $outgoingmail->nomor_surat }}">
                                    @error('nomor_surat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat_penerima">Alamat Penerima</label>
                                <input type="text" class="form-control @error('alamat_penerima') is-invalid @enderror" id="alamat_penereima" placeholder=" Masukkan Alamat Penerima" name="alamat_penerima" value="{{ $outgoingmail->alamat_penerima }}">
                                    @error('alamat_penerima')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>    
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ $outgoingmail->tanggal }}">
                                    @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                                <input type="text" class="form-control @error('perihal') is-invalid @enderror" id="perihal" placeholder="Masukkan Perihal" name="perihal" value="{{ $outgoingmail->perihal }}">
                                     @error('perihal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                   </div>
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
