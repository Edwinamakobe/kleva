@extends('base')
@section('title')
Latest Insurance Quotes
@stop

@section('content-title')
Latest Insurance Quotes
@stop

@section('content')
    @include('partial.user-list')
    
@if($claims->isEmpty())
<p class="alert alert-info">Whoops! Looks like there are no new claims for now</p>
@endif
    {!! $users->render() !!}
@stop
