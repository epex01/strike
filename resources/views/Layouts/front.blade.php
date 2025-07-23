<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
     <meta name="description" content="Trade Cryptocurrencies, Stocks, Forex and
Options using our 100+ most widely-used technical indicators, widgets and signals.">
    <meta name="keywords" content="crypto, stock, indices, forex, options, Stockhut Commerce">
    <meta name="author" content="Stockhut Commerce">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5">
    <!-- Site Properties -->
    <title>@yield('title') | Stockhut Commerce</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('temp/front/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('temp/front/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('temp/front/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('temp/front/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('temp/front/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('temp/front/fonts/inter-v2-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('temp/front/fonts/inter-v2-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('temp/front/fonts/inter-v2-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{asset('newstockhutcommercefavicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('temp/front/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('temp/front/css/style.css')}}">
    <!-- add your custom CSS -->
<style>
body {
 font-family: sans-serif;
}

/* Add WA floating button CSS */
.floating {
 position: fixed;
 width: 60px;
 height: 60px;
 bottom: 40px;
 right: 40px;
 background-color: #25d366;
 color: #fff;
 border-radius: 50px;
 text-align: center;
 font-size: 30px;
 box-shadow: 2px 2px 3px #999;
 z-index: 100;
}

.fab-icon {
 margin-top: 16px;
}
</style>
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
        
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="{{url('/')}}">
                                <img src="{{asset('newstockhutcommerce.png')}}" data-src="{{asset('newstockhutcommerce.png')}}" alt="logo" width="160" height="64" data-uk-img>
                            </a>
                            <!-- logo end -->
                            <!-- navigation begin -->
                             <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/markets')}}">Trade Markets</a></li> 
                            <li><a href="{{url('/contact')}}">Support</a></li>
                            <li><a href="{{url('/terms')}}">Agreement</a></li>
                        </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="https://stockhutcommerceupg.com/register" class="uk-button uk-button-primary uk-border-rounded">Create Account</a>
                            <a href="https://stockhutcommerceupg.com/login" class="uk-button uk-button-text"><i class="fas fa-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>
    @yield('content')
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <i class="fas fa-history in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">Active Account Managers</h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-center@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-trophy in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">15+ Global Recognitions</h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-right@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-phone-alt in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">24/7 Customer Support</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-background-secondary uk-light">
            <div class="uk-container uk-text-small">
                <div class="uk-child-width-1-2@m" data-uk-grid>
                    <div class="in-footer-logo">
                        <img src="{{asset('temp/front/images/in-lazy.gif')}}" data-src="{{asset('temp/front/img/in-logo-1.svg')}}" alt="logo" width="127" height="27" data-uk-img>
                    </div>
                    <div class="uk-flex uk-flex-right@m">
                        <div class="in-footer-socials">
                            <a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.telegram.com"><i class="fab fa-telegram-plane"></i></a>
                        </div>
                        <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Company News</a>
                        <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Partnership</a>
                    </div>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                    <div>
                        <h5>Markets</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="http://stockhutcommerceupg.com/register">Share CFDs</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Forex</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Indices</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Cryptocurrencies</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Trading Platforms</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="http://stockhutcommerceupg.com/register">Web platform</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Trading apps</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">MetaTrader 5</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Compare features</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Account Types</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="http://stockhutcommerceupg.com/register">Demo account</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Standard account</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">ECN account</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Family acount</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Learn to Trade</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="http://stockhutcommerceupg.com/register">News and trade ideas</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Trading strategy</a></li>
                            <li><a href="http://stockhutcommerceupg.com/register">Forex trading course</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-margin-large-top">
                    <div class="uk-width-1-1">
                        <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright © 2023 Stockhut Commerce Inc. All Rights Reserved.</span></p>
                        <p class="in-trading-risk">You can start your online trading today with Stockhut Commerce. Please feel free to browse our economic calendar. It contains important information on EURUSD, BTCUSD, GBPUSD, USDCHF, BTCETH, AUDUSD, USDCAD, NZDUSD and other currency pairs and trading instruments and provides up-to-date market news and market research. Stockhut Commerce offers a deposit forex bonus of up to 50%*. You can trade micro-lots (0.01 lots) with Stockhut Commerce.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        
        <!-- totop end -->
        <!-- render the button and direct it to wa.me -->
<!--<a href="https://wa.me/19044288284" class="floating" target="_blank">-->
<!--<i class="fab fa-whatsapp fab-icon"></i>-->
<!--</a>-->
    </footer>
    <!-- Javascript -->
    <script src="{{asset('temp/front/js/uikit.min.js')}}"></script>
    <script src="{{asset('temp/front/js/blockit.min.js')}}"></script>
    <script src="{{asset('temp/front/js/config-theme.js')}}"></script>
    @yield('script')
    
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'd83a61465e37b8c3025ff2475d88cd98f9536997';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

    
</body>
</html>