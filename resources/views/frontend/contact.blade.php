@extends('frontend.layouts.app')


@section('content')
<div class="container">
    <br />
    <br />
    <br />
    <div class="appointment-area style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <div class="contact_from_box">
                        <div class="contact_title pb-4">
                            <h3>{{ trans('contact.contact') }}</h3>
                            <p>{{ trans('contact.purpose') }}</p>
                        </div>
                        <form id="" action="{{ route('contactForm') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="{{trans('contact.name')}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="{{trans('contact.email')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="{{trans('contact.phone')}}" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="date" placeholder="{{trans('contact.date')}}" required>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="{{trans('contact.message')}}"></textarea>
                                    </div>
                                    <div class="quote_btn">
                                        <button class="btn" type="submit">{{trans('contact.send')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-message">{{ session('message') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 pl-0 pr-0 px-2">
                    <div class="cda-content">
                        <div class="call-do-action-box">
                            <div class="cda-single-content d-flex hr">
                                <div class="cda-icon pr-4">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cda-content-inner">
                                    <h4>{{ trans('contact.contact') }}</h4>
                                    <p>{{ trans('contact.address')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-do-action-box">
                            <div class="cda-single-content d-flex hr">
                                <div class="cda-icon pr-4">
                                    <i class="fas fa-tty"></i>
                                </div>
                                <div class="cda-content-inner">
                                    <h4>{{ trans('contact.phone number') }}</h4>
                                    <p>{{ trans('contact.number') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="call-do-action-box">
                            <div class="cda-single-content d-flex hr">
                                <div class="cda-icon pr-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="cda-content-inner">
                                    <h4>{{ trans('contact.our email') }}</h4>
                                    <p>info@bengalconsultancy.com</p>
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


</style>
@endpush