<html lang="en"
    style="--hover: #252b3c; --nav-primary-font-colour: white; --nav-secondary-font-colour: white; --background-colour: #000000; --background-font-colour: #a5bdd9; --background-heading-colour: #ffffff; --primary-background: #0A1119; --primary-font-colour: #a5bdd9; --primary-border-colour: #363c4e; --primary-link-colour: #FFFFFF; --secondary-background: #060A15; --secondary-font-colour: #a5bdd9; --secondary-heading-colour: #ffffff; --border-colour: #434651; height: 100%;">

<head>
    <meta charset="UTF-8">
    <title>  @yield('title')</title>

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <meta property="og:title" content=" {{ env('APP_NAME') }}">
    <meta property="og:description"
        content="Forex, Stocks, ETFs and Options |  {{ env('APP_NAME') }} - Online Trading Platform">
    <meta property="og:image" content="/assets/images/pwa/apple-touch-startup-image-1136x640.png">


    <link rel="preconnect" href="https://fonts.googleapis.com">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/assets/css/flag-icon-css/css/flag-icon.min.css">


    <link rel="shortcut icon" href="{{asset('strikepricetrading_icon.png')}}">
    {{-- <link rel="manifest" href="/assets/images/pwa/manifest.webmanifest"> --}}

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{asset('strikepricetrading_icon.png')}}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="apple-touch-icon" sizes="1024x1024" href="{{asset('strikepricetrading_icon.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/css/flag-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/svgo.config.min.js"></script>
    
<!--<div id="google_translate_element"></div>-->
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WRhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459W1hyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WZhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WdhyyTh89ZNpQ.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/montserrat/v29/JTUSjIg1_i6t8kCHKm459WlhyyTh89Y.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3GUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3iUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3CUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3-UBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        /* math */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMawCUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF;
        }

        /* symbols */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMaxKUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3OUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3KUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBHMdazQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3GUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3iUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3CUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3-UBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        /* math */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMawCUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF;
        }

        /* symbols */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMaxKUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3OUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3KUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBHMdazQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3GUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3iUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3CUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3-UBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1, U+03A3-03FF;
        }

        /* math */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMawCUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF;
        }

        /* symbols */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMaxKUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3OUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3KUBHMdazTgWw.woff2) format('woff2');
            unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v47/KFO7CnqEu92Fr1ME7kSn66aGLdTylUAMa3yUBHMdazQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        
       /* Hide default Google Translate dropdown */
#google_translate_element select {
    display: none;
}

/* Button for language selection */
.translate-button {
    background: #007bff;
    color: white;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

/* Dropdown menu (hidden by default) */
.translate-options {
    display: none;
    position: absolute;
    background: white;
    border: 1px solid #ddd;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    padding: 10px;
    width: 150px;
}

/* Style for language options */
.translate-options a {
    display: flex;
    align-items: center;
    padding: 5px;
    text-decoration: none;
    color: black;
    font-size: 14px;
}

/* Flags styling */
.translate-options img {
    width: 20px;
    height: 15px;
    margin-right: 8px;
    border-radius: 3px;
}
.ct-topbar__list {
  margin-bottom: 0px;
}
.ct-language__dropdown{

	max-height: 0;
	overflow: hidden;
	position: absolute;
	left: -16px;
	-webkit-transition: all 0.25s ease-in-out;
	transition: all 0.25s ease-in-out;
	width: 70px;
	text-align: center;
	padding-top: 0;
  z-index:200;
}
.ct-language__dropdown li{
	background: #222;
	padding: 5px;
}
.ct-language__dropdown li a{
	display: block;
}
.ct-language__dropdown li:first-child{
	padding-top: 10px;
	border-radius: 3px 3px 0 0;
}
.ct-language__dropdown li:last-child{
	padding-bottom: 10px;
	border-radius: 0 0 3px 3px;
}
.ct-language__dropdown li:hover{
	background: #444;
}
.ct-language__dropdown:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 10;
	margin: auto;
	width: 8px;
	height: 0;
	border: 0 solid transparent;
	border-right-width: 8px;
	border-left-width: 8px;
	border-bottom: 8px solid #222;
}
.ct-language{
	position: relative;
  color: #fff;
  padding: 10px 0;
}
.ct-language:hover .ct-language__dropdown{
	min-height: 600px;
	padding-top: 8px;
	margin-right: 5px;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}


        
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1222.0" data-gr-ext-installed=""
    style="position: relative; min-height: 100%; top: 0px;" wotdisconnected="true"><span id="warning-container"><i
            data-reactroot=""></i></span>
    <noscript> You need to enable JavaScript to run this app. </noscript>

    <div id="root">
        <section class="app-ultra-1 bg bg-secondary  ">
            <div class="navbar-fixed">
                <nav class="transparent">
                    <div class="nav-wrapper">
                        <ul id="nav-mobile" class="left">
                            <li><a data-target="sn" class="sidenav-trigger show-on-large white-text"><span
                                        class="material-icons notranslate"
                                        style="font-size: 25px; top: -4px;">menu</span></a></li>
                            <li><a href="/"><b class="app-title white-text"> {{ env('APP_NAME') }}</b></a></li>
                        </ul>
                        <ul class="right ">
                            <!--<li><span class="material-icons notranslate "-->
                            <!--        style="font-size: 20px; top: 0px;">light_mode</span></li>-->
                            <!--<li data-target="tl" class="dropdown-trigger notranslate custom-translate" onclick="toggleDropdown()">-->
                            <!--    <span class="flag-icon flag-icon-us transalate-i"></span> EN-->
                            <!--</li>-->
                            
                            <!--<ul id="tl" class="dropdown-content translate-options" tabindex="0">-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-sy"></span> AR</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-es"></span> ES</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-de"></span> DE</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-us"></span> EN</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-ir"></span> FA</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-fr"></span> FR</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-id"></span> ID</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-in"></span> IN</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-it"></span> IT</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-jp"></span> JA</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-nl"></span> NL</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-pt"></span> PT</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-pl"></span> PL</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-ru"></span> RU</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-sk"></span> SE</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-tr"></span> TR</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-th"></span> TH</a></li>-->
                            <!--    <li class="notranslate"><a class="notranslate"><span class="flag-icon flag-icon-vn"></span> VN</a></li>-->
                            <!--</ul>-->
                            <ul class="list-unstyled list-inline ct-topbar__list" style="padding-right:10px;">
                        	  <li class="ct-language"><span class="flag-icon flag-icon-us transalate-i"></span> EN</i>
                        		<ul class="list-unstyled ct-language__dropdown">
    		                        <li class="notranslate" onclick="translateLanguage('ar')"><a class="notranslate"><span class="flag-icon flag-icon-sy"></span> AR</a></li>
                                    <li class="notranslate" onclick="translateLanguage('es')"><a class="notranslate"><span class="flag-icon flag-icon-es"></span> ES</a></li>
                                    <li class="notranslate" onclick="translateLanguage('de')"><a class="notranslate"><span class="flag-icon flag-icon-de"></span> DE</a></li>
                                    <li class="notranslate" onclick="translateLanguage('en')"><a class="notranslate"><span class="flag-icon flag-icon-us"></span> EN</a></li>
                                    <li class="notranslate" onclick="translateLanguage('fa')"><a class="notranslate"><span class="flag-icon flag-icon-ir"></span> FA</a></li>
                                    <li class="notranslate" onclick="translateLanguage('fr')"><a class="notranslate"><span class="flag-icon flag-icon-fr"></span> FR</a></li>
                                    <li class="notranslate" onclick="translateLanguage('id')"><a class="notranslate"><span class="flag-icon flag-icon-id"></span> ID</a></li>
                                    <li class="notranslate" onclick="translateLanguage('in')"><a class="notranslate"><span class="flag-icon flag-icon-in"></span> IN</a></li>
                                    <li class="notranslate" onclick="translateLanguage('it')"><a class="notranslate"><span class="flag-icon flag-icon-it"></span> IT</a></li>
                                    <li class="notranslate" onclick="translateLanguage('ja')"><a class="notranslate"><span class="flag-icon flag-icon-jp"></span> JA</a></li>
                                    <li class="notranslate" onclick="translateLanguage('nl')"><a class="notranslate"><span class="flag-icon flag-icon-nl"></span> NL</a></li>
                                    <li class="notranslate" onclick="translateLanguage('pt')"><a class="notranslate"><span class="flag-icon flag-icon-pt"></span> PT</a></li>
                                    <li class="notranslate" onclick="translateLanguage('pl')"><a class="notranslate"><span class="flag-icon flag-icon-pl"></span> PL</a></li>
                                    <li class="notranslate" onclick="translateLanguage('ru')"><a class="notranslate"><span class="flag-icon flag-icon-ru"></span> RU</a></li>
                                    <li class="notranslate" onclick="translateLanguage('se')"><a class="notranslate"><span class="flag-icon flag-icon-sk"></span> SE</a></li>
                                    <li class="notranslate" onclick="translateLanguage('tr')"><a class="notranslate"><span class="flag-icon flag-icon-tr"></span> TR</a></li>
                                    <li class="notranslate" onclick="translateLanguage('th')"><a class="notranslate"><span class="flag-icon flag-icon-th"></span> TH</a></li>
                                    <li class="notranslate" onclick="translateLanguage('vn')"><a class="notranslate"><span class="flag-icon flag-icon-vn"></span> VN</a></li>
                        		</ul>
                        	  </li>
                        	</ul>

                             
                               
                            
                        </ul>
                    </div>
                </nav>
            </div>
            <ul class="sidenav" id="sn">
                <li>
                    <div class="user-view">
                        <div class="background"><img src="{{asset('strikepricetrading_logo.png')}}"
                                class="responsive-img" style="height: 100px; width:200px"></div>
                    </div>
                </li>
                <li class="no-padding">
                    <ul>
                        <li><a class="sidenav-close" href="/"><span
                                    class="material-icons notranslate">home</span><span
                                    style="padding-left: 10px;">Home</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('faq') }}"><span
                                    class="material-icons notranslate">quiz</span><span
                                    style="padding-left: 10px;">FAQs</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('login') }}"><span
                                    class="material-icons notranslate">person_outline</span><span
                                    style="padding-left: 10px;">Sign In</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('register') }}"><span
                                    class="material-icons notranslate">person_add</span><span
                                    style="padding-left: 10px;">Sign Up</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('contact') }}"><span
                                    class="material-icons notranslate">mail_outline</span><span
                                    style="padding-left: 10px;">Contact</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('about') }}"><span
                                    class="material-icons notranslate">people</span><span
                                    style="padding-left: 10px;">About Us</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('hedge') }}"><span
                                    class="material-icons notranslate">people</span><span
                                    style="padding-left: 10px;">Hedge Funds</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('copy') }}"><span
                                    class="material-icons notranslate">content_copy</span><span
                                    style="padding-left: 10px;">Copy Trading</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('cookie') }}"><span
                                    class="material-icons notranslate">lock_open</span><span
                                    style="padding-left: 10px;">Cookie Policy</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('cryptomining') }}"><span
                                    class="material-icons notranslate">dns</span><span
                                    style="padding-left: 10px;">Crypto Mining</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('forextrading') }}"><span
                                    class="material-icons notranslate">wysiwyg</span><span
                                    style="padding-left: 10px;">Forex Trading</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('privacypolicy') }}"><span
                                    class="material-icons notranslate">lock_open</span><span
                                    style="padding-left: 10px;">Privacy Policy</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('bitcoinmining') }}"><span
                                    class="material-icons notranslate">copyright</span><span
                                    style="padding-left: 10px;">Bitcoin Mining</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('cryptotrading') }}"><span
                                    class="material-icons notranslate">copyright</span><span
                                    style="padding-left: 10px;">Crypto Trading</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('stockstrading') }}"><span
                                    class="material-icons notranslate">insert_chart_outlined</span><span
                                    style="padding-left: 10px;">Stocks Trading</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('dogecoinmining') }}"><span
                                    class="material-icons notranslate">copyright</span><span
                                    style="padding-left: 10px;">Dogecoin Mining</span></a></li>
                        <li><a class="sidenav-close" href="{{ route('termsofservice') }}"><span
                                    class="material-icons notranslate">folder_open</span><span
                                    style="padding-left: 10px;">Terms of Service</span></a></li>
                    </ul>
                </li>
            </ul>
             @yield('slider')
        </section>
      @yield('content')
        <section class="bg bg-secondary app-py-3">
            <div class="row pc-container">
                <div class="col l4 s12 app-mobile-center"><img
                        src="{{ asset('strikepricetrading_icon.png') }}" height="50px">
                    <h4 style="margin-top: 0px; margin-bottom: 10px;"> {{ env('APP_NAME') }}</h4>
                    <p><span class="material-icons notranslate">mail</span> info@strikepricetrading.com</p>
                </div>
                <div class="col l8 s12" style="font-size: 12px;"><br>
                    <p class="app-text-justify">*Risk Warning: Trading in Forex/CFDs and Other Derivatives is highly
                        speculative and carries a high level of risk. These products may not be suitable for everyone
                        and you should ensure that you understand the risks involved.</p>
                    <p class="app-text-justify">All materials and services provided on this site are subject to
                        copyright and belong to {{ env('APP_NAME') }}. Any use of materials of this website must be
                        approved by an
                        official representative of “ {{ env('APP_NAME') }}”, and contain a link to the original
                        resource. Any
                        third-party companies of “Online – broker” do not have the right to use materials of this
                        website as well as any distorted writing of “ {{ env('APP_NAME') }}”. In case of violation,
                        they will be
                        prosecuted in accordance with legislation of the intellectual property protection.</p>
                    <p>All brokerage activity on this website is provided by {{ env('APP_NAME') }}.</p>
                </div>
            </div>
            <div>
                <hr>
                <div class="row center">
                    <div class="col l4 s4"><a class="grey-text" href="{{ route('contact') }}">Contact Us</a></div>
                    <div class="col l4 s4"><a class="grey-text" href="{{ route('termsofservice') }}">Terms</a></div>
                    <div class="col l4 s4"><a class="grey-text" href="{{ route('privacypolicy') }}">Privacy Policy</a></div>
                </div>
                <hr><br>
            </div>
        </section>
    </div><iframe id="chat-application-iframe" title="Smartsupp" aria-hidden="true"
        style="display: block; position: fixed; top: 0px; left: 0px; width: 1px; height: 1px; opacity: 0; border: none; z-index: -1; pointer-events: none;"></iframe>
    <div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate"
        style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;"
        data-id="">
        <div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd">
            <div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img
                    src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24"
                    height="24" alt=""></div>
            <div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c">
                <div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div>
                <div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div>
            </div>
            <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr">
                <div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr">
                    <div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div>
                    <div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google
                        Translate</div>
                </div>
                <div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation"
                        aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z">
                                </path>
                            </svg></span></button><button id="goog-gt-thumbDownButton" type="button"
                        class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation"
                        aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z">
                                </path>
                            </svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24"
                                viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M">
                                <path
                                    d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z">
                                </path>
                            </svg></span></button></div>
            </div>
            <div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce">
                <form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te"
                    method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text"
                        name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl"
                        id="goog-gt-votingInputTrgLang"><input type="text" name="query"
                        id="goog-gt-votingInputSrcText"><input type="text" name="gtrans"
                        id="goog-gt-votingInputTrgText"><input type="text" name="vote"
                        id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe>
            </div>
        </div>
    </div>
     <div id="google_translate_element" class="d-hidden"></div>
    <div id="smartsupp-widget-container"><!----><!----><!----> <!----><!----> <!---->
        <div style="border-radius: 9999px; box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 2px 32px; color-scheme: normal; height: 56px; position: fixed; bottom: 45px; left: initial; right: 12px; z-index: 10000000; width: 56px;"
            data-testid="widgetButtonFrame"><iframe allowfullscreen="" scrolling="no" id="widgetButtonFrame"
                title="Smartsupp widget button"
                style="position: absolute; width: 100%; height: 100%; border: none; display: block; text-align: left; margin: 0px; padding: 0px; top: 0px; left: 0px; opacity: 1;"></iframe><!---->
        </div><!----> <!----><!----> <!----><!----><!---->
    </div>
    <div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf">
        <div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe"
                width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round"
                    cx="33" cy="33" r="30"></circle>
            </svg></div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sideNav = document.getElementById("sn"); // Sidebar element
            const menuToggle = document.querySelector(".sidenav-trigger"); // Menu button

            menuToggle.addEventListener("click", function(event) {
                event.stopPropagation(); // Prevent the event from reaching the document
                if (sideNav.style.transform === "translateX(0%)") {
                    sideNav.style.transform = "translateX(-105%)"; // Close sidebar
                } else {
                    sideNav.style.transform = "translateX(0%)"; // Open sidebar
                }
            });

            // Close the sidebar when clicking outside of it
            document.addEventListener("click", function(event) {
                if (!sideNav.contains(event.target) && !menuToggle.contains(event.target)) {
                    sideNav.style.transform = "translateX(-105%)"; // Close sidebar
                }
            });
        });
    </script>
    <script>
    $('document').ready(function () {


		// RESTYLE THE DROPDOWN MENU
    $('#google_translate_element').on("click", function () {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            .css({
                'color': '#544F4B',
                'font-family': 'Roboto',
								'width':'100%'
            });
        // Change menu's padding
        $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
			
				// Change menu's padding
        $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
      
        // Change the padding of the languages
        $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
      
        // Change the width of the languages
        $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
        $("iframe").contents().find('td').css('width', '100%');
      
        // Change hover effects
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
        }, function () {
            $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
        
      
      
        // Change the iframe's size and position?
        $(".goog-te-menu-frame").css({
            'height': '100%',
            'width': '100%',
            'top': '0px'
        });
        // Change iframes's size
        $("iframe").contents().find('.goog-te-menu2').css({
            'height': '100%',
            'width': '100%'
        });
    });
});
</script>

<script>
    
function toggleDropdown() {
    // alert('it works');
    var dropdown = document.getElementById("translateDropdown");
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems);
});
}


// Function to change language
function translateLanguage(lang) {
    var select = document.querySelector("#google_translate_element select");
    if (select) {
        for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value.indexOf(lang) > -1) {
                select.selectedIndex = i;
                select.dispatchEvent(new Event("change"));
                break;
            }
        }
    }
}
</script>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '846b7b3029340b1511444a9b6003938fbb4995ef';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
