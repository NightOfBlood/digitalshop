<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-right " aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Digital Shop</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about">Магазин</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin">Админка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contacts/"> <i class="far fa-id-card"></i> Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/cart"> <i class="fa fa-shopping-cart"></i> Корзина(<span id="cart-count"></span>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/account/"> <i class="fa fa-lock"></i> Аккаунт</a>
                </li>
            </ul>

            <form class="form-inline">
                <div class="d-flex justify-content-between">
                    @csrf
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>

            @if (Auth::check())
                <a href="{{route('authSignOut')}}" class="nav-link"> Выйти </a>
            @else
                <a class="btn btn-outline-primary" href="/auth/signin"> Вход </a>
            @endif
        </div>
    </div>
</nav>





