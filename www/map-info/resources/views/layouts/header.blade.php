<header>
    <section>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                <p class="mt-3 h2 n-m font-thin v-center">
                    <span class="m-l d-none d-sm-block">
                        Map Info
                    </span>
                </p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3"> Главная </a>
                @auth
                    <form class="hidden" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class=" mt-3 btn btn-danger"> Выход</button>
                    </form>
                @else
                    <a href="{{ route('login.get-page') }}" class="btn btn-primary mt-3"> Авторизация </a>
                    <a href="{{ route('registration.get-page') }}" class="btn btn-primary mt-3"> Регистрация </a>
                @endauth
            </div>
        </div>
    </section>
</header>
