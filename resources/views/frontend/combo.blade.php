@extends('frontend.layouts.app')


@section('content')
<!--==================================================-->

<div class="about-area pt-70">
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-7">
                <h3>Leading Visa & Immigration Consultant</h3>
                <hr class="p-0 my-2" />
                <p class="text-justify">
                    Visa processing from Bangladesh is a complex procedure. You would need a trustworthy, knowledgeable and simplified agent
                    to get your desired visa. Each country have its own visa processing system, requirements. Bengal Consultancy match your
                    qualification as per required visa scheme. We are representing world leading universities and Institution.
                </p>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('frontend/assets/images/tour-canvas.jpg')}}" alt="" />
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="about-area my-5 text-justify">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3 class="text-center">Ask your question</h3>
                <br />
                <p>
                    Free assessment, profiling and for expert visa advice please ask your question and start your visa journey
                </p>
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
                                <input class="" maxlength="14" type="text" name="phone" placeholder="{{trans('contact.phone')}}" required>
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
            <div class="col-lg-7">
                <h3 class="text-center w-100">Are you looking for Visa Solutions&nbsp;?</h3>
                <br />
                <p class="text-justify mb-4">
                    "We Provide Solutions” is the motto of Bengal Consultancy.
                    We suggest you the best possible way to get your desired visa.
                    Currently many Visa processing consultancy organization operating in Bangladesh, but only few of them are transparent and reliable as Bengal Consultancy.
                </p>
                @foreach ($combo->populars as $popular)
                <h4 class="my-3 text-left">
                    For more information click here
                    <div class="about-button ml-2 d-inline">
                        <a class="bg-success" href="{{route('popular', $popular)}}">{{ $popular->name}} <i class="fas fa-chevron-right"></i></a>
                    </div>
                </h4>
                @endforeach

                <img class="img-thumbnail w-100" src="{{ Storage::url($combo->image)}}" alt="" />
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<!--==================================================-->
<div class="country-area pt-70 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h2 class="text-center w-100 mb-4"> Our Services</h2>
                <p class="text-justify">
                    Bengal Consultancy’s visa counsellors are effective and well experienced to guide your desired visa easily. Our staffs listen your purpose, assess your visa related documents to solve your visa related mistakes. We understand your unique situation needs tender care to build a perfect visa application. Often, we offer tailor made services for unique situation
                </p>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
@endsection


@push('style')
<style>
    .dreamit-feature-box {
        height: 300px;
    }

</style>
@endpush





<!--<div class="feature-area">-->
<!--    <div class="container">-->
<!--        <div class="row margin-top">-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <div class="dreamit-feature-box">-->
<!--                    <div class="dreamit-feature-icon">-->

<!--                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
<!--                    </div>-->
<!--                    <div class="feature-title">-->
<!--                        <h2>{{ trans('home.onlineAppointment') }}</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <div class="dreamit-feature-box">-->
<!--                    <div class="dreamit-feature-icon">-->
<!--                        <i class="fa-solid fa-passport"></i>-->
<!--                    </div>-->
<!--                    <div class="feature-title">-->
<!--                        <h2>{{ trans('home.vexpert') }}</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <div class="dreamit-feature-box">-->
<!--                    <div class="dreamit-feature-icon">-->
<!--                        <i class="fa-solid fa-file-pen"></i>-->
<!--                    </div>-->
<!--                    <div class="feature-title">-->
<!--                        <h2>{{ trans('home.applyOnline') }}</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <div class="dreamit-feature-box">-->
<!--                    <div class="dreamit-feature-icon">-->
<!--                        <i class="fa-solid fa-earth-europe"></i>-->
<!--                    </div>-->
<!--                    <div class="feature-title">-->
<!--                        <h2>{{ trans('home.foreignOffice') }}</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
