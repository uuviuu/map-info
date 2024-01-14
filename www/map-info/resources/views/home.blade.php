@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="page-title">
        <h3>{{__('validation.views.page-title.main')}}</h3>
    </div>
    <div class="row">
{{--        @foreach ($about as $link)--}}
{{--            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">--}}
{{--                <a target="_blank" href="{{ url('//' . $link->link) }}">{{ $link->text }}</a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
@endsection
