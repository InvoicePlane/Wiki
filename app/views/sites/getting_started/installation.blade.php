@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.installation') ?></h2>

<p><?php echo trans('getting_started.installation.intro') ?></p>

<ol>
    <li><?php echo trans('getting_started.installation.step_1') ?></li>
    <li><?php echo trans('getting_started.installation.step_2') ?></li>
    <li><?php echo trans('getting_started.installation.step_3') ?></li>
    <li><?php echo trans('getting_started.installation.step_4') ?></li>
</ol>

<?php // @TODO Add Screenshots ?>

<div class="alert alert-warning"><?php echo trans('getting_started.installation.subdomain_notice') ?></div>

<p><?php echo trans('getting_started.installation.final_notice') ?></p>

<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/getting-started/requirements',
        'title' => 'global.requirements',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/getting-started/quickstart',
        'title' => 'global.quickstart',
        'type' => 'article'
    )
);
?>

@stop