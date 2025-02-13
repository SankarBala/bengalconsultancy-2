@extends('admin.layouts.app')

@section('title', 'Welcome')

@section('pageTitle', 'Dashboard')

@section('contentHeader')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection


@section('content')
<div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        
        <div class="col">
            <div class="card radius-10 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Clients</p>
                            <h5 class="mb-0">{{$clients->count()}}</h5>
                        </div>
                        <div class="ms-auto">	<i class="bx bx-cart font-30"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 46%"></div>
                    </div>
                </div>
            </div>
        </div>
       {{auth()->user()->name}}
    </div>
</div>
@endsection