<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Smartlinks</title>
    <meta name="keywords"
          content="google adsword, thiet ke web, thiết kế web, quảng cáo google, quang cao google">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{ Html::style('css/app.css') }}
    {{ Html::script('js/app.js') }}
</head>
<body>
<header>
    @include('frontend.trangchu.header.menu')
</header>
<div id="mainBanner">
    @yield('sliderBanner')
</div>
<div class="">
    @yield('container')
</div>
</body>
</Html>