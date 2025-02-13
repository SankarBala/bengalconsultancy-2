@extends('frontend.layouts.app')

@section('content')
<div class="blog-area style-two style-three pt-20 pb-60 mt-5 pt-5">
    <div class="container">
        <div class="row pt-40">
            <div class="col-lg-5 position-relative">
                <img class="border" src="{{ Storage::url($news->image) }}" alt="" width="100%" />
            </div>
            <div class="col-lg-7 ">
                <h2>
                    @if (Cookie::get('lang') == 'bn')
                    {{ $news->title_bangla }}
                    @else
                    {{ $news->title }}
                    @endif
                </h2>
                <br />
                <div class="tofel-content text-dark">
                    <div class="tofel-content-inner text-dark" style="color: black;">
                        @if (Cookie::get('lang') == 'bn')
                        {!! $news->content_bangla !!}
                        @else
                        {!! $news->content !!}
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
        background: linear-gradient(rgb(94 109 162 / 75%), rgba(17, 26, 58, -0.25)), transparent;
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
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const offset = -120; // Adjust this value as needed

            const target = document.querySelector(this.getAttribute('href'));
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = targetPosition + offset;

            window.scrollTo({
                top: offsetPosition
                , behavior: 'smooth'
            });
        });
    });

</script>

@endpush
