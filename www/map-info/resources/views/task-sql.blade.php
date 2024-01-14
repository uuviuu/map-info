@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="card-title">
        <h3>{{__('validation.views.page-title.task-sql')}}</h3>
    </div>
    <div class="row">
        <div class="card-body">
            <h5>{{__('validation.views.page-description.task-sql')}}</h5>
        </div>
    </div>
@endsection
