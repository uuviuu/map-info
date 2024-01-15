@extends('layouts.base')
@section('title', __('validation.views.page-title.task-sql'))
@section('content')
    <div class="card-title">
        <h3>{{__('validation.views.page-title.task-sql')}}</h3>
    </div>
    <div class="row">
        <div class="card-body">
            <h5>{{__('validation.views.page-description.task-sql')}}</h5>
            <div class="card-columns col-lg-8 col-md-8 col-sm-12 mt-3">
                <form class="hidden" action="{{ route('task-sql.generate-table') }}" method="POST">
                    @csrf
                    <button type="submit" class="p-1 mt-3 btn btn-primary"> {{ __('validation.views.button.generate-table') }} </button>
                </form>
                <a href="{{ route('task-sql.get-page', ['is_filter' => true]) }}" class="p-3 btn btn-primary mt-3"> {{ __('validation.views.button.filter') }} </a>
                <a href="{{ route('task-sql.get-page') }}" class="btn btn-primary mt-3"> {{ __('validation.views.button.clear-filter') }} </a>
            </div>
            @if (session('message'))
                <div class="mt-3 alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

                <table class="mt-3 table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('validation.attributes.article') }}</th>
                        <th scope="col">{{ __('validation.attributes.dealer') }}</th>
                        <th scope="col">{{ __('validation.attributes.price') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($shop as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->article }}</td>
                        <td>{{ $product->dealer }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>
    </div>
@endsection
