@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.requirements') ?></h2>

<p><?php echo trans('getting_started.requirements.intro') ?></p>
<ul>
    <li>
        <?php echo trans('getting_started.requirements.webserver') ?>
        <ul>
            <li>PHP > 5.3.0</li>
            <li>MySQL > 4.x</li>
            <li><?php echo trans('getting_started.requirements.mycrypt') ?></li>
        </ul>
    </li>
    <li><?php echo trans('getting_started.requirements.web_browser') ?></li>
</ul>

<?php
$article_pagination = array(
    'next' => array(
        'url' => '/getting-started/installation',
        'title' => 'global.installation',
        'type' => 'article'
    )
);
?>

@stop