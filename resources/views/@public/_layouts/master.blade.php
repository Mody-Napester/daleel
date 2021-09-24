<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <link rel="profile" href="https://gmpg.org/xfn/11">--}}
    <meta name="author" content=""/>

    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{ url('assets/wp-content/themes/execution/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/wp-content/themes/execution/assets/css/style-liberty.css') }}">

    <title>@yield('page_title')</title>

    {{--    <link rel='dns-prefetch' href='http://s.w.org/' />--}}
    {{--    <link rel="alternate" type="application/rss+xml" title="Execution - WordPress Theme &raquo; Feed" href="feed/index.html" />--}}
    {{--    <link rel="alternate" type="application/rss+xml" title="Execution - WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />--}}
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/wp.w3layouts.com\/execution\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6.4"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='{{ url('assets/wp-includes/css/dist/block-library/style.min77e1.css') }}' media='all'/>
    <link rel='stylesheet' href='{{ url('assets/wp-content/themes/execution/style8a54.css') }}' media='all'/>
    <link rel='stylesheet' href='{{ url('assets/wp-content/plugins/recent-posts-widget-with-thumbnails/public42a0.css') }}' media='all'/>
    <link rel='stylesheet' href='{{ url('assets/wp-content/plugins/tlp-food-menu/assets/css/tlpfoodmenucb77.css') }}' media='all'/>
{{--    <link rel="https://api.w.org/" href="{{ url('assets/wp-json/index.html') }}"/>--}}
    {{--    <link rel="alternate" type="application/json" href="{{ url('assets/wp-json/wp/v2/pages/7.json') }}"/>--}}

    <link rel='stylesheet' href='{{ url('assets/css/alerts.css') }}' media='all'/>
    <link rel='stylesheet' href='{{ url('assets/css/loader.css') }}' media='all'/>

    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>

    <style>
        .request-quote-float{
            position: fixed;
            bottom: 5px;
            left: 5px;
            padding: 10px;
            z-index: 999;
            width: 150px;
        }
        .request-quote-float img{
            width: 100%;
        }
        span.w3l-icon.-back span.fa {
            position: static;
            color: #e6ebff;
        }

        #w3lDemoBar.w3l-demo-bar {
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            padding: 40px 5px 10px;
            padding-top: 70px;
            background: #0D1326;
            border-top-left-radius: 9px;
            border-bottom-left-radius: 9px;
        }

        #w3lDemoBar.w3l-demo-bar a {
            display: block;
            color: #e6ebff;
            text-decoration: none;
            line-height: 24px;
            opacity: .6;
            margin-bottom: 20px;
            text-align: center;
        }

        #w3lDemoBar.w3l-demo-bar span.w3l-icon {
            display: block;
        }

        #w3lDemoBar.w3l-demo-bar a:hover {
            opacity: 1;
        }

        #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
            color: #e6ebff;
        }

        #w3lDemoBar.w3l-demo-bar .responsive-icons {
            margin-top: 30px;
            border-top: 1px solid #41414d;
            padding-top: 40px;
        }

        #w3lDemoBar.w3l-demo-bar .demo-btns {
            border-top: 1px solid #41414d;
            padding-top: 30px;
        }

        #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
            font-size: 26px;
        }

        #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
            margin-bottom: 0;
        }

        .toggle-right-sidebar span {
            background: #0D1326;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: #e6ebff;
            border-radius: 50px;
            font-size: 26px;
            cursor: pointer;
            opacity: .5;
        }

        .pull-right-demo-bar {
            float: right;
            position: fixed;
            right: 0px;
            top: 150px;
            width: 90px;
            z-index: 99999;
            text-align: center;
        }

        /* ============================================================
                                            RIGHT SIDEBAR SECTION
                                            ============================================================ */

        #right-sidebar {
            width: 90px;
            position: fixed;
            z-index: 1000;
            right: 0px;
            top: 0;
            margin-top: 140px;
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            overflow-y: auto;
        }


        /* ============================================================
                                            RIGHT SIDEBAR TOGGLE SECTION
                                            ============================================================ */

        .hide-right-bar-notifications {
            margin-right: -300px !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }


        @media (max-width: 992px) {
            #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                display: none;

            }
        }

        @media (max-width: 767px) {
            #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                display: none;

            }
        }

        @media (max-width: 568px) {
            #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                display: none;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 0px;
                border-top: none;
                padding-top: 0px;
            }

            #right-sidebar,
            .pull-right-demo-bar {
                width: 90px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                margin-bottom: 0;
            }
        }
    </style>

    @if(lang() == 'ar')
        <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700,800&display=swap" rel="stylesheet">

        <style>
            body,.nav-tabs li a,body h1,body h2,body h3,body h4,body h5,body h6{
                font-family: 'Tajawal', sans-serif;
            }
            .navbar-collapse{
                direction: rtl;
            }
            .banner-19 .main-content, .service-details, .dsk-txt-rt{
                text-align: right;
            }
            .align-self, .dsk-rt {
                direction: rtl;
                text-align: right;
            }
            .mr-4, .mx-4{
                margin-left: 1.5rem !important;
                margin-right: 0 !important;
            }
        </style>
    @endif

    <link href="{{ url('assets/vendor/select2/select2.css') }}" rel="stylesheet" />
</head>

<body class="home page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php page">

<!-- Alert -->
<div class="float-alert">
    @if(session('message'))
        <div class="row alert-div alert alert-{{ session('message')['type'] }} clearfix">
            <div class="col-md-10 p-0 m-0">{{ session('message')['text'] }}</div>
            <div class="col-md-2 p-0 m-0 text-right">
                <i class="alert-close fa fa-fw fa-close"></i>
            </div>
        </div>
    @endif
</div>

{{--<div class="pull-right-demo-bar toggle-right-sidebar">--}}
{{--    <span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>--}}
{{--</div>--}}

{{--<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">--}}
{{--    <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">--}}

{{--        <div id="w3lDemoBar" class="w3l-demo-bar">--}}
{{--            <div class="demo-btns">--}}
{{--                <a href=""><span class="w3l-text">Request</span></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003" style="overflow: hidden; outline: none;">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!--header-->
<header id="site-header" class="main-header fixed-top">
    <div class="container HeaderLogoEd">
        <nav class="navbar navbar-expand-lg stroke">

            <h1>
                <a class="navbar-brand d-flex align-items-center" href="{{ route('public.home.index') }}">
                    <img style="width: 170px" src="{{ url('assets/logo.png') }}" alt="">
                </a>
            </h1>

            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul id="primary-menu" class="navbar-nav ml-lg-auto">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item current_page_item nav-item @if(url()->current() == route('public.home.index')) active @endif">
                        <a href="{{ route('public.home.index') }}" class="nav-link @if(url()->current() == route('public.home.index')) active @endif">{{ trans('navbar.Home') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.about.index')) active @endif">
                        <a href="{{ route('public.about.index') }}" class="nav-link @if(url()->current() == route('public.about.index')) active @endif">{{ trans('navbar.About') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.service.index')) active @endif">
                        <a href="{{ route('public.service.index') }}" class="nav-link @if(url()->current() == route('public.service.index')) active @endif">{{ trans('navbar.Services') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.resource.index')) active @endif">
                        <a href="{{ route('public.resource.index') }}" class="nav-link @if(url()->current() == route('public.resource.index')) active @endif">{{ trans('navbar.Resources') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.client.index')) active @endif">
                        <a href="{{ route('public.client.index') }}" class="nav-link @if(url()->current() == route('public.client.index')) active @endif">{{ trans('navbar.Clients') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.quotation.index')) active @endif">
                        <a href="{{ route('public.quotation.index') }}" class="nav-link @if(url()->current() == route('public.quotation.index')) active @endif">{{ trans('navbar.Quotation') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.career.index')) active @endif">
                        <a href="{{ route('public.career.index') }}" class="nav-link @if(url()->current() == route('public.career.index')) active @endif">{{ trans('navbar.Careers') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item @if(url()->current() == route('public.contact.index')) active @endif">
                        <a href="{{ route('public.contact.index') }}" class="nav-link @if(url()->current() == route('public.contact.index')) active @endif">{{ trans('navbar.Contact') }}</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbar-dropdown-menu-link-26" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-globe"></i></a>
                        <div class="sub-menu dropdown-menu" aria-labelledby="navbar-dropdown-menu-link-26">
                            @foreach(langs() as $lang)
                                <a href="{{ route('language', $lang['short_name']) }}" class="dropdown-item">{{ $lang['name'] }}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
{{--                <ul class="navbar-nav">--}}
{{--                    <!-- search right -->--}}
{{--                    <div class="search-right ml-lg-3 HeaderSearch">--}}
{{--                        <form action="https://wp.w3layouts.com/execution/" method="GET"--}}
{{--                              class="search-box position-relative">--}}
{{--                            <div class="input-search">--}}
{{--                                <input type="search" name="s" placeholder="Enter Keyword"--}}
{{--                                       required="required" autofocus="" class="search-popup">--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!--//search-right-->--}}
{{--                </ul>--}}

            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position w3DarkLight">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->

        </nav>
    </div>
</header>


@yield('page_content')


<!-- footer -->
<footer class="w3l-footer-22 py-5">

    <div class="container py-md-5 py-4 ExecutionFooter">
        <div class="row sub-columns dsk-rt">
            <div class="col-lg-4 col-sm-6 sub-one-left">
                <h6>{{ trans('master.About') }}</h6>
                <p>{{ trans('master.About_Text_Footer') }}</p>

                <div class="columns-2 FooterSocial">
                    <ul class="social">

                        <li>
                            <a href="" title="facebook"><span class="fab fa-facebook-f" aria-hidden="true"></span></a>
                        </li>

                        <li>
                            <a href="" title="linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                        </li>

                        <li>
                            <a href="" title="twitter"><span class="fab fa-twitter" aria-hidden="true"></span></a>
                        </li>

                        <li>
                            <a href="" title="google"><span class="fab fa-google-plus-g" aria-hidden="true"></span></a>
                        </li>

                        <li>
                            <a href="" title="instagram"><span class="fab fa-instagram" aria-hidden="true"></span></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">

                <div id="categories-4" class="widget_categories">
                    <h6>{{ trans('master.Site_Links') }}</h6>
                    <ul>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.home.index') }}">{{ trans('navbar.Home') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.about.index') }}">{{ trans('navbar.About') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.service.index') }}">{{ trans('navbar.Services') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.resource.index') }}">{{ trans('navbar.Resources') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.client.index') }}">{{ trans('navbar.Clients') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.quotation.index') }}">{{ trans('navbar.Quotation') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.career.index') }}">{{ trans('navbar.Careers') }}</a>
                        </li>
                        <li class="cat-item cat-item-2">
                            <a href="{{ route('public.contact.index') }}">{{ trans('navbar.Contact') }}</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">

                <div id="meta-4" class="widget_meta">
                    <h6>{{ trans('master.Languages') }}</h6>
                    <ul>
                        @foreach(langs() as $lang)
                            <li><a href="{{ route('language', $lang['short_name']) }}">{{ $lang['name'] }}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

        <div class="sub-contact mt-5 pt-lg-4 FooterContact">

            <div class="row justify-content-center">

                <div class="col-md-4 footer-contact d-flex align-items-center">
                    <span class="fas fa-envelope-open" aria-hidden="true"></span>
                    <div>
                        <a href="mailto:{{ trans('master.email_email.com') }}">{{ trans('master.email_email.com') }}</a>
                        <p>{{ trans('master.Drop_Us_a_Line') }}</p>
                    </div>
                </div>

                <div class="col-md-4 footer-contact d-flex align-items-center active">
                    <span class="fas fa-phone-alt" aria-hidden="true"></span>
                    <div>
                        <a href="tel:{{ trans('master.phone_number_010') }}">{{ trans('master.phone_number_010') }}</a>
                        <p>{{ trans('master.Call_Us_Now') }}</p>
                    </div>
                </div>

                <div class="col-md-4 footer-contact d-flex align-items-center">
                    <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                    <div>
                        <h5>{{ trans('master.address_text_1') }}</h5>
                        <p>{{ trans('master.address_text_2') }}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- copyright -->
    <div class="copyright-footer text-center">
        <div class="container">
            <div class="columns">
                <p class="CopyRights">&copy; {{ date('Y') }} {{ trans('master.All_Rights_Reserved') }}</p>
            </div>
        </div>
    </div>
    <!-- //copyright -->

</footer>
<!-- //footer -->


{{--<div class="request-quote-float">--}}
{{--    <a href="{{ route('public.quotation.index') }}">--}}
{{--        @if(lang() == 'ar')--}}
{{--            <img src="{{ url('assets/images/get_quote_free_ar.png') }}" alt="">--}}
{{--        @else--}}
{{--            <img src="{{ url('assets/images/get_quote_free.png') }}" alt="">--}}
{{--        @endif--}}
{{--    </a>--}}
{{--</div>--}}


<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- //common jquery plugin -->

<!-- demo-bar js -->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ url('assets/wp-content/themes/execution/assets/js/demobar-script.js') }}"></script>
<!-- demo-bar js -->

<!-- owl carousel -->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/owl.carousel.js') }}"></script>
<!-- script for tesimonials carousel slider -->
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            loop: true,
            nav: false,
            margin: 50,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                },
                991: {
                    items: 2,
                    margin: 30,
                    nav: false
                },
                1080: {
                    items: 3,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- owl carousel -->

<!-- magnific popup -->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<!-- //magnific popup -->

<!-- theme switch js (light and dark)-->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/theme-change.js') }}"></script>
<script>
    function autoType(elementClass, typingSpeed) {
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function () {
            thhis.css("opacity", 1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for (var i = 0; i < amntOfChars; i++) {
                (function (i, char) {
                    setTimeout(function () {
                        newString += char;
                        thhis.text(newString);
                    }, i * typingSpeed);
                })(i + 1, text[i]);
            }
        }, 1500);
    }

    $(document).ready(function () {
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js", 200);
    });
</script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>

<script src="{{ url('assets/vendor/select2/select2.full.js') }}"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="{{ url('assets/wp-content/themes/execution/assets/js/bootstrap.min.js') }}"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->


<script src='{{ url('assets/wp-content/themes/execution/js/navigation8a54.js?ver=1.0.0') }}' id='w3layouts-navigation-js'></script>
<script src='{{ url('assets/wp-includes/js/wp-embed.min77e1.js?ver=5.6.4') }}' id='wp-embed-js'></script>

<script src='{{ url('assets/js/alerts.js') }}'></script>
<script src='{{ url('assets/js/loader.js') }}'></script>

<script type="text/javascript">
    // Alerts
    @if($errors->all())
        @foreach($errors->all() as $error)
            addAlert('danger', '{{$error}}', 0);
        @endforeach
    @endif
</script>

</body>
</html>
