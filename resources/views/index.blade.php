@extends('layouts/main')

@section('title','Dashboard')

@section('content')
<div class="main">
    <h2 class="main-title">Home</h2>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="font-weight: bold">Home</h3>
                                    </div>
                                    <div class="panel-body no-padding bg-light text-center" style="display: block;">
                                        <div class="padding-top-30 padding-bottom-30">
                                            @if (session('status'))
                                                <div class="alert alert-success alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <i class="fa fa-check-circle"></i>{{ session('status') }}
                                                </div>
                                            @endif
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <i class="fa fa-check-circle"></i> <span>SELAMAT DATANG {{ Auth::user()->name }}</span>
                                            </div>
                                            <div>
                                                <img src="{{asset('admin/assets/img/bg.jpg')}}" alt="logo" class="b">
                                            </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
