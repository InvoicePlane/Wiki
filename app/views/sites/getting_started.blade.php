@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.getting_started') ?></h2>

<ul>
    <li><a href="/getting-started/requirements"><?php echo trans('global.requirements') ?></a></li>
    <li><a href="/getting-started/installation"><?php echo trans('global.installation') ?></a></li>
    <li><a href="/getting-started/quickstart"><?php echo trans('global.quickstart') ?></a></li>
    <li><a href="/getting-started/move-from-fusioninvoice"><?php echo trans('global.move_from_fi') ?></a></li>
</ul>

@stop