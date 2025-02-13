@extends('admin.layouts.app')

@section('title', 'Client profile')

@section('pageTitle', 'Aboute client')

@section('contentHeader')
    <div class="content-header bg-light">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Client profile</h1>
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

            <div class="main-body">


                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ Storage::url($client->image) }}" alt="Profile photo" class="rounded"
                                        width="150" height="220px">
                                    <div class="mt-3">
                                        <h4>{{ $client->name }}</h4>
                                        <p class="text-secondary mb-1">{{ $client->phone }}</p>
                                        <p class="text-secondary mb-1">{{ $client->client_id }}</p>
                                        <p class="text-muted font-size-sm">{{ $client->email }}</p>
                                        <address>
                                            {{ $client->address }}
                                        </address>
                                        <address>
                                            {{ $client->status_message }}
                                        </address>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Father Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->fname }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mother Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->mname }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Birth Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->dob }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Birth ID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->bid }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">NID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->nid }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Passport no</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $client->passport }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Preferred Country</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $preferredContry->name ?? '' }}
                                    </div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Client status</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

                                        <div class="progress">
                                            @foreach ($clientStatus as $status)
                                                <div class="progress-bar {{ 'status-' . $status->id }}"
                                                    role="progressbar" style="width: {{ 100 / $clientStatus->count() }}%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="{{ $status->description }}">
                                                    {{ $client->status < $status->id ? '' : 'Completed' }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Client Attachments</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <ol>
                                            @foreach (json_decode($client->attachments) ?? [] as $attachment)
                                                <li>
                                                    <a target="_black"
                                                        href="{{ Storage::url('public/attachments/' . $client->client_id . '/' . $attachment) }}">
                                                        {{ $attachment }} </a>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-warning "
                                            href="{{ route('admin.client.edit', $client) }}">Edit</a>
                                    </div>
                                    <div class="col-6">
                                        <form class="d-inline" action="{{ route('admin.client.destroy', $client) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>



        </div>

    </div>
@endsection


@push('style')
    <style>
        @foreach ($clientStatus as $status)
        
        .status-{{ $status->id }} {
            background: {{ $status->color }};
        }

        @endforeach

    </style>
@endpush
