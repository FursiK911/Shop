@extends('layouts.layout')

@section('head')
    @parent
    <head>
        <title>Корзина</title>
    </head>
@endsection

@section ('content')
    <div class="mdc-drawer-app-content mdc-top-app-bar--fixed-adjust">
        <main class="main-content" id="main-content">
            <content>
                <div class="content_info">
                    <div class="cart_info">
                        <h1 class="cart_label">Корзина:</h1>
                    </div>
                    <div class="menu">
                        <ul>
                            <div class="button from-middle"><a class="button-link">Оформить заказ</a></div>
                            <div class="button from-middle"><a class="button-link">Очистить корзину</a></div>
                        </ul>
                    </div>
                </div>

                <ul class="products">
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">Удалить из корзины</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">Маленькое черное платье</h3>
                            <div class="price">&#8381; 1999</div>
                        </div>
                    </li>
                </ul>
            </content>
        </main>
    </div>
@show


@section('script')
    @parent
    <link rel="stylesheet" type="text/css" href="assets/css/cart.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="assets/css/products.css" media="all"/>
@show