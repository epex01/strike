<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title> @yield('title')</title>
    <meta name="description" content="Stockhut Commerce">
    <meta name="keywords" content="Trade, Invest, Stock, Commerce" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="{{asset('newnav/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <!--<div class="pageTitle">-->
        <!--    Discover-->
        <!--</div>-->
        <!--<div class="right">-->
        <!--    <a href="javascript:;" class="headerButton toggle-searchbox">-->
        <!--        <ion-icon name="search-outline"></ion-icon>-->
        <!--    </a>-->
        <!--</div>-->
    </div>
    <!-- * App Header -->



    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section mt-2">
            <div class="row">
                <div class="col-12 col-sm-4 mb-3">
                    <div class="card product-card" style="background-image: url('{{asset('forex1.webp')}}'); height: 200px;">
                        <div class="card-body">
                            <div class="mb-6 pb-5">
                              <h6 class="text-muted">Account Balance</h6>
                                <h3 class="text-light">${{number_format(Auth::user()->rbalance + Auth::user()->tbalance + Auth::user()->profit + Auth::user()->roi + Auth::user()->bonus,2)}}</h3>  
                            </div>
                            <div class="mt-5 pt-2">
                                <div class="progress mb-1" style="height: 5px;">
                                  <div class="progress-bar" role="progressbar" style="width: {{Auth::user()->signal_strenght}}%;" aria-valuenow="{{Auth::user()->signal_strenght}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="text-muted">Signal Strenght</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0 mt-2">
                        <div class="col d-grid">
                            <a class="btn btn-outline-primary w-100"> Add Funds</a>
                        </div>
                        <div class="col d-grid">
                             <a class="btn btn-outline-primary w-100" href="{{url('/user/invests')}}"> My Investments ({{count($invests)}})</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 mb-2">
                    <div class="">
                        <div class="mb-3">
                        <div class="card">
                        <ul class="nav nav-tabs lined" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home11" role="tab">
                                    <ion-icon name="reload-circle-outline"></ion-icon>
                                    History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile12" role="tab">
                                    <ion-icon name="hourglass-outline"></ion-icon>
                                    Positions
                                </a>
                            </li>
                            
                        </ul>
                        </div>
                        <div class="card mt-2">
                        <div class="tab-content">
                            <div class="tab-pane fade show active p-3" id="home11" role="tabpanel">
                                @if($invests == null)
                                <div class="text-center">
                                    No History
                                </div>
                                @else
                                <div class="wide-block p-0">
                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Plan</th>
                                                <th scope="col">Capital</th>
                                                <th scope="col">ROI</th>
                                                <th scope="col">Daily Profit</th>
                                                <th scope="col">Started</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Time Left</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invests as $investment)
                                            <tr>
                                                <th scope="row">{{$investment->plan->name}}</th>
                                                <td>$ {{$investment->amount}}</td>
                                                <td>{{$investment->roi}}%</td>
                                                <td>$ {{($investment->roi / 100) * $investment->amount}}</td>
                                                <td>{{$investment->created_at}}</td>
                                                <td>
                                                    @if ($investment->status == 'running')
													<span class="badge badge-success">Running</span>
													@elseif ($investment->status == 'pending')
													<span class="badge badge-warning">Pending</span>
													@else
													<span class="badge badge-danger">Cancelled</span>
													@endif
                                                </td>
                                                <td>{{$investment->time_left}} days</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                
                            </div>
                            @endif
                            </div>
                            <div class="tab-pane fade p-3" id="profile12" role="tabpanel">
                                <div class="text-center">
                                    No Open Positions
                                </div>
                            </div>
                        </div>
                        </div>

                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="section">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="card product-card">
                        <div class="">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                              <div class="tradingview-widget-container__widget"></div>
                              
                              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                              {
                              "symbol": "BITSTAMP:BTCUSD",
                              "width": "100%",
                              "height": "100%",
                              "locale": "en",
                              "dateRange": "12M",
                              "colorTheme": "light",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                              "underLineColor": "rgba(41, 98, 255, 0.3)",
                              "underLineBottomColor": "rgba(41, 98, 255, 0)",
                              "isTransparent": false,
                              "autosize": true,
                              "largeChartUrl": ""
                            }
                              </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="card product-card">
                        <div class="">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                              <div class="tradingview-widget-container__widget"></div>
                              
                              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                              {
                              "symbol": "BITSTAMP:ETHUSD",
                              "width": "100%",
                              "height": "100%",
                              "locale": "en",
                              "dateRange": "12M",
                              "colorTheme": "light",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                              "underLineColor": "rgba(41, 98, 255, 0.3)",
                              "underLineBottomColor": "rgba(41, 98, 255, 0)",
                              "isTransparent": false,
                              "autosize": true,
                              "largeChartUrl": ""
                            }
                              </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->


     <!--App Bottom Menu -->
    <div class="appBottomMenu rounded">
        <a href="" class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="{{url('/user/trade/')}}" class="item">
            <div class="col">
                <ion-icon name="cube-outline"></ion-icon>
                <strong>Trade</strong>
            </div>
        </a>
        <a href="{{url('/user/deposit')}}" class="item">
            <div class="col">
                <ion-icon name="card-outline"></ion-icon>
                <!--<span class="badge badge-danger">5</span>-->
                <strong>Deposit</strong>
            </div>
        </a>
        <a href="{{url('/user/withdraw')}}" class="item">
            <div class="col">
                <ion-icon name="layers-outline"></ion-icon>
                <strong>Withdraw</strong>
            </div>
        </a>
        <!--<a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">-->
        <!--    <div class="col">-->
        <!--        <ion-icon name="menu-outline"></ion-icon>-->
        <!--    </div>-->
        <!--</a>-->
    </div>
     <!--* App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="{{asset('storage/images/'.Auth::user()->image)}}" alt="image" class="imaged rounded">
                        </div>
                        <div class="in">
                            <strong>{{Auth::user()->username}}</strong>
                            
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                     

                    <ul class="listview flush transparent no-line image-listview mt-2">
                    <!--    <li>-->
                    <!--        <a href="index.html" class="item">-->
                    <!--            <div class="icon-box bg-primary">-->
                    <!--                <ion-icon name="home-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            <div class="in">-->
                    <!--                Discover-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="app-components.html" class="item">-->
                    <!--            <div class="icon-box bg-primary">-->
                    <!--                <ion-icon name="cube-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            <div class="in">-->
                    <!--                Components-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="app-pages.html" class="item">-->
                    <!--            <div class="icon-box bg-primary">-->
                    <!--                <ion-icon name="layers-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            <div class="in">-->
                    <!--                <div>Pages</div>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <div class="icon-box bg-primary">-->
                    <!--                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>-->
                    <!--            </div>-->
                    <!--            <div class="in">-->
                    <!--                <div>Chat</div>-->
                    <!--                <span class="badge badge-danger">5</span>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Dark Mode</div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input dark-mode-switch"
                                            id="darkmodesidebar">
                                        <label class="custom-control-label" for="darkmodesidebar"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!--<div class="listview-title mt-2 mb-1">-->
                    <!--    <span>Friends</span>-->
                    <!--</div>-->
                    <!--<ul class="listview image-listview flush transparent no-line">-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">-->
                    <!--            <div class="in">-->
                    <!--                <div>Sophie Asveld</div>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">-->
                    <!--            <div class="in">-->
                    <!--                <div>Sebastian Bennett</div>-->
                    <!--                <span class="badge badge-danger">6</span>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <img src="assets/img/sample/avatar/avatar10.jpg" alt="image" class="image">-->
                    <!--            <div class="in">-->
                    <!--                <div>Beth Murphy</div>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">-->
                    <!--            <div class="in">-->
                    <!--                <div>Amelia Cabal</div>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <a href="page-chat.html" class="item">-->
                    <!--            <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">-->
                    <!--            <div class="in">-->
                    <!--                <div>Henry Doe</div>-->
                    <!--            </div>-->
                    <!--        </a>-->
                    <!--    </li>-->
                    <!--</ul>-->

                </div>

                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="{{url('/user/profile')}}" class="button">
                        <ion-icon name="person-outline"></ion-icon>
                        
                    </a>
                    <!--<a href="javascript:;" class="button">-->
                    <!--    <ion-icon name="archive-outline"></ion-icon>-->
                        
                    <!--</a>-->
                    <!--<a href="javascript:;" class="button">-->
                    <!--    <ion-icon name="settings-outline"></ion-icon>-->
                        
                    <!--</a>-->
                    <form method="POST" action="{{route('logout')}}">
								@csrf
                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="button">
                        <ion-icon name="log-out-outline"></ion-icon>
                        
                    </a>
                    </form>
                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!--<div id="notification-welcome" class="notification-box">-->
    <!--    <div class="notification-dialog android-style">-->
    <!--        <div class="notification-header">-->
    <!--            <div class="in">-->
    <!--                <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">-->
    <!--                <strong>Mobilekit</strong>-->
    <!--                <span>just now</span>-->
    <!--            </div>-->
    <!--            <a href="#" class="close-button">-->
    <!--                <ion-icon name="close"></ion-icon>-->
    <!--            </a>-->
    <!--        </div>-->
    <!--        <div class="notification-content">-->
    <!--            <div class="in">-->
    <!--                <h3 class="subtitle">Welcome to Mobilekit</h3>-->
    <!--                <div class="text">-->
    <!--                    Mobilekit is a PWA ready Mobile UI Kit Template.-->
    <!--                    Great way to start your mobile websites and pwa projects.-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- * welcome notification -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{asset('newnav/js/lib/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('newnav/js/lib/popper.min.js')}}"></script>
    <script src="{{asset('newnav/js/lib/bootstrap.min.js')}}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('newnav/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{asset('newnav/js/plugins/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <!-- Base Js File -->
    <script src="{{asset('newnav/js/base.js')}}"></script>


    <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>