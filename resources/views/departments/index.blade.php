@extends('layouts/main')

@section('title', 'departemen')

@section('content')
<div class="main">
    <h2 class="main-title">Departemen</h2>
        <div class="main-content">
            <a href="/departments/create" class=" btn btn-primary fa fa-plus" id="blue"></a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title" style="font-weight: bold">Departemen</h3>
                                        </div>
                                            <div class="panel-body">
                                                <div class="divider"></div>
                                                @if (session('status'))
                                                    <div class="alert alert-success alert-dismissible" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <i class="fa fa-check-circle"></i> {{ session('status') }}
                                                    </div>
                                                @endif
                                                    <table class="table table-bordered table-striped table-hover">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col" style="text-align: center">ID</th>
                                                            <th scope="col" style="text-align: center">Kode Departemen</th>
                                                            <th scope="col" style="text-align: center">Nama Departemen</th>
                                                            <th scope="col" style="text-align: center">Aksi</th>
                                                        </tr>
                                                    <tbody class="tbody-light">
                                                        @foreach ($departments as $department)
                                                            <tr>
                                                                <th scope="row"  style="text-align: center">{{ $loop->iteration }}</th>
                                                                <td  style="text-align: center">{{$department->kode_departemen}}</td>
                                                                <td  style="text-align: center">{{$department->nama_departemen}}</td>
                                                                <td style="text-align: center">
                                                                    <div class="form-inline">
                                                                        <form action="{{ url('departments/'.$department->id) }}/edit" class="form-group">
                                                                            <button type="submit" class="btn btn-flat btn-xs btn-success"><i class="fa fa-edit"></i></button>
                                                                        </form>
                                                                        <form action="{{ url('departments/'.$department->id) }}" method="POST" onsubmit="return confirm('Yakin Ingin Menghapus?')"  class="form-group">
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
                                                 </thead>
                                            </table>
                                        </div>     
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
@endsection
