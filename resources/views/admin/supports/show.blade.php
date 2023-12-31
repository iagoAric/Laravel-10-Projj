    @extends('admin.layout.app')

    @section('header')
    <h1>Detalhes da Duvida{{ $support->id}}</h1>
    @endsection

    <ul>
        <li>{{$support->subject}}</li>
        <li>{{$support->status}}</li>
        <li>{{$support->body}}</li>

    </ul>

    <form action="{{ route('supports.destroy', $support->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>