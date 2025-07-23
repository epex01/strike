<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1F76BB" />
    <!-- Site Properties -->
    <title> Login | {{ env('APP_NAME') }} </title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('front/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('front/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('front/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('front/fonts/rubik-v9-latin-500.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/rubik-v9-latin-300.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/rubik-v9-latin-regular.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="icon" href="{{asset('strikepricetrading_icon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('strikepricetrading_icon.png')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset('front/img/in-signin-image.jpg') }});">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{ url('/') }}">
                                        <img class="uk-margin-small-right in-offset-top-10"
                                            src="{{asset('strikepricetrading.png')}}"
                                            data-src="{{asset('strikepricetrading.png')}}" alt="logo"
                                            width="150" height="50">
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account
                                    </p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom"> Don't have an
                                        account? <a href="{{ route('register') }}">Register here</a></p>


                                    @if (count($errors) > 0)
                                        <div class="text-center">
                                            @foreach ($errors->all() as $error)
                                                <span style="color:red;">
                                                    {{ $error }}
                                                </span>
                                            @endforeach
                                        </div>

                                    @endif



                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <label for="email"> Email: </label>
                                            <input class="uk-input uk-border-rounded" type="email" name="email"
                                                :value="old('email')" placeholder="Email Address" required autofocus />
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <label for="password"> Password: </label>
                                            <input class="uk-input uk-border-rounded" placeholder="Password"
                                                id="password" type="password" name="password" required
                                                autocomplete="current-password" />
                                        </div>
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label><input class="uk-checkbox uk-border-rounded" type="checkbox"
                                                    id="remember_me" name="remember" /> Remember me</label>
                                        </div>
                                        <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right"><a class="uk-link-reset"
                                                    href="{{ route('password.request') }}">Forgot password?</a></label>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-warning uk-border-rounded uk-float-left"
                                                style="background-color: #1F76BB; color: #fff;" type="submit"
                                                name="submit">Sign in</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="{{ asset('front/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/indonez.min.js') }}"></script>
    <script src="{{ asset('front/js/config-theme.js') }}"></script>
</body>

</html>
