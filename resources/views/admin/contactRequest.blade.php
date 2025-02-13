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
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($queries as $index => $query)
                        <tr>
                            <th scope="row">{{ $query->id }}</th>
                            <th>{{ $query->name }}</th>
                            <th>{{ $query->email }}</th>
                            <th>{{ $query->web }}</th>
                            <th>{{ $query->created_at->format('Y-m-d') }}</th>
                            <th>{{ $query->status }}</th>
                            <th>
                                <a class="btn  btn-warning" href="{{ route('admin.contactRequest.show', $query) }}">View</a>
                                <form class="d-inline" action="{{ route('admin.contactRequest.delete', $query) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn  btn-danger" type="submit">Delete</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $queries->links() }}
            </div>
        </div>


    </div>
@endsection
