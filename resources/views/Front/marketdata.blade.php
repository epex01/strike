@extends('Layouts.front')

@section('title')
    Market Data
@endsection

@section('content')
 <!-- breadcrumb content end -->
     <main>
                <!-- section content begin -->
        <div class="uk-section uk-section-muted in-padding-large-vertical@s in-profit-9">
            <div class="uk-container">
                <div class="uk-grid-divider" data-uk-grid>
                    <div class="uk-width-expand@m in-margin-top-20@s">
                        <h2>Trading products</h2>
                        <p>Choose from 6 asset classes and get access to 500+ trading instruments</p>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center" data-uk-grid>
                            <div>
                                <i class="fas fa-euro-sign in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Forex</p>
                            </div>
                            <div>
                                <i class="fab fa-btc in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Crypto</p>
                            </div>
                            <div>
                                <i class="fas fa-chart-area in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Indexes</p>
                            </div>
                            <div>
                                <i class="fas fa-file-contract in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Stocks</p>
                            </div>
                            <div>
                                <i class="fas fa-tint in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Energy</p>
                            </div>
                            <div>
                                <i class="fas fa-cube in-icon-wrap circle uk-box-shadow-small"></i>
                                <p class="uk-text-bold uk-margin-small-top">Commodities</p>
                            </div>
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="js/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-padding-large in-padding-large-vertical@s in-profit-5 uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-offset-top-40 in-profit-14" data-src="img/in-section-profit-14.jpg" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center" data-uk-grid>
                    <div class="uk-width-5-6@m in-margin-top-20@s">
                        <div class="uk-child-width-1-2@s uk-child-width-1-5@m uk-text-center" data-uk-grid>
                            <div>
                                <img src="fonts/in-lazy.svg" data-src="img/in-profit-icon-1.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                                <p class="uk-text-bold uk-margin-small-top">Wide Range of Trading Instruments</p>
                            </div>
                            <div>
                                <img src="fonts/in-lazy.svg" data-src="img/in-profit-icon-2.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                                <p class="uk-text-bold uk-margin-small-top">Unparalleled Trading Conditions</p>
                            </div>
                            <div>
                                <img src="fonts/in-lazy.svg" data-src="img/in-profit-icon-3.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                                <p class="uk-text-bold uk-margin-small-top">Globally Licensed &amp; Regulated</p>
                            </div>
                            <div>
                                <img src="fonts/in-lazy.svg" data-src="img/in-profit-icon-4.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                                <p class="uk-text-bold uk-margin-small-top">Crypto & Forex Education</p>
                            </div>
                            <div class="uk-visible@m">
                                <img src="fonts/in-lazy.svg" data-src="img/in-profit-icon-5.svg" alt="profit-icon" width="86" height="86" data-uk-img>
                                <p class="uk-text-bold uk-margin-small-top">Regular Contests &amp; Promotions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-large-top uk-margin-bottom" data-uk-grid>
                    <div>
                        <div class="in-pricing-1">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-card-badge">
                                        <i class="fas fa-graduation-cap fa-lg in-icon-wrap circle"></i>
                                    </div>
                                    <h3 class="uk-margin-remove-bottom">Learn</h3>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">knowledge to get started</p>
                                </div>
                                <div class="uk-card-body">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>FREE Demo Account</li>
                                        <li>Step-by step tutorials &amp; articles</li>
                                        <li>Online webinars &amp; local seminars</li>
                                        <li>Your own Account Manager</li>
                                    </ul>
                                    <a href="https://www.stockhutcommerceupg.com/register" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Open Demo Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-pricing-1">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-card-badge">
                                        <i class="fas fa-chart-area fa-lg in-icon-wrap circle"></i>
                                    </div>
                                    <h3 class="uk-margin-remove-bottom">Trade</h3>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">take your first profit</p>
                                </div>
                                <div class="uk-card-body">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>Tight spreads</li>
                                        <li>Superfast trade execution</li>
                                        <li>Hi-tech forex trading tools</li>
                                        <li>Ultimate risk protection &amp; security</li>
                                    </ul>
                                    <a href="https://www.stockhutcommerceupg.com/register" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Open Real Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-pricing-1">
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-card-badge">
                                        <i class="fas fa-chart-pie fa-lg in-icon-wrap circle"></i>
                                    </div>
                                    <h3 class="uk-margin-remove-bottom">Invest</h3>
                                    <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">choose the best portfolio</p>
                                </div>
                                <div class="uk-card-body">
                                    <ul class="uk-list uk-list-bullet uk-margin-bottom">
                                        <li>No need to be an experienced</li>
                                        <li>Large number of strategies</li>
                                        <li>Profit whenever Managers earn</li>
                                        <li>Full control of your Investment</li>
                                    </ul>
                                    <a href="https://www.stockhutcommerceupg.com/register" class="uk-button uk-button-secondary uk-border-rounded uk-margin-small-top">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3>Trade and get free commisions Today. It's that easy!</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="https://www.stockhutcommerceupg.com/register">Open an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection