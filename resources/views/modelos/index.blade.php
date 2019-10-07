@extends('layout.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Modelo</th>
                <th scope="col">Funções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($modelos as $modelo)
                    <tr>
                        <th scope="row">{{ $modelo->id }}</th>
                        <td> {{ $modelo->modelo }} </td>
                        <td>
                            <a href="{{ route('modelos.show', ['modelo' => modelo->id]) }}">Visualizar</a>
                            <a href="#">Editar</a>
                            <a href="#">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection