@extends('admin.layouts.app')

@section('title', 'Countries')

@section('pageTitle', 'Countries')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0  mb-2">Client Status</h1>

                    @foreach ($countries as $country)
                        <a class="btn btn-info"
                            href="{{ route('admin.client-status.index', 'country=' . $country->id) }}">{{ $country->name }}</a>

                    @endforeach
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.client-status.create') }}">Create new
                                Status</a>
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
                        <th scope="col">Serial</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Color</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php
                        $clientStatus = $clientStatus->filter(function ($clientStatus) {
                            return $clientStatus->country == 1;
                        });
                    @endphp --}}

                    @foreach ($clientStatus as $index => $status)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <th>{{ $status->title }}</th>
                            <th>{{ $status->description }}</th>
                            <th><input type="color" value="{{ $status->color }}" disabled /></th>
                            <th>{{ $countries->find($status->country)->name ?? '' }}</th>
                            <th>
                                <a class="btn  btn-warning"
                                    href="{{ route('admin.client-status.edit', $status) }}">Edit</a>
                                <form class="d-inline" action="{{ route('admin.client-status.destroy', $status) }}"
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
