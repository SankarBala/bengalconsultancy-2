@extends('admin.layouts.app')

@section('title', 'Add new client')

@section('pageTitle', 'New client')


@section('content')
    <div class="p-3">
        <form action="{{ route('admin.client.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-25">
                    <label for="fname">Client Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Client name..">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="phone">Client's Phone</label>
                </div>
                <div class="col-35">
                    <input type="text" id="phone" name="phone" placeholder="Client's phone no...">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-25">
                    <label class="w-100 text-center-md" for="email">Client's Email</label>
                </div>
                <div class="col-35">
                    <input type="text" id="email" name="email" placeholder="Client's email no...">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="fname">Father's' Name</label>
                </div>
                <div class="col-35">
                    <input type="text" id="fname" name="fname" placeholder="Client's father's name..">
                    @error('fname')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-25">
                    <label class="w-100 text-center-md" for="mname">Mother's' Name</label>
                </div>
                <div class="col-35">
                    <input type="text" id="mname" name="mname" placeholder="Client's mother's name..">
                    @error('mname')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="bid">Birth id No.</label>
                </div>
                <div class="col-35">
                    <input type="text" id="bid" name="bid" placeholder="Client's birth id no..">
                    @error('bid')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-25">
                    <label class="w-100 text-center-md" for="passport">Date of Birth</label>
                </div>
                <div class="col-35">
                    <input class="form-control" type="date" id="dob" name="dob" placeholder="Client's birth date...">
                    @error('dob')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label for="nid">Nid No.</label>
                </div>
                <div class="col-35">
                    <input type="text" id="nid" name="nid" placeholder="Client's NID no..">
                    @error('nid')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-25">
                    <label class="w-100 text-center-md" for="passport">Passport No.</label>
                </div>
                <div class="col-35">
                    <input type="text" id="passport" name="passport" placeholder="Client's passport name..">
                    @error('passport')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>




            <div class="row">
                <div class="col-25">
                    <label for="image">Select Photo</label>
                </div>
                <div class="col-35 pt-2">
                    {{-- <div class="image-container col-75"></div> --}}
                    <input class="form-control py-1" type="file" id="image" name="image">
                </div>

                <div class="col-25">
                    <label class="w-100 text-center-md" for="preffered_country">Preffered Country</label>
                </div>
                <div class="col-35">
                    <select class="" name="preferred_country">
                        <option value="0">Select one</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- <div class="col-25">-->
                <!--   <input class="w-100" type="text" id="" name="country_code" placeholder="Country code" />-->
                <!--</div>-->
                <div class="col-25">
                    <label for="image">Select Attachments</label>
                </div>
                <div class="col-35 pt-2">
                    {{-- <div class="image-container col-75"></div> --}}
                    <input class="form-control py-1" type="file" id="attachments" name="attachments[]" multiple/>
                </div>
            </div>



            <div class="row">
                <div class="col-25">
                    <label class="" for="address">Address</label>
                </div>
                <div class="col-35">
                    <textarea class="" rows="5" name="address"></textarea>
                </div>

                <div class="col-25"></div>
                <div class="col-35 text-right">
                    <button class="btn btn-primary my-3 px-4" type="submit">Save</button>
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
            width: 15%;
            margin-top: 6px;
        }

        .col-35 {
            float: left;
            width: 35%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 85%;
            margin-top: 6px;
        }
        .col-15 {
            float: left;
            width: 20%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .text-center-md {
            text-align: center;
        }

        .image-container {
            height: 250px;
            background: url('/backend/dist/img/user.jpg');
            background-repeat: no-repeat;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-35,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }

            .text-center-md {
                text-align: left;
            }

        }

    </style>
@endpush

@push('script')

@endpush
