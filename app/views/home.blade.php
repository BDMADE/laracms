@extends('layout')

@section('content')

@if (Session::has('flash_rgstr_sccss'))
<div id="flash_rgstr_sccss" class=" alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_rgstr_sccss') }}</div>
@endif

@if (Session::has('flash_logout'))
<div id="flash_logout" class=" alert alert-info fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('flash_logout') }}</div>
@endif

<div>
    <h1>This is Home Page.</h1>

    </div>


@stop