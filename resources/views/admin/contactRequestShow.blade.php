@extends('admin.layouts.app')

@section('title', 'Contact request')

@section('pageTitle', 'Contact request')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact request</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""></a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div>
        <div class="main-content-inner">
            <br />
            <table>
                <tr><td>Date & Time</td><td>&nbsp;:&nbsp;</td><td>{{ $query->created_at->format('Y-m-d h:m A') }} </td></tr>
                <tr><td>Name</td><td>&nbsp;:&nbsp;</td><td>{{ $query->name }} </td></tr>
                <tr><td>Email</td><td>&nbsp;:&nbsp;</td><td>{{ $query->email }}</td></tr>
                <tr><td>Phone</td><td>&nbsp;:&nbsp;</td><td>{{ $query->phone }}</td></tr>
                <tr><td>Website</td><td>&nbsp;:&nbsp;</td><td>{{ $query->web }}</td></tr>
                <tr><td>Message</td><td>&nbsp;:&nbsp;</td><td>{{ $query->message }}</td></tr>
            </table>


        </div>

    </div>
@endsection
