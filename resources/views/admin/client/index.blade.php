@extends('admin.layouts.app')

@section('title', 'Countries')

@section('pageTitle', 'Countries')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Client list</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.client.create') }}">Add new
                                client</a>
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Client ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($clients as $index => $client)
                        <tr>
                            <th scope="row">{{ $client->client_id }}</th>
                            <th>{{ $client->name }}</th>
                            <th>{{ $client->email }}</th>
                            <th>{{ $client->phone }}</th>
                            <th>{{ $clientStatus->find($client->status)->title ?? 'Unknown' }}</th>
                            <th>
                                <a class="btn  btn-warning"
                                    href="{{ route('admin.client.edit', $client) }}">Edit</a>
                                <a class="btn  btn-info"
                                    href="{{ route('admin.client.show', $client) }}">View</a>
                                <form class="d-inline" action="{{ route('admin.client.destroy', $client) }}"
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

            <div class="d-flex justify-content-end mb-3">
                {{ $clients->links() }}
            </div>
        </div>

    </div>
@endsection
