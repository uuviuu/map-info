@extends('layouts.base')
@section('title', 'Вход')
@section('content')
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title"> Регистрация </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="email" class="cols-sm-2 mt-1 control-label">Email</label>
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
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_remember" id="is_remember" value="1" checked>
                            <label class="form-check-label" for="is_remember">
                                Запомнить
                            </label>
                        </div>
                        @error('failed')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> Войти</button>
                </div>
            </div>
        </form>
@endsection

