@extends('admin.layouts.app')

@section('title', 'Subscription')

@section('pageTitle', 'Subscription')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subscription</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                       
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($emails as $client)
                        <tr>
                            <th scope="row">{{ $client->id }}</th>
                            <th>{{ $client->email }}</th>
                           <th>
                                <form class="d-inline" action="{{ route('admin.subscription.destroy', $client) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>

    </div>
@endsection
