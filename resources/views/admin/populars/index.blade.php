@extends('admin.layouts.app')

@section('title', 'Populars')

@section('pageTitle', 'Populars')

@section('contentHeader')
<div class="content-header bg-light">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Popular List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.popular.create') }}">Create new popular</a>
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
                    <th scope="col">Popular Name</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Banner</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($populars as $index => $popular)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <th>{{ $popular->name }}</th>
                    <th>
                        <img src="{{ Storage::url($popular->national_flag) }}" width="80px" />
                    </th>
                    <th><img src="{{ Storage::url($popular->banner) }}" width="80px" /></th>
                    <th>{{ $popular->status? 'Active': 'Inactive' }}</th>
                    <th>
                        <a class="btn  btn-dark" href="{{ route('promotional', $popular) }}" target="_blank">Link</a>
                        <a class="btn  btn-warning" href="{{ route('admin.popular.edit', $popular) }}">Edit</a>
                        <form class="d-inline" action="{{ route('admin.popular.destroy', $popular) }}" method="POST">
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