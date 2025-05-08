<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - InvoicePlane Wiki</title>

    <link rel="icon" href="{{ asset('assets/img/logo_64x64.png') }}" type="image/png"/>

    <link href="{{ asset('assets/build/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="top"></div>

<div id="app">

    <div id="sidebar">
        @include('includes.sidebar')
    </div>

    <div id="main">

        @include('includes.topbar')

        <div id="content">
            @yield('content')

            @include('includes.article_pagination')
        </div>

        @include('includes.footer')

    </div>

</div>

<script src="{{ asset('assets/build/dependencies.min.js') }}"></script>
<script src="{{ asset('assets/build/app.min.js') }}"></script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["wiki.invoiceplane.com","wiki.invoiceplane.com"]]);
  _paq.push(["setDoNotTrack", true]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.invoiceplane.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.invoiceplane.com/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>
