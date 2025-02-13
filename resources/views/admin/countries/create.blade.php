@extends('admin.layouts.app')

@section('title', 'Create new country')

@section('pageTitle', 'Create Country')
    @push('style')
        <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    @endpush
@section('content')
    <div class="p-3">
        <form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">Country Name</label>
                </div>
                <div class="col-35">
                    <input type="text" id="cname" name="country" placeholder="Country name..">
                    @error('country')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-25">
                    <label for="fname">Country Name Bangla</label>
                </div>
                <div class="col-35">
                    <input type="text" id="cnameBangla" name="countryBangla" placeholder="Country name in bangla..">
                    @error('countryBangla')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="flug">Select Flag</label>
                </div>
                <div class="col-35 pt-2">
                    <input type="file" id="flag" name="flag">
                </div>
                <div class="col-25">
                    <label for="banner">Select Banner</label>
                </div>
                <div class="col-35 pt-2">
                    <input type="file" id="banner" name="banner">
                </div>
                <div class="col-25">
                    <label for="banner">Promotional Image</label>
                </div>
                <div class="col-35 pt-2">
                    <input class="" type="file" id="banner2" name="banner2">
                </div>
                <div class="col-25">
                    <label for="fname">Country Code</label>
                </div>
                <div class="col-35 pt-2">
                   <input class="w-100" type="text" id="" name="country_code" placeholder="Country code" />
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-25">
                    <label for="subject">Content</label>
                </div>
                <div class="col-75">
                    <textarea id="content" name="content"></textarea>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-25">
                    <label for="subject">Content Bangla</label>
                </div>
                <div class="col-75">
                    <textarea id="contentBangla" name="contentBangla"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <div class="col-25">
                        <button class="btn btn-warning pull-left my-2" type="submit" name="status"
                            value="draft">Draft</button>
                    </div>
                    <div class="col-75 text-right">
                        <button class="btn btn-primary my-2" type="submit" name="status" value="published">Publish</button>
                    </div>
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
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{ route('CKEditorUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            uiColor: '#92B8F0',
            height: '400px',
        });

        CKEDITOR.replace('contentBangla', {
            filebrowserUploadUrl: "{{ route('CKEditorUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            uiColor: '#92B8F0',
            height: '400px',
        });
    </script>
@endpush
