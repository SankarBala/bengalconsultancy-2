@extends('admin.layouts.app')

@section('title', 'Query')

@section('pageTitle', 'Query')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Query</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('admin.country.create') }}">Create new coutry</a>
                        </li> --}}
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
                        <th scope="col">Country</th>
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
                            <th>{{ $countries->find($query->country)->name ?? '' }}</th>
                            <th>{{ $query->created_at->format('Y-m-d') }}</th>
                            <th>{{ $query->status }}</th>
                            <th>
                                <a class="btn  btn-warning" href="{{ route('admin.query.show', $query) }}">View</a>
                                <form class="d-inline" action="{{ route('admin.query.delete', $query) }}" method="post">
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
