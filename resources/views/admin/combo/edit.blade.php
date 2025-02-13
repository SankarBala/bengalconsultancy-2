@extends('admin.layouts.app')

@section('title', 'Edit Combo')

@section('pageTitle', 'Edit Combo')
@push('style')
<link href="{{asset('frontend/assets/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('frontend/assets/css/select2-bootstrap4.min.css')}}" rel="stylesheet" />

<script src="{{asset('frontend/assets/js/select2.full.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
@endpush
@section('content')
<div class="p-3">
    <form action="{{ route('admin.combo.update', $comboPromo) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-3">
                <label for="fname">Combo Name</label>
            </div>
            <div class="col-9">
                <input type="text" id="cname" name="name" placeholder="Combo promotion name.." value="{{old('name', $comboPromo->name) }}" />
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-3">
                <label for="fname">Active</label>
            </div>
            <div class="col-9 pt-2">
                <input class="text-lg" type="checkbox" id="" name="active" {{$comboPromo->status? 'checked':''}} style="width: 40px; height: 40px; cursor: pointer;" />
            </div>

            <div class="col-3">
                <label for="banner">Select Combo</label>
            </div>
            <div class="col-9 pt-2">
                <select class="multiple" name="populars[]" multiple="multiple" data-placeholder="Select some items" data-dropdown-css-class="multiple" style="width: 100%; height: 300px;">
                    @foreach ($populars as $popular)
                    <option value="{{ $popular->id }}" {{ in_array($popular->id, old('populars', $selectedPopulars)) ? 'selected' : '' }}>
                        {{ $popular->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="banner">Promotional Image</label>
            </div>
            <div class="col-35 pt-2">
                <img src="{{ Storage::url($comboPromo->image) }}" width="100px" height="80px" />
                <input type="file" id="image" name="image">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
                <div class="col-25">
                </div>
                <div class="col-75 text-right">
                    <button class="btn btn-primary my-2" type="submit">Update</button>
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
        filebrowserUploadUrl: "{{ route('CKEditorUpload', ['_token' => csrf_token()]) }}"
        , filebrowserUploadMethod: 'form'
        , uiColor: '#92B8F0'
        , height: '400px'
    , });

    CKEDITOR.replace('contentBangla', {
        filebrowserUploadUrl: "{{ route('CKEditorUpload', ['_token' => csrf_token()]) }}"
        , filebrowserUploadMethod: 'form'
        , uiColor: '#92B8F0'
        , height: '400px'
    , });


    $('.multiple').select2({
        theme: 'bootstrap4'
    })

</script>
@endpush
