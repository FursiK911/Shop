<!doctype html>
<html lang="ru">
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('assets/dist/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    @show
</head>
<body>
@section('header')
    <header class="mdc-top-app-bar app-bar" id="app-bar">
        <div class="mdc-top-app-bar__row">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <a href="#" class="demo-menu material-icons mdc-top-app-bar__navigation-icon">menu</a>
                <a class="mdc-top-app-bar__title" href="{{ url('/') }}">Одежда-Донецк</a>
            </section>
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
                <form action="{{ url('/shopping_cart' )}}" target="_blank">
                    <button class="mdc-icon-button material-icons icon-cart">shopping_cart</button>
                </form>
                    @guest
                        <div class="button from-middle"><a class="button-link" href="{{ route('login') }}">{{ __('Login') }}</a></div>
                    @if (Route::has('register'))
                        <div class="button from-middle"><a class="button-link" href="{{ route('register') }}">{{ __('Register') }}</a></div>
                    @endif
                    @else
                        <div class="button from-middle">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    @endguest
        </div>
    </header>
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-top-app-bar--fixed-adjust">
        <div class="mdc-drawer__content">
            <div class="mdc-list">
                <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
                    <span class="mdc-list-item__text">Мужская одежда</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">send</i>
                    <span class="mdc-list-item__text">Женская одежда</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
                    <span class="mdc-list-item__text">Детская одежда</span>
                </a>
            </div>
        </div>
    </aside>
@show

@section('content')
    @endsection

@section('footer')
@endsection

<script src="{{asset('assets/dist/bundle.js')}}" async></script>
</body>
@section('script')
    @show
</html>