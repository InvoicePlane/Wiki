@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.general_settings') ?></h2>

<p><?php echo trans('settings.general.intro') ?></p>


<h3><?php echo trans('settings.general.version') ?></h3>

<p><?php echo trans('settings.general.version.text') ?></p>


<h3><?php echo trans('settings.general.language') ?></h3>

<p><?php echo trans('settings.general.language.text') ?></p>


<h3><?php echo trans('settings.general.default_country') ?></h3>

<p><?php echo trans('settings.general.default_country.text') ?></p>


<h3><?php echo trans('settings.general.date_format') ?></h3>

<p><?php echo trans('settings.general.date_format.text') ?></p>


<h3><?php echo trans('settings.general.currency_symbol_placement') ?></h3>

<p><?php echo trans('settings.general.currency_symbol_placement.text') ?></p>


<h3><?php echo trans('settings.general.amount_options') ?></h3>

<p><?php echo trans('settings.general.amount_options.text') ?></p>

<ul>
    <li><?php echo trans('settings.general.amount_options.separator') ?></li>
    <li><?php echo trans('settings.general.amount_options.decimal_point') ?></li>
</ul>


<h3><?php echo trans('settings.general.custom_title') ?></h3>

<p><?php echo trans('settings.general.custom_title.text') ?></p>


<h3><?php echo trans('settings.general.disable_sidebar') ?></h3>

<p><?php echo trans('settings.general.disable_sidebar.text') ?></p>


<h3><?php echo trans('settings.general.cron_key') ?></h3>

<p><?php echo trans('settings.general.cron_key.text') ?></p>


<h3><?php echo trans('settings.general.login_logo') ?></h3>

<p><?php echo trans('settings.general.login_logo.text') ?></p>


<?php
$article_pagination = array(
    'next' => array(
        'url' => '/settings/quotes',
        'title' => 'global.quote_settings',
        'type' => 'article'
    )
);
?>

@stop