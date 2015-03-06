<!DOCTYPE html>
<html lang="<?php echo Config::get('app.locale') ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo trans('global.site_title') ?></title>

    <link href="/assets/css/style.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="<?php echo IP::formatViewName($current_page_name); ?>">

<div id="top">

    <?php echo View::make('elements.nav'); ?>

    <div id="wrapper" class="container">

        <div id="content" class="col-xs-12 col-sm-9 col-sm-push-3">
			<div class="alert alert-danger">
				<b>Caution!</b><br/>
				This wiki is <b>not</b> finished yet and should not be used as a reference in any way.<br/>
				Please use the up-to-date wiki at the <a href="https://github.com/InvoicePlane/InvoicePlane/wiki">official repository</a>!
			</div>
			
            @yield('content')

            <?php
            if ( isset($article_pagination) ) {
                echo View::make('elements.article_pagination')->with('article_pagination',$article_pagination);
            }
            ?>

        </div>

        <div id="sidebar" class="col-xs-12 col-sm-3 col-sm-pull-9">
            <?php echo View::make(IP::getLocAndVer(true).'.sidebar')->with(array(
                    'current_view_name' => $current_view_name,
                    'current_page_name' => $current_page_name,
            )); ?>
        </div>

    </div>

    <div id="footerwrapper">
        <div class="inner">
            <?php echo View::make('elements.footer'); ?>
        </div>
    </div>

</div>

<script src="/assets/js/jquery_2.0.3.min.js"></script>
<script src="/assets/js/bootstrap_3.2.0.min.js"></script>
<script src="/assets/js/scripts.min.js"></script>
<script src="/assets/js/lightbox.min.js"></script>

</body>
</html>