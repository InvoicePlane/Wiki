@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.updates') ?></h2>

<ol>
    <li><?php echo trans('general.updates.step_1') ?></li>
    <li><?php echo trans('general.updates.step_2') ?></li>
    <li><?php echo trans('general.updates.step_3') ?></li>
    <li><?php echo trans('general.updates.step_4') ?></li>
    <li><?php echo trans('general.updates.step_5') ?></li>
</ol>

<div class="alert alert-info">
    <?php echo trans('global.footernotice') ?>
</div>

@stop