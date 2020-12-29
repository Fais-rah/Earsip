@extends('layouts/main')

@section('title','About')

@section('content')
<div class="main">
    <h2 class="main-title">About</h2>
        <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title" style="font-weight: bold">About</h3>
                                        </div>
                                        <div class="panel-body no-padding bg-light text-center" style="display: block;">
                                            <div class="padding-top-30 padding-bottom-30">
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