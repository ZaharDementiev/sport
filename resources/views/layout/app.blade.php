<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sport Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co"/>
    <meta name="keywords"
          content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="freehtml5.co"/>

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css"/>
    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
    <script src="https://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>

    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/respond.min.js"></script>

</head>
<body>

<style>
    .animated {
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        -moz-animation-fill-mode: both;
        -o-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.hinges {
        -webkit-animation-duration: 2s;
        -moz-animation-duration: 2s;
        -o-animation-duration: 2s;
        animation-duration: 2s;
    }

    .animated.slow {
        -webkit-animation-duration: 3s;
        -moz-animation-duration: 3s;
        -o-animation-duration: 3s;
        animation-duration: 3s;
    }

    .animated.snail {
        -webkit-animation-duration: 4s;
        -moz-animation-duration: 4s;
        -o-animation-duration: 4s;
        animation-duration: 4s;
    }

    @-webkit-keyframes shake {
        0%, 100% {
            -webkit-transform: translateX(0);
        }
        10%, 30%, 50%, 70%, 90% {
            -webkit-transform: translateX(-10px);
        }
        20%, 40%, 60%, 80% {
            -webkit-transform: translateX(10px);
        }
    }

    @-moz-keyframes shake {
        0%, 100% {
            -moz-transform: translateX(0);
        }
        10%, 30%, 50%, 70%, 90% {
            -moz-transform: translateX(-10px);
        }
        20%, 40%, 60%, 80% {
            -moz-transform: translateX(10px);
        }
    }

    @-o-keyframes shake {
        0%, 100% {
            -o-transform: translateX(0);
        }
        10%, 30%, 50%, 70%, 90% {
            -o-transform: translateX(-10px);
        }
        20%, 40%, 60%, 80% {
            -o-transform: translateX(10px);
        }
    }

    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        10%, 30%, 50%, 70%, 90% {
            transform: translateX(-10px);
        }
        20%, 40%, 60%, 80% {
            transform: translateX(10px);
        }
    }

    .shake {
        -webkit-animation-name: shake;
        -moz-animation-name: shake;
        -o-animation-name: shake;
        animation-name: shake;
    }

    .login .modal-dialog {
        width: 350px;
    }

    .login .modal-footer {
        border-top: 0;
        margin-top: 0px;
        padding: 10px 20px 20px;
    }

    .login .modal-header {
        border: 0 none;
        padding: 15px 15px 15px;
        /* padding: 11px 15px; */
    }

    .login .modal-body {
        /* background-color: #eeeeee; */
    }

    .login .division {
        float: none;
        margin: 0 auto 18px;
        overflow: hidden;
        position: relative;
        text-align: center;
        width: 100%;
    }

    .login .division .line {
        border-top: 1px solid #DFDFDF;
        position: absolute;
        top: 10px;
        width: 34%;
    }

    .login .division .line.l {
        left: 0;
    }

    .login .division .line.r {
        right: 0;
    }

    .login .division span {
        color: #424242;
        font-size: 17px;
    }

    .login .box .social {
        float: none;
        margin: 0 auto 30px;
        text-align: center;
    }

    .login .social .circle {
        background-color: #EEEEEE;
        color: #FFFFFF;
        border-radius: 100px;
        display: inline-block;
        margin: 0 17px;
        padding: 15px;
    }

    .login .social .circle .fa {
        font-size: 16px;
    }

    .login .social .facebook {
        background-color: #455CA8;
        color: #FFFFFF;
    }

    .login .social .google {
        background-color: #F74933;
    }

    .login .social .github {
        background-color: #403A3A;
    }

    .login .facebook:hover {
        background-color: #6E83CD;
    }

    .login .google:hover {
        background-color: #FF7566;
    }

    .login .github:hover {
        background-color: #4D4D4d;;
    }

    .login .forgot {
        color: #797979;
        margin-left: 0;
        overflow: hidden;
        text-align: center;
        width: 100%;
    }

    .login .btn-login, .registerBox .btn-register {
        background-color: #00BBFF;
        border-color: #00BBFF;
        border-width: 0;
        color: #FFFFFF;
        display: block;
        margin: 0 auto;
        padding: 15px 50px;
        text-transform: uppercase;
        width: 100%;
    }

    .login .btn-login:hover, .registerBox .btn-register:hover {
        background-color: #00A4E4;
        color: #FFFFFF;
    }

    .login .form-control {
        border-radius: 3px;
        background-color: rgba(0, 0, 0, 0.09);
        box-shadow: 0 1px 0px 0px rgba(0, 0, 0, 0.09) inset;
        color: #FFFFFF;
    }

    .login .form-control:hover {
        background-color: rgba(0, 0, 0, .16);
    }

    .login .form-control:focus {
        box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.04) inset;
        background-color: rgba(0, 0, 0, 0.23);
        color: #FFFFFF;
    }

    .login .box .form input[type="text"], .login .box .form input[type="password"] {
        border-radius: 3px;
        border: none;
        color: #333333;
        font-size: 16px;
        height: 46px;
        margin-bottom: 5px;
        padding: 13px 12px;
        width: 100%;
    }


    @media (max-width: 400px) {
        .login .modal-dialog {
            width: 100%;
        }
    }
</style>

<div class="fh5co-loader"></div>
<div id="page">

    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="{{route('main')}}">Sport Center</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <div class="container">
                            <div class="row">
                                @if(!isset($_COOKIE[\App\Models\Client::CLIENT]))
                                <div class="col-md-4 col-md-offset-4">
                                    <a class="btn btn-default" data-toggle="modal" href="javascript:void(0)"
                                       onclick="openLoginModal();">Войти</a>
                                    <a class="btn btn-default" data-toggle="modal" href="javascript:void(0)"
                                       onclick="openRegisterModal();">Зарегестрироваться</a>
                                </div>
                                @else
                                    <div class="col-md-4 col-md-offset-4">
                                        <a class="btn btn-default" data-toggle="modal" href="{{route('client.logout')}}">Выйти</a>
                                    </div>
                                @endif
                            </div>
                        </div>



                        <div class="modal fade login" id="loginModal">
                            <div class="modal-dialog login animated">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box">
                                            <div class="content">
                                                <div class="error"></div>
                                                <div class="form loginBox">
                                                    <form method="" action="" accept-charset="UTF-8">
                                                        @csrf
                                                        <input id="email" class="form-control" type="text"
                                                               placeholder="Телефон" name="phone">
                                                        <input id="password" class="form-control" type="password"
                                                               placeholder="Пароль" name="password">
                                                        <button class="btn btn-default btn-login" type="submit" formmethod="post" formaction="{{route('client.login')}}">
                                                            Войти
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="content registerBox" style="display:none;">
                                                <div class="form">
                                                    <form method="" html="{:multipart=>true}" data-remote="true"
                                                          action="" accept-charset="UTF-8">
                                                        @csrf
                                                        <input class="form-control" type="text"
                                                               placeholder="Имя" name="name">
                                                        <input class="form-control" type="text"
                                                               placeholder="Телефон" name="phone">
                                                        <input class="form-control" type="password"
                                                               placeholder="Пароль" name="password">
                                                        <button formmethod="post" formaction="{{route('client.register')}}" class="btn btn-default btn-register" type="submit">
                                                            Cоздать аккаунт
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="forgot login-footer">
                         <span>Если не зарегистрированы, можно
                            <a href="javascript: showRegisterForm();">Создать аккаунт</a>
                         </span>
                                        </div>
                                        <div class="forgot register-footer" style="display:none">
                                            <span>Уже есть аккаунт?</span>
                                            <a href="javascript: showLoginForm();">Авторизируйтесь</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade login" id="registerModal">
                            <div class="modal-dialog login animated">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="box">
                                            <div class="content">
                                                <div class="error"></div>
                                                <div class="form loginBox">
                                                    <form method="" html="{:multipart=>true}" data-remote="true"
                                                          action="" accept-charset="UTF-8">
                                                        @csrf
                                                        <input class="form-control" type="text"
                                                               placeholder="Имя" name="name">
                                                        <input class="form-control" type="text"
                                                               placeholder="Телефон" name="phone">
                                                        <input class="form-control" type="password"
                                                               placeholder="Пароль" name="password">
                                                        <button formmethod="post" formaction="{{route('client.register')}}" class="btn btn-default btn-register" type="submit">
                                                            Cоздать аккаунт
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="content registerBox" style="display:none;">
                                                <div class="form">
                                                    <form method="" html="{:multipart=>true}" data-remote="true"
                                                          action="" accept-charset="UTF-8">
                                                        @csrf
                                                        <input class="form-control" type="text"
                                                               placeholder="Имя" name="name">
                                                        <input class="form-control" type="text"
                                                               placeholder="Телефон" name="phone">
                                                        <input class="form-control" type="password"
                                                               placeholder="Пароль" name="password">
                                                        <button formmethod="post" formaction="{{route('client.register')}}" class="btn btn-default btn-register" type="submit">
                                                            Cоздать аккаунт
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="forgot login-footer">
                         <span>Если не зарегистрированы, можно
                            <a href="javascript: showRegisterForm();">Создать аккаунт</a>
                         </span>
                                        </div>
                                        <div class="forgot register-footer" style="display:none">
                                            <span>Уже есть аккаунт?</span>
                                            <a href="javascript: showLoginForm();">Авторизируйтесь</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <ul>
                            <li @if(\Illuminate\Http\Request::capture()->url() == 'http://www.sport') class="active" @endif>
                                <a href="{{route('main')}}">Главная</a></li>
{{--                            <li @if(\Illuminate\Http\Request::capture()->url() == 'http://www.sport/staff') class="active" @endif>--}}
{{--                                <a href="{{route('staff')}}">Тренера</a></li>--}}
                            <li @if(\Illuminate\Http\Request::capture()->url() == 'http://www.sport/pricing') class="active" @endif>
                                <a href="{{route('pricing')}}">Цены</a></li>
                            <li @if(\Illuminate\Http\Request::capture()->url() == 'http://www.sport/gyms') class="active" @endif>
                                <a href="{{route('gyms')}}">Залы</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/images/img_bg_2.jpg);"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Первая сеть спортивных залов Украины</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

</div>
<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(/images/img_bg_1.jpg);" role="contentinfo">
    <div class="overlay"></div>
    <div class="container">

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                    <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
                        Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                </p>
                <p>
                <ul class="fh5co-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                </p>
            </div>
        </div>

    </div>
</footer>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/main.js"></script>
<script>
    function openLoginModal()
    {
        $('#loginModal').modal().show()
    }

    function openRegisterModal()
    {
        $('#registerModal').modal().show()
    }
</script>
</body>
</html>

