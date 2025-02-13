@extends('frontend.layouts.app')


@section('content')
    <div class="container p-5">
        <br />
        <br />
        <div class="">
            <div>
                <br />
                <table class="">
                    <tr>
                        <td><b>Name:</b> </td>
                        <td>{{ $client->name }}</td>
                    </tr>

                    <tr>
                        <td><b>Passport: </b></td>
                        <td>{{ $client->passport }}</td>
                    </tr>
                    <tr>
                        <td><b>Client id:</b> </td>
                        <td>{{ $client->client_id }}</td>
                    </tr>

                </table>

                <br />
                <div class="progress">
                    @foreach ($userStatus as $status)
                        <div class="progress-bar {{ 'status-' . $status->status_id }}" role="progressbar"
                            style="width: {{ 100 / $userStatus->count() }}%" aria-valuenow="0" aria-valuemin="0"
                            aria-valuemax="100" data-toggle="tooltip" data-placement="top"
                            title="{{ $status->description }}">
                            @if ( $clientStatus->find($status->status_id) )
                                {{ $clientStatus->find($status->status_id)->title }}
                            @endif
                        </div>
                    @endforeach
                </div>
                <br />
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userStatus as $status)
                        @if ( $clientStatus->find($status->status_id) )
                            <tr>
                                <td>{{ $clientStatus->find($status->status_id)->updated_at->toDateString() }}</td>
                                <td>{{ $clientStatus->find($status->status_id)->title }}</td>
                                <td>{{ $clientStatus->find($status->status_id)->description }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
