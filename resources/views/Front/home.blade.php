@extends('Layouts.home')
@section('title')
Home
@endsection
@section('slider')
 <div class="container app-py-3">
                <div class="container row app-py-3">
                    <div class="col l6 s12"><img src="{{ asset('thisfront/UltraLanding.png') }}"
                            class="responsive-img">
                    </div>
                    <div class="col l6 s12 app-mobile-center"><br>
                        <h1 class="white-text">THE WORLD'S LEADING TRADING PLATFORM</h1><br>
                        <p class="f-24">1000+ Forex pairs &amp; CFDs on Shares, Indices, Energies, Metals &amp; ETFs*
                        </p><br><a class="btn btn-large" href="{{ route('register') }}"
                            style="margin-right: 5px;">CREATE
                            ACCOUNT</a><a class="btn btn-large btn-white-trans" href="{{ route('login') }}">MY
                            ACCOUNT</a>
                    </div>
                </div>
            </div>
@endsection
@section('content')
  <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div id="tradingview_3e2"></div>
            <div class="tradingview-widget-copyright"></div>
            <div>
                <div style="width: 100%; height: 46px;">
                    <style>
                        .tradingview-widget-copyright {
                            font-size: 13px !important;
                            line-height: 32px !important;
                            text-align: center !important;
                            vertical-align: middle !important;
                            /* @mixin sf-pro-display-font; */
                            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                            color: #B2B5BE !important;
                        }

                        .tradingview-widget-copyright .blue-text {
                            color: #2962FF !important;
                        }

                        .tradingview-widget-copyright a {
                            text-decoration: none !important;
                            color: #B2B5BE !important;
                        }

                        .tradingview-widget-copyright a:visited {
                            color: #B2B5BE !important;
                        }

                        .tradingview-widget-copyright a:hover .blue-text {
                            color: #1E53E5 !important;
                        }

                        .tradingview-widget-copyright a:active .blue-text {
                            color: #1848CC !important;
                        }

                        .tradingview-widget-copyright a:visited .blue-text {
                            color: #2962FF !important;
                        }
                    </style><iframe scrolling="no" allowtransparency="true" frameborder="0"
                        src="https://www.tradingview-widget.com/embed-widget/ticker-tape/?locale=en#%7B%22symbols%22%3A%5B%7B%22description%22%3A%22%22%2C%22proName%22%3A%22BINANCE%3ABTCUSDT%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22BINANCE%3AETHUSDT%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22BINANCE%3AMATICUSDT%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22BINANCE%3ASOLUSDT%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22BINANCE%3AMANAUSDT%22%7D%2C%7B%22description%22%3A%22%22%2C%22proName%22%3A%22FX%3AEURUSD%22%7D%5D%2C%22showSymbolLogo%22%3Atrue%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A46%2C%22utm_source%22%3A%22pipsearn.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22ticker-tape%22%2C%22page-uri%22%3A%22pipsearn.com%2F%22%7D"
                        title="ticker tape TradingView widget" lang="en"
                        style="user-select: none; box-sizing: border-box; display: block; height: 46px; width: 100%;"></iframe>
                </div>
            </div>
        </div>
        <section class="bg bg-secondary app-py-3"><br>
            <h2 class="center">Why {{ env('APP_NAME') }} ?</h2>
            <div class="container app-py-1">
                <div class="row">
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span class="material-icons notranslate ut-icon">group_add</span>
                                <h3 style="display: inline;">STANDARD SECURITY</h3>
                            </div>
                            <p class="app-mb-2">Protected by one of the most professional and trusted DDoS Protection
                                providers.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span
                                    class="material-icons notranslate ut-icon">insert_chart</span>
                                <h3 style="display: inline;">EASY WITHDRAWAL</h3>
                            </div>
                            <p class="app-mb-2">The Withdraw system operates in an instant using a wide range of
                                available payment method.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span
                                    class="material-icons notranslate ut-icon">calendar_today</span>
                                <h3 style="display: inline;">PAYMENTS METHOD</h3>
                            </div>
                            <p class="app-mb-2">A lot of payment methods are available to deposit and withdraw your
                                profits.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span class="material-icons notranslate ut-icon">group_add</span>
                                <h3 style="display: inline;">PRIVACY &amp; SECURITY</h3>
                            </div>
                            <p class="app-mb-2"> {{ env('APP_NAME') }} will never share your private data/information
                                without your
                                permission.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span
                                    class="material-icons notranslate ut-icon">edit_calendar</span>
                                <h3 style="display: inline;">RESPONSIVE DESIGN</h3>
                            </div>
                            <p class="app-mb-2">Transact Crypto, Forex, ETF's and others anywhere at anytime with our
                                mobile responsive platform.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;">
                        <div class="ultra-card">
                            <div class="ultra-title"><span class="material-icons notranslate ut-icon">group</span>
                                <h3 style="display: inline;">FRIENDLY INTERFACE</h3>
                            </div>
                            <p class="app-mb-2">Our platform is customized to make it fit better to your needs and
                                exploration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg bg-secondary app-py-3 app-ultra-4"><br>
            <h2 class="center wow fadeInUp slow" style="visibility: visible;">Award-Winning Conditions</h2><br>
            <p class="container-50 center  wow fadeInUp slow" style="margin: auto; visibility: visible;">Combining
                deep liquidity, cutting edge execution and reduced spreads, {{ env('APP_NAME') }} delivers
                industry-leading trading
                conditions, recognized by renowned international awarding bodies.</p><br>
            <div class="container app-py-1">
                <div class="container app-mobile-center">
                    <div class="row ">
                        <div class="col l1 s12 wow fadeInUp slow" style="visibility: visible;"><br><br><span
                                class="material-icons notranslate" style="font-size: 40px;">hub</span></div>
                        <div class="app-my-2 col l5 s12 wow fadeInUp slow" style="visibility: visible;">
                            <h3 class="h4">MULTILINGUAL SUPPORT</h3>
                            <p class="app-mb-2">Enjoy dedicated multilingual support from experienced Affiliate
                                Managers.</p>
                        </div>
                        <div class="col l1 s12 wow fadeInUp slow" style="visibility: visible;"><br><br><span
                                class="material-icons notranslate" style="font-size: 40px;">hub</span></div>
                        <div class="app-my-2 col l5 s12 wow fadeInUp slow" style="visibility: visible;">
                            <h3 class="h4">CUSTOMISED COMMISSION PLANS</h3>
                            <p class="app-mb-2">We offer you the option of having a customized commission plan, giving
                                you the power to build a plan to your preference!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col l1 s12 wow fadeInUp slow" style="visibility: visible;"><br><br><span
                                class="material-icons notranslate" style="font-size: 40px;">hub</span></div>
                        <div class="app-my-2 col l5 s12 wow fadeInUp slow" style="visibility: visible;">
                            <h3 class="h4">DEDICATED CALL CENTERS</h3>
                            <p class="app-mb-2">Benefit from our customised call centers. We align our efforts to your
                                strategy to increase your conversions. No conflict of interest between Partners and Call
                                Centers.</p>
                        </div>
                        <div class="col l1 s12 wow fadeInUp slow" style="visibility: visible;"><br><br><span
                                class="material-icons notranslate" style="font-size: 40px;">hub</span></div>
                        <div class="app-my-2 col l5 s12 wow fadeInUp slow" style="visibility: visible;">
                            <h3 class="h4">AWARDS &amp; RECOGNITIONS</h3>
                            <p class="app-mb-2">We are extremely proud to have been recognised time and time again, for
                                the quality and innovation of our trading products and services, by some of the most
                                prestigious awarding bodies in the industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg bg-secondary app-py-3"><br>
            <h2 class="center">Trade Anytime, Anywhere</h2>
            <div class="app-py-1">
                <div class="row">
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;">
                        <div class="ultra-card">
                            <h3 class="ultra-title">High Liquidity</h3>
                            <p class="app-mb-2">With a built in Artificial Intelligence market maker that meets the
                                high standards set by Wall Street, our model analysis based on over 250 market
                                parameters and high liquidity.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;">
                        <div class="ultra-card">
                            <h3 class="ultra-title">Secure And Stable</h3>
                            <p class="app-mb-2">We conduct the multinodular structure which meets the requirements set
                                by the IT surveillance logical structure from the Financial Industry, ensuring steady
                                operations of our systems.</p>
                        </div>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">
                            <h3 class="ultra-title">Multiples Tokens Supported</h3>
                            <p class="app-mb-2">Constantly introducing and listing high quality digital currencies from
                                all over the world, providing users with various types of transactional services in most
                                digital currencies.</p>
                        </div>
                    </div>
                </div><br>
            </div>
        </section>
        <section class=" center app-py-3">
            <div class="container">
                <div class="row">
                    <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;"><img
                            src="{{ asset('thisfront/GMServiceVector3.png') }}" class="responsive-img">
                        <h3 class="h4">Daily Mining Outputs</h3>
                        <p class="app-mb-2">Returns made from either trading or mining transactions will be added to
                            your account daily and automatically.</p>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp" style="visibility: visible;"><img
                            src="{{ asset('thisfront/GMServiceVector1.png') }}" class="responsive-img">
                        <h3 class="h4">State of the Art Mining</h3>
                        <p class="app-mb-2">Productivity is a top notch quality for any investment. So, for every trade
                            action or blockchain mining algorithm that we offer, we’re providing some of the highest
                            performing systems and softwares that exist</p>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;"><img
                            src="{{ asset('thisfront/GMServiceVector2.png') }}" class="responsive-img">
                        <h3 class="h4">Diverse Mining Portfolio</h3>
                        <p class="app-mb-2">Choose from a wide range of target assets for trading and over 10 major
                            mining algorithms that cut across 4 mineable cryptocurrencies</p>
                    </div>
                </div>
                <div class="row">
                    <div class="app-my-2 col l4 s12 wow fadeInUp" style="visibility: visible;"><img
                            src="{{ asset('thisfront/GMServiceVector45.png') }}" class="responsive-img">
                        <h3 class="h4">Hardware is already running</h3>
                        <p class="app-mb-2">Don’t wrestle with rig assembly and hot, noisy miners at home. We have the
                            fastest bitcoin mining hardware running for you already</p>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;"><img
                            src="{{ asset('thisfront/GMServiceVector55.png') }}" class="responsive-img">
                        <h3 class="h4">Intuitive Dashboard</h3>
                        <p class="app-mb-2">All the financial instruments data and charts that you need, when you need
                            them</p>
                    </div>
                    <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;"><img
                            src="{{ asset('thisfront/GMServiceVector65.png') }}" class="responsive-img">
                        <h3 class="h4">Secure and Private</h3>
                        <p class="app-mb-2">We value the privacy of our users, so we strive to keep collected user data
                            to a minimum level.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg bg-secondary app-ultra-2 app-py-3"><br><br>
            <h2 class=" center">Worldwide Support</h2><br><br><br>
            <div class="row ">
                <center>
                    <div class="wow fadeInUp slow col l3 s6 app-py-1" style="visibility: visible;">
                        <h1 class="alt-color">$<span id="volume">232</span>M+</h1>
                        <p>VOLUME PER MONTH</p><br>
                    </div>
                    <div class="wow fadeInUp slow col l3 s6 app-py-1" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s;">
                        <h1 class="alt-color"><span id="users">932</span>k+</h1>
                        <p>REGISTERED ACCOUNTS</p><br><br>
                    </div>
                    <div class="wow fadeInUp slow col l3 s6 app-py-1" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s;">
                        <h1 class="alt-color"><span id="trades">702</span>M+</h1>
                        <p>TRADES PER YEAR</p><br><br>
                    </div>
                    <div class="wow fadeInUp slow col l3 s6 app-py-1" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s;">
                        <h1 class="alt-color"><span id="assets">200</span>+</h1>
                        <p>TRADING ASSETS</p><br><br>
                    </div>
                </center>
            </div>
        </section>
        <div class=" app-py-3 center app-image-back-10">
            <h1 class="wow fadeInUp slow" style="visibility: visible;">EXPLORE ENIGMA</h1>
            <div class="container">
                <p class="wow fadeInUp slow" style="visibility: visible;">The evolution of one of the world’s largest
                    cryptocurrency mining facilities</p>
                <p class="wow fadeInUp slow" style="visibility: visible;">Enigma is one of the largest cryptocurrency
                    mining facilities in the world. First built to exclusively mine Ethereum, the facility is being
                    continuously upgraded for mining state-of-the-art Blockchain technology. Enigma’s computational
                    performance is achieved with specifically designed mining rigs that efficiently mine hashing
                    algorithms for various cryptocurrencies such as Zcash, Dash, Monero and others. The Enigma facility
                    is powered by geothermal energy, and resides in the capital of Iceland.</p>
            </div>
            <section class="container">
                <div class="container app-py-3">
                    <div class="card-panel" style="padding: 0px;">
                        <div class="app-flex-center">
                            <div class="carousel top carousel-slider enigma scrolling" id="engima"
                                style="height: 259.273px;">
                                <div class="carousel-item"
                                    style="z-index: -1; opacity: 1; visibility: visible; transform: translateX(0px) translateX(920.594px) translateZ(0px);">
                                    <div class="row">
                                        <div class="col l6 s12"><img src="{{ asset('thisfront/GMEnigma1.webp') }}"
                                                style="max-width: 100%;"></div>
                                        <div class="col l6 s12 center"><br>
                                            <h2><span style="color: rgb(187, 191, 194);">01</span> <br>Energy (Iceland
                                                + Geothermal Energy)</h2><br>
                                            <p class="container">The results of cryptocurrency mining highly depend on
                                                infrastructure efficiency and electricity rates, which make renewable
                                                energy sources - such as geothermal and hydropower - the go-to solution
                                                for a cost-effective and clean mining operation. Today, over 80% of
                                                Iceland’s energy is provided by renewable sources.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item"
                                    style="transform: translateX(0px) translateX(-1581.41px) translateZ(0px); z-index: -2; opacity: 1; visibility: visible;">
                                    <div class="row">
                                        <div class="col l6 s12"><img src="{{ asset('thisfront/GMEnigma2.webp') }}"
                                                style="max-width: 100%;"></div>
                                        <div class="col l6 s12 center"><br>
                                            <h2><span style="color: rgb(187, 191, 194);">02</span><br>Mining Hardware
                                            </h2><br>
                                            <p class="container">Enigma is powered by a setup of optimized GPUs
                                                (graphic processing units). These GPUs are placed in ‘Rigs’ which are
                                                specifically designed to house as much hashing power as efficiently as
                                                possible. The miners’ software is configured for maximum performance by
                                                mining Kernels (hardware operating systems) like ‘
                                                {{ env('APP_NAME') }} OS’ that
                                                we’ve developed in-house. We then manage it with our Hive interface.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item"
                                    style="transform: translateX(0px) translateX(-747.406px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                                    <div class="row">
                                        <div class="col l6 s12"><img src="{{ asset('thisfront/GMEnigma3.webp') }}"
                                                style="max-width: 100%;"></div>
                                        <div class="col l6 s12 center"><br>
                                            <h2><span style="color: rgb(187, 191, 194);">03</span> <br>Mining Software
                                                / Hive</h2><br>
                                            <p class="container">Hive is our software interface which enables the
                                                efficient setup, configuration and management of all our mining
                                                facilities. Keeping track of all devices is key for the success of any
                                                mining operation. Besides the total hashrate, power consumption and
                                                facility temperatures there are a myriad of details and settings like
                                                firmware, mining pools and safety protections that need to be checked
                                                and managed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item active"
                                    style="transform: translateX(0px) translateX(86.5942px) translateX(0px) translateZ(0px); z-index: 0; opacity: 1; visibility: visible;">
                                    <div class="row">
                                        <div class="col l6 s12"><img src="{{ asset('thisfront/GMEnigma4.webp') }}"
                                                style="max-width: 100%;"></div>
                                        <div class="col l6 s12 center"><br>
                                            <h2><span style="color: rgb(187, 191, 194);">04</span> <br>Minable
                                                Cryptocurrencies (Algorithms)</h2><br>
                                            <p class="container">Enigma is validating the blockchain networks of many
                                                of the majorly distributed cryptocurrencies such as Ethereum, Litecoin,
                                                Zcash, Dash and others. The most popular and widespread cryptocurrency,
                                                Bitcoin, is being mined in facilities with a different hardware setup
                                                (such as ASIC miners).</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="indicators">
                                    <li class="indicator-item"></li>
                                    <li class="indicator-item"></li>
                                    <li class="indicator-item"></li>
                                    <li class="indicator-item active"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="bg app-py-3">
            <center>
                <h2>Unlimited Market Access</h2>
                <p>You can buy, use, monitor the market prices and news</p>
                <div class="row">
                    <div class="col l4 s12">
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div id="tradingview_3e2ss"></div>
                            <div class="tradingview-widget-copyright"></div>
                            <div>
                                <div style="width: 350px; height: 400px;">
                                    <style>
                                        .tradingview-widget-copyright {
                                            font-size: 13px !important;
                                            line-height: 32px !important;
                                            text-align: center !important;
                                            vertical-align: middle !important;
                                            /* @mixin sf-pro-display-font; */
                                            font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                            color: #B2B5BE !important;
                                        }

                                        .tradingview-widget-copyright .blue-text {
                                            color: #2962FF !important;
                                        }

                                        .tradingview-widget-copyright a {
                                            text-decoration: none !important;
                                            color: #B2B5BE !important;
                                        }

                                        .tradingview-widget-copyright a:visited {
                                            color: #B2B5BE !important;
                                        }

                                        .tradingview-widget-copyright a:hover .blue-text {
                                            color: #1E53E5 !important;
                                        }

                                        .tradingview-widget-copyright a:active .blue-text {
                                            color: #1848CC !important;
                                        }

                                        .tradingview-widget-copyright a:visited .blue-text {
                                            color: #2962FF !important;
                                        }
                                    </style><iframe scrolling="no" allowtransparency="true" frameborder="0"
                                        src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A350%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22pipsearn.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22pipsearn.com%2F%22%7D"
                                        title="forex cross-rates TradingView widget" lang="en"
                                        style="user-select: none; box-sizing: border-box; display: block; height: 100%; width: 100%;"></iframe>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <div class="col l8 s12">
                        <div>
                            <div><iframe
                                    src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=6&amp;pref_coin_id=1505&amp;graph=yes"
                                    width="100%" border="0"></iframe></div>
                        </div>
                    </div>
                </div>
            </center>
        </section>
        <section class="bg bg-secondary app-py-3 center app-ultra-5">
            <div class="app-py-3">
                <h2>Responsive Platform</h2><br><br>
                <div class="row">
                    <div class="col l3 s12  wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">ANDROID</div><br>
                    </div>
                    <div class="col l3 s12  wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">IOS</div><br>
                    </div>
                    <div class="col l3 s12  wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">WEB</div><br>
                    </div>
                    <div class="col l3 s12  wow fadeInUp slow" style="visibility: visible;">
                        <div class="ultra-card">WINDOWS</div><br>
                    </div>
                </div>
            </div>
        </section>
@endsection