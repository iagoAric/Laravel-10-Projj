@extends('admin.layout.app')

@section('header')
<h1>Novas Duvidas</h1>
@endsection

<x-alert/>

<form action="{{ route('supports.store')}}" method="POST">
   @include('admin.supports.partials.form')
</form>
