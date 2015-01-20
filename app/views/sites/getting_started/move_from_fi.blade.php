@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.move_from_fi') ?></h2>

<p><?php echo trans('getting_started.move_from_fi.intro') ?></p>

<h3><?php echo trans('getting_started.move_from_fi.make_full_backup') ?></h3>

<p><?php echo trans('getting_started.move_from_fi.make_full_backup.text') ?></p>

<h3><?php echo trans('getting_started.move_from_fi.use_migrationtool') ?></h3>

<ol>
    <li><?php echo trans('getting_started.move_from_fi.use_migrationtool.step_1') ?></li>
    <li><?php echo trans('getting_started.move_from_fi.use_migrationtool.step_2') ?></li>
</ol>

<div class="alert alert-warning"><?php echo trans('getting_started.move_from_fi.use_migrationtool.subdir_notice') ?></div>

<h3><?php echo trans('getting_started.move_from_fi.run_updates') ?></h3>

<p><?php echo trans('getting_started.move_from_fi.run_updates.text') ?></p>

<div class="alert alert-info">
    <?php echo trans('global.footernotice') ?>
</div>

<?php
$article_pagination = array(
    'previous' => array(
        'url' => '/getting-started/quickstart',
        'title' => 'global.quickstart',
        'type' => 'article'
    ),
    'next' => array(
        'url' => '/modules',
        'title' => 'global.modules',
        'type' => 'section'
    )
);
?>

@stop