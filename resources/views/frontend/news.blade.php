@extends('frontend.layouts.app')

@section('content')
<div class="container mt-5 pt-2">
    <div class="row mt-5 pt-5 mb-3">
        @foreach ($news as $single)
        <div class="col-md-4">
            <div class="dreamit-slider-content text-dark">
                <h3 class="text-dark mb-2" style="font-size:24px; width:100%; font-weight:bold;">
                    <a href="{{route('singleNews', $single)}}">
                        {{app()->getLocale() =='en'? $single->title : $single->title_bangla }}
                    </a>
                </h3>
                <img class="border" src="{{ Storage::url($single->image) }}" alt="" width="100%" height="250px" />
                <a href="{{route('singleNews', $single)}}">
                    {!! Str::limit(strip_tags( app()->getLocale() =='en'? $single->content : $single->content_bangla), 100, '...') !!}
                </a>
            </div>
        </div>
        @endforeach
    </div>
    {{$news->links()}}
</div>
@endsection

@push('style')
@endpush
