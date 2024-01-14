@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="card-title">
        <h3>{{__('validation.views.page-title.main')}}</h3>
    </div>
    <div class="row">
        <div class="card-body">
            @auth
                <h5>{{__('validation.views.page-description.main-auth')}}</h5>

                <div class="card-columns col-lg-6 col-md-6 col-sm-12 mt-3">
                    @foreach ($pages as $page)
                        <a href="{{ route("$page.get-page") }}"
                           class="btn btn-primary"> {{ __("validation.views.page-title.$page") }} </a>
                    @endforeach
                </div>
            @else
                <h5>{{__('validation.views.page-description.main-not-auth')}}</h5>
            @endauth
        </div>
    </div>
@endsection
