@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.system') ?></h2>

<ul>
    <li><a href="/system/importing-data"><?php echo trans('global.importing_data') ?></a></li>
</ul>

@stop