@extends('layouts/main')

@section('title', 'Surat Keluar')

@section('content')
    <div class="main">
        <h2 class="main-title">Surat Keluar</h2>
            <div class="main-content">
                <a href="/outgoingmails/create" class=" btn btn-primary fa fa-plus" id="blue"></a>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" style="font-weight: bold">Surat Keluar</h3>
                                            </div>
                                                <div class="panel-body">
                                                            <div class="row input-daterange">
                                                                <div class="col-md-4">
                                                                    <input type="text" name="from_date" id="from_date" class="form-control" placeholder="Start Date" readonly />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" name="to_date" id="to_date" class="form-control" placeholder="End Date" readonly />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                                                                    <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>
                                                                </div>
                                                            </div>
                                                        <div class="divider"></div>
                                                            @if (session('status'))
                                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                    <i class="fa fa-check-circle"></i> {{ session('status') }}
                                                                </div>
                                                            @endif
                                                        <table class="table table-bordered table-striped table-hover" id="order_table">
                                                            <thead class="thead">
                                                                <tr>
                                                                    <th scope="col" style="text-align: center">Nomor Urut</th>
                                                                    <th scope="col" style="text-align: center">Nomor Surat</th>
                                                                    <th scope="col" style="text-align: center">Alamat Penerima</th>
                                                                    <th scope="col" style="text-align: center">Tanggal</th>
                                                                    <th scope="col" style="text-align: center">Perihal</th>
                                                                    <th scope="col" style="text-align: center">Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="light">
                                                                @foreach ( $outgoingmails as $outgoingmail )                    
                                                                    <tr>
                                                                        <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>  
                                                                        <td style="text-align: center">{{$outgoingmail->nomor_surat}}</td>
                                                                        <td style="text-align: center">{{$outgoingmail->alamat_penerima}}</td>
                                                                        <td style="text-align: center">{{$outgoingmail->tanggal}}</td>
                                                                        <td style="text-align: center">{{$outgoingmail->perihal}}</td>
                                                                        <td style="text-align: center">
                                                                            <div class="form-inline">
                                                                                <form action="{{ url('outgoingmails/'.$outgoingmail->id) }}/edit" class="form-group">
                                                                                    <button type="submit" class="btn btn-flat btn-xs btn-success"><i class="fa fa-edit"></i></button>
                                                                                </form>
                                                                                <form action="{{ url('outgoingmails/'.$outgoingmail->id) }}" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus?')"  class="form-group">
                                                                                    @method('delete')
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                                                                                </form>
                                                                                    <a href="/outgoingmails"></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>                                    
                                                        </table>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <h5 class="m-0 text-right">Copyright &copy; Earsip 2020</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
