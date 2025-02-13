@extends('admin.layouts.app')

@section('title', 'Combos')

@section('pageTitle', 'Combos')

@section('contentHeader')
<div class="content-header bg-light">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Combo List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.combo.create') }}">Create new combo</a>
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
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($combos as $index => $combo)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <th>{{ $combo->name }}</th>
                    <th>
                        <img src="{{ Storage::url($combo->image) }}" width="80px" />
                    </th>
                    <th>{{ $combo->status? 'Active': 'Inactive' }}</th>
                    <th>
                        <a class="btn  btn-dark" href="{{ route('combo', $combo) }}" target="_blank">Link</a>
                        <a class="btn  btn-warning" href="{{ route('admin.combo.edit', $combo) }}">Edit</a>
                        <form class="d-inline" action="{{ route('admin.combo.destroy', $combo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$combos->links()}}
    </div>

</div>
@endsection
