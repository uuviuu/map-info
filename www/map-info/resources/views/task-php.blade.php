@extends('layouts.base')
@section('title', __('validation.views.page-title.task-php'))
@section('content')
    <div class="card-title">
        <h3>{{__('validation.views.page-title.task-php')}}</h3>
    </div>
    <div class="row">
        <div class="card-body">
            <h5>{{__('validation.views.page-description.task-php')}}</h5>
            <form action="{{ route('task-php.get-map-info') }}" method="GET">
                <div class="form-group">
                    <label for="search">{{__('validation.attributes.address')}}</label>
                    <input type="text" class="form-control" required id="search" name="search"
                           aria-describedby="help" placeholder="{{__('validation.views.button.search')}}..."
                           value="{{ old('search') }}">
                    <small id="help"
                           class="form-text text-muted">{{__('validation.views.message.help-search-map-info')}}</small>
                </div>
                <button type="submit" class="btn btn-primary">{{__('validation.views.button.search')}}</button>
            </form>
            @error('search')
            <div class="mt-3 alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="card-body">
            <h5>{{__('validation.views.page-description.results')}}</h5>

            <ul class="list-group">
                @foreach($data as $item)
                    <li class="list-group-item list-group-item-primary">{{__('validation.attributes.address')}}: {{ $item['full_name'] }}</li>

                    @if($item['type'] == 'building')
                        <li class="list-group-item list-group-item-success">{{__('validation.views.page-description.micro-district')}} {{ $item['micro-district'] }}</li>
                    @endif

                    <li class="list-group-item list-group-item-info">{{__('validation.views.page-description.metro')}} </li>
                    <ul class="p-3 list-group list-group-flush">
                        @foreach($item['metro'] as $metro)
                            <li class="list-group-item list-group-item-dark">{{ $metro['full_name'] }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </div>

        <div class="card-body">
            <h5>{{__('validation.views.page-description.history-requests')}}</h5>
            <ul class="list-group">
                @foreach ($historyRequests as $historyRequest)
                    <li class="list-group-item">{{ $historyRequest->text }}</li>
                @endforeach
            </ul>
            {{ $historyRequests->links('vendor.pagination.simple-default') }}
        </div>
    </div>
@endsection
