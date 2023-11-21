@extends('admin.layout.app')

@section('title','Fórum')

@section('header')
@include('admin.supports.partials.header', [
    'total' => $supports->total()
])
@endsection

@section('content')


<a href="{{ route('supports.create') }}">Criar Duvidas</a>

<table>
    <thead>
        <th>assuntos</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($supports->items() as $support)
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ getStatusSupport( $support->status) }}</td>
            <td>{{ $support->body }}</td>
            <td>
                <a href="{{ route('supports.show', $support->id )}}">ir</a>
                <a href="{{ route('supports.edit', $support->id )}}">Editar</a>></a>
            </td>
        </tr>
    
        @endforeach

    </tbody>
</table>

<x-pagination 
    :paginator="$supports" 
    :appends="$filter" />

 @endsection