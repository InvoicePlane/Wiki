@extends('layouts.master')

@section('content')

<h2><?php echo trans('global.modules') ?></h2>

<ul>
    <li><a href="/modules/clients"><?php echo trans('global.clients') ?></a></li>
    <li><a href="/modules/quotes"><?php echo trans('global.quotes') ?></a></li>
    <li><a href="/modules/invoices"><?php echo trans('global.invoices') ?></a></li>
    <li><a href="/modules/recurring-invoices"><?php echo trans('global.recurring_invoices') ?></a></li>
    <li><a href="/modules/payments"><?php echo trans('global.payments') ?></a></li>
</ul>

@stop