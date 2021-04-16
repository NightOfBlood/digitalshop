<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Digital Shop</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Главная</a>
    <a class="p-2 text-dark" href="/search">Товары</a>
    <a class="p-2 text-dark" href="/about">Магазин</a>
      <a class="p-2 text-dark" href="/admin">Админка</a>
      <a class="p-2 text-dark" href="/contacts"> <i class="far fa-id-card"></i> Контакты</a>
    <a class="p-2 text-dark" href="/cart"> <i class="fa fa-shopping-cart"></i> Корзина
      (<span id="cart-count"></span>)</a>
    <a class="p-2 text-dark" href="/account"> <i class="fa fa-lock"></i> Аккаунт</a>
  </nav>
    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search') }}">
        @csrf
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
  @if (Auth::check())
          <a href="#" class="nav-link">{{Auth::user()->getNameOrUsername}}</a>
          <a href="{{route('authSignOut')}}" class="nav-link">Выйти</a>
    @else
          <a class="btn btn-outline-primary" href="/auth/signin">Вход</a>
    @endif


</div>

