@extends('frontend.layouts.app')


@section('content')
<div class="container">
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="call-do-action-area d-flex align-items-center">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-do-action-content text-center">
                        <div class="call-do-action-title">
                            <div class="bd-video style-three">
                                <div class="video-icon">
                                    <a target="_blank" class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="#"><i class="far fa-play-circle"></i></a>
                                </div>
                            </div>
                            <h3>{{ trans('about.ourVision') }}</h3>
                        </div>
                        <div class="p-4 text-white pt-3">
                            <p style="font-size: larger;">
                                {{ trans('about.ourVisionText') }}
                            </p>
                        </div>
                        <div class="call-do-action-button">
                            <a href="#">{{ trans('about.call') }}: {{ env('APP_PHONE') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<div class="team-member-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title pb-30 text-center">

                    <div class="dreamit-section-main-title">
                        <h2 class="text-black">{{ trans('about.ourMission') }}</h2>
                    </div>
                    <div class="text-left mt-3" style="font-size: larger;">
                        <p class="text-info">{{ trans('about.ourMissionText1') }}</p>
                        <p class="text-info">{{ trans('about.ourMissionText2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="counter-area style-three pt-70 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title pb-30 text-center">

                    <div class="dreamit-section-main-title">
                        <h2 class="text-black">{{ trans('about.whyUs') }}</h2>
                    </div>
                    <div class="text-left mt-3">
                        <h2 class="text-info text-center">{{ trans('about.whyUsText') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<div class="team-member-area style-three pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title pb-30 text-center">

                    <div class="dreamit-section-main-title">
                        <h2 class="text-black">{{ trans('about.ourService') }}</h2>
                    </div>
                    <div class="text-left mt-3">

                        <h5 class="text-info">{{ trans('about.ourService3') }}</h5>
                        <p>
                            {{ trans('about.ourService3Text') }}
                        </p>

                        <h5 class="text-info">{{ trans('about.ourService4') }}</h5>
                        <p>
                            {{ trans('about.ourService4Text') }}
                        </p>
                        
                        <h5 class="text-info">{{ trans('about.ourService2') }}</h5>
                        <p>
                            {{ trans('about.ourService2Text') }}
                        </p>


                        <h5 class="text-info">{{ trans('about.ourService5') }}</h5>
                        <p>
                            {{ trans('about.ourService5Text') }}
                        </p>

                        <h5 class="text-info">{{ trans('about.ourService1') }}</h5>
                        <p>
                            {{ trans('about.ourService1Text') }}
                        </p>

                        <h5 class="text-info">{{ trans('about.ourService6') }}</h5>
                        <p>
                            {{ trans('about.ourService6Text') }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<div class="counter-area style-three pt-70 mt-5">
    <div class="container">
        <div class="row cmt-box">
            <div class="col-lg-3 col-md-6">
                <div class="counter-content">
                    <h1 class="counter">1000</h1>
                    <h3>+</h3>
                </div>
                <div class="counter-title-style-2">
                    <h4>{{ trans('about.students') }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-content">
                    <h1 class="counter">500</h1>
                    <h3>+</h3>
                </div>
                <div class="counter-title-style-2">
                    <h4>{{ trans('about.immigration') }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-content">
                    <h1 class="counter">50</h1>
                    <h3>+</h3>
                </div>
                <div class="counter-title-style-2">
                    <h4>{{ trans('about.universities') }}</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-content">
                    <h1 class="counter">10</h1>
                    <h3>+</h3>
                </div>
                <div class="counter-title-style-2">
                    <h4>{{ trans('about.country') }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('style')
<style>


</style>
@endpush