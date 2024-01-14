@extends('layouts.base')
@section('title', __('validation.views.page-title.task-sql'))
@section('content')
    <div class="card-title">
        <h3>{{__('validation.views.page-title.task-sql')}}</h3>
    </div>
    <div class="row">
        <div class="card-body">
            <h5>{{__('validation.views.page-description.task-sql')}}</h5>
            <div class="card-columns col-lg-6 col-md-6 col-sm-12 mt-3">
                <form class="hidden" action="{{ route('task-sql.generate-table') }}" method="POST">
                    @csrf
                    <button type="submit" class="mt-3 btn btn-primary"> {{ __('validation.views.button.generate-table') }} </button>
                </form>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3"> {{ __('validation.views.page-title.main') }} </a>
            </div>
            @if (session('message'))
                <div class="mt-3 alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
@endsection
