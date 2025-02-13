@extends('admin.layouts.app')

@section('title', 'Countries')

@section('pageTitle', 'Countries')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Country List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.country.create') }}">Create new country</a>
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
                        <th scope="col">Country Name</th>
                        <th scope="col">Flag</th>
                        <th scope="col">Banner</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($countries as $index => $country)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <th>{{ $country->name }}</th>
                            <th>
                                <img src="{{ Storage::url($country->national_flag) }}" width="80px" />
                            </th>
                            <th><img src="{{ Storage::url($country->banner) }}" width="80px" /></th>
                            <th>{{ $country->status }}</th>
                            <th>
                                <a class="btn  btn-warning"
                                    href="{{ route('admin.country.edit', $country) }}">Edit</a>
                                <form class="d-inline" action="{{ route('admin.country.destroy', $country) }}"
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
