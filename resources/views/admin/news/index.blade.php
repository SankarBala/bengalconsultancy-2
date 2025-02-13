@extends('admin.layouts.app')

@section('title', 'Newses')

@section('pageTitle', 'Newses')

@section('contentHeader')
<div class="content-header bg-light">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">News List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.news.create') }}">Create new news</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
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
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newses as $index => $news)
                <tr>
                    <th scope="row">{{ $news->id }}</th>
                    <th>{{ $news->title }}</th>
                    <th>
                        <img src="{{ Storage::url($news->image) }}" width="80px" />
                    </th>
                    <th>{{ $news->published ? 'Published': 'Draft' }}</th>
                    <th>
                        <a class="btn  btn-warning" href="{{ route('admin.news.edit', $news) }}">Edit</a>
                        <form class="d-inline" action="{{ route('admin.news.destroy', $news) }}" method="POST">
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
    {{$newses->links()}}
</div>
@endsection
