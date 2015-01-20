@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.email_templates') ?></h2>

<div class="alert alert-info">
    <?php echo trans('content.home.welcome_message') ?>
</div>

@stop