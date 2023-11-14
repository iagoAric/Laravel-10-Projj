<h1>Novas Duvidas</h1>

<x-alert/>

<form action="{{ route('supports.store')}}" method="POST">
   @include('admin.supports.partials.form')
</form>