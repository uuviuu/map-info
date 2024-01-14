<header>
    <section>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                <div class="mt-3">
                    <a href="{{ route('home') }}" class="btn btn-primary"> Главная </a>
                    @auth
{{--                        <a href="{{ route('platform.pastes.create') }}" class="btn btn-primary">В панель пользователя</a>--}}
                        <form class="hidden" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class=" mt-1 btn btn-danger"> Выход</button>
                        </form>
                    @else
                        <a href="{{ route('show-login') }}" class="btn btn-primary"> Авторизация </a>
                        <a href="{{ route('show-registration') }}" class="btn btn-primary"> Регистрация </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
</header>
