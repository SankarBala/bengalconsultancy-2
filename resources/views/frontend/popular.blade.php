@extends('frontend.layouts.app')


@section('content')
<div class="breatcome-area d-flex align-items-center" style="background-image: url('{{ Storage::url($sPopular->banner) }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome-content text-center">
                    <div class="breatcome-content-title">
                        <h1>{{ $sPopular->name }}</h1>
                    </div>
                    <div class="breatcome-content-text">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a> <i class="fas fa-chevron-right"></i>
                                <span>{{ $sPopular->name }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="blog-area style-two style-three pt-20 pb-60">
    <div class="container">
        <div class="row pt-40">
            <div class="col-lg-4 position-relative">
              
            <div class="contact-form-fixed" id="fixed-contact-form">
                    <div class="sideber-visa-content country-slider">
                        <div class="thumb-title">
                            <h2>{{ trans('country.call request') }}</h2>
                        </div>
                        <div style="font-size:larger; font-weight:bold; color:white !important;">
                            <i class="flaticon-process"></i>
                            <!-- <span class=""> -->
                            {{ env('APP_PHONE') }}
                            <!-- </span> -->
                        </div>
                    </div>
                    <div class="assesstment-form-box p-0 mt-4 ">
                        <div class="assesstment-form-title text-left">
                            {{-- <h2>{{ trans('country.assessment') }}</h2> --}}
                        </div>
                        <form action="{{ route('postQuery') }}" method="POST" enctype="multipart/form-data" class="text-left">
                            @csrf
                            <div class="row mt-20">
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="{{trans('contact.name')}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <input type="text" name="email" placeholder="{{trans('contact.email')}}">
                                    </div>
                                </div>
                                <div class="col-7 pr-2">
                                    <div class="form-box">
                                        <input class="px-1" maxlength="14" type="text" name="phone" placeholder="{{trans('contact.phone')}}" required>
                                    </div>
                                </div>
                                <div class="col-5 pl-0">
                                    <div class="form-box">
                                        <input class="px-1" maxlength="10" type="text" name="date" placeholder="{{trans('contact.date')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="message" id="" cols="30" rows="3" name="message" placeholder="{{trans('contact.message')}}"></textarea>
                                    </div>
                                    <p class="text-success">{{ session('message') }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <input class="btn btn-primary w-100 country-slider py-2 mt-1" type="submit" value="{{trans('contact.send')}}">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-lg-8 ">
                <h2>
                    @if (Cookie::get('lang') == 'bn')
                    {{ $sPopular->nameBangla }}
                    @else
                    {{ $sPopular->name }}
                    @endif
                </h2>
                <br />
                <div class="tofel-content text-dark">
                    <div class="tofel-content-inner text-dark" style="color: black;">
                        @if (Cookie::get('lang') == 'bn')
                        {!! $sPopular->contentBangla !!}
                        @else
                        {!! $sPopular->content !!}
                        @endif
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
    .breatcome-area {
        background: linear-gradient(rgb(94 109 162 / 75%), rgba(17, 26, 58, -0.25)),  transparent;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .h3,
    .h2,
    .h1 {
        color: maroon !important;
    }

    .country-slider {
        background: #1c4877 !important;
    }

    .fixed-contact-form {
        position: fixed;
        top: 110px;
        max-width: 300px;
    }

    .contact-form-fixed {
        padding: 5px;
        border: 2px solid #dddddd;
        border-radius: 8px;
    }
</style>
@endpush

@push('scripts')
<script type="text/javascript">
    function bodyScrolled(pointer) {
        var offsetY = window.scrollY
        var fixedContactForm = document.getElementById('fixed-contact-form')
        if (offsetY > 300 && window.innerWidth > 990) {
            document.getElementById('fixed-contact-form').classList.add('fixed-contact-form')
        } else {
            document.getElementById('fixed-contact-form').classList.remove('fixed-contact-form')
        }
    }
</script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const offset = -120; // Adjust this value as needed

            const target = document.querySelector(this.getAttribute('href'));
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = targetPosition + offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });
</script>

@endpush