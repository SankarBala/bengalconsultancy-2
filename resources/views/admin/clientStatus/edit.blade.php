@extends('admin.layouts.app')

@section('title', 'Create new client status')

@section('pageTitle', 'Create Client Status')


@section('content')
    <div class="p-3">
        <form action="{{ route('admin.client-status.update', $clientStatus) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-25">
                    <label for="title">Status Titile</label>
                </div>
                <div class="col-75">
                    <input type="text" id="title" name="title" placeholder="Status title ..."
                        value="{{ $clientStatus->title }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="title">Status Description</label>
                </div>
                <div class="col-75">
                    <input type="text" id="description" name="description" placeholder="Status description ..."
                        value="{{ $clientStatus->description }}">
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="color">Status Color</label>
                </div>
                <div class="col-25">
                    <input type="color" id="color" name="color" value="{{ $clientStatus->color }}">
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-25">
                    <label for="color">Select country</label>
                </div>
                <div class="col-25">
                    <select name="country">
                        <option value="">Select one</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}"
                                {{ $country->id == $clientStatus->country ? 'selected' : '' }}>{{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75 text-right">
                    <button class="btn btn-primary my-2" type="submit">Update</button>
                </div>

            </div>
        </form>
    </div>

@endsection



@push('style')
    <style>
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=color] {
            margin-top: 12px;
            width: 80px;
            height: 50px;
            padding: 2px 2px;
            border: 1px solid black;
            cursor: pointer;
        }


        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }



        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>
@endpush

@push('script')
    <script>

    </script>
@endpush
