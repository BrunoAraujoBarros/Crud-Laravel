@extends('layouts.main')

@section('title', 'PJ1')
@section('Func', 'Cadastrados')

@section('content')
    <table class="table table-light shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="padding: 20px">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Número</th>
                <th>Observações</th>
                <th></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($GetAll as $cadastro)
                <tr>
                    <td>{{ $cadastro->name }}</td>
                    <td>{{ $cadastro->nascimento }}</td>
                    <td>{{ $cadastro->numero }}</td>
                    <td>{{ $cadastro->obs }}</td>
                    <td>
                        <a href="/update/{{ $cadastro->id }}" class="btn btn-info edit-btn">Editar</a>
                    </td>
                    <td>
                        <form action="/delete/{{ $cadastro->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
