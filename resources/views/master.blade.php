<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
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
    {{--{{ Html::style('css/banner/layerslider.css') }}--}}
    {{--{{ Html::style('css/banner/fonts/icons5d0b.css') }}--}}
    {{--{{ Html::style('css/banner/style5d0b.css') }}--}}
    {{--<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>--}}
    {{ Html::style('css/banner/banner.css') }}

</head>
<body>
<header>
    <div>
        @include('frontend.header.menu')
    </div>
</header>
<div id="mainBanner">
    @yield('sliderBanner')
</div>
<div class="">
    @yield('container')
</div>
<div class="footer">
    @include('frontend.footer.footer')
</div>
{{--{{ Html::script('js/wow.min.js') }}--}}
{{--{{ Html::script('js/noframework.waypoints.min.js') }}--}}
{{--{{ Html::script('js/countUp.min.js') }}--}}
{{--<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>--}}
{{--{{ Html::script('js/banner/loading.js') }}--}}
{{--{{ Html::script('js/banner/layerslider.kreaturamedia.jquery.js') }}--}}
{{--{{ Html::script('js/banner/layerslider.transitions.js') }}--}}
{{--<script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script>--}}
{{--{{ Html::script('js/banner/layerslider.kreaturamedia.jquery.js',array('data-cfasync'=>'false')) }}--}}
{{--{{ Html::script('js/banner/greensock.js',array('data-cfasync'=>'false')) }}--}}
{{--<script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_1").layerSlider({responsive: false, responsiveUnder: 1280, layersContainer: 1280, startInViewport: false, skin: 'noskin', globalBGColor: '#f0f4f7', hoverPrevNext: false, lazyLoad: false, yourLogoStyle: 'left: 10px; top: 10px;', cbInit: function(element) { }, cbStart: function(data) { }, cbStop: function(data) { }, cbPause: function(data) { }, cbAnimStart: function(data) { }, cbAnimStop: function(data) { }, cbPrev: function(data) { }, cbNext: function(data) { }, skinsPath: 'http://smartlinks.vn/wp-content/plugins/LayerSlider/static/skins/'}) } }); </script>--}}
{{--{{ Html::script('js/app.js') }}--}}
{{ Html::script('js/core.js') }}
{{ Html::script('js/scripts.js') }}
</body>

</Html>