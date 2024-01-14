@extends('layouts.base')
@section('title', 'Регистрация')
@section('content')
        <form action="{{ route('registration') }}" method="POST">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title"> Регистрация </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 mt-1 control-label">Ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" required
                               placeholder="Введите имя*"/>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="email" class="cols-sm-2 mt-1 control-label">Ваш email</label>
                        <input type="text" class="form-control" name="email" id="email" required
                               placeholder="Введите email*"/>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="password" class="cols-sm-2 mt-1 control-label">Пароль</label>
                        <input type="password" class="form-control" name="password" id="password" required
                               placeholder="Введите пароль*"/>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> Зарегистрироваться</button>
                </div>
            </div>
        </form>
@endsection

