@extends('layouts.layout')

@section('head')
    @parent
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/products.css">
    @show

@section('content')
    <div class="mdc-drawer-app-content mdc-top-app-bar--fixed-adjust">
        <main class="main-content" id="main-content">

            <div class="slider">
                <div class="slide">
                    <img src="assets/img/slider/slides/slide1.jpg" alt="slide1">
                </div>
                <div class="slide">
                    <img src="assets/img/slider/slides/slide2.jpg" alt="slide2">
                </div>
                <div class="slide">
                    <img src="assets/img/slider/slides/slide3.jpg" alt="slide3">
                </div>
                <div class="slide">
                    <img src="assets/img/slider/slides/slide4.jpg" alt="slide4">
                </div>
            </div>

            <ul class="products">
                @foreach($items as $key => $value)
                    <li class="border">
                        <div class="wrap">
                            <div class="product-wrap">
                                <a href=""><img src="{{ $value->img }}"></a>
                            </div>
                            <div class="loop-action">
                                <a href="" class="add-to-cart">Быстрый просмотр</a>
                                <a href="" class="loop-add-to-cart">В корзину</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="stars"></div>
                            <h3 class="product-title">{{ $value->name_of_item }}</h3>
                            <div class="price">&#8381; {{ $value->price }}</div>
                        </div>
                    </li>
                @endforeach
                <li class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <a href=""><img src="assets/img/content/Layer_5.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="stars"></div>
                        <h3 class="product-title">Маленькое cветлое платье</h3>
                        <div class="price">&#8381; 1500</div>
                    </div>
                </li>
                <li class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <a href=""><img src="assets/img/content/Layer_2.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="stars"></div>
                        <h3 class="product-title">Белая футболка</h3>
                        <div class="price">&#8381; 500</div>
                    </div>
                </li>
                <li class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <a href=""><img src="assets/img/content/Layer_3.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="stars"></div>
                        <h3 class="product-title">Блузка</h3>
                        <div class="price">&#8381; 1000</div>
                    </div>
                </li>
                <li class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <a href=""><img src="assets/img/content/Layer_4.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="stars"></div>
                        <h3 class="product-title">Куртка</h3>
                        <div class="price">&#8381; 2200</div>
                    </div>
                </li>
                <li class="border">
                    <div class="wrap">
                        <div class="product-wrap">
                            <a href=""><img src="assets/img/content/Layer_6.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href=""><img src="assets/img/content/Layer_7.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href=""><img src="assets/img/content/Layer_8.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href=""><img src="assets/img/content/Layer_9.png"></a>
                        </div>
                        <div class="loop-action">
                            <a href="" class="add-to-cart">Быстрый просмотр</a>
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href="" class="loop-add-to-cart">В корзину</a>
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
                            <a href="" class="loop-add-to-cart">В корзину</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="stars"></div>
                        <h3 class="product-title">Маленькое черное платье</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </li>
            </ul>

            <footer>
                <h4 class="roots_label">© 2019 Одежда-Донецк All Rights Reserved.</h4>
                <ul class="icons">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                    <li><i class="fa fa-reddit" aria-hidden="true"></i></li>
                    <li><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
                </ul>
            </footer>

        </main>
    </div>
    @show

@section('script')
    @parent
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/slider.js"></script>
    @show