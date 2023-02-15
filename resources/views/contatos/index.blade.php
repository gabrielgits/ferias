@extends('master')

@section('title', 'Lista de Contatos')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h1>Adicionar novo contato</h1>

<form method="POST" action="{{ route('contatos.store') }}" >
    @csrf

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $novoContato->nome) }}" required>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control cpf-mask" value="{{ old('cpf', $novoContato->cpf) }}" required>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $novoContato->email) }}" required>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" class="form-control telefone-mask" value="{{ old('telefone', $novoContato->telefone) }}" required>
            </div>
        </div>
    </div>
    <div>
        <div class="col">
            <div class="form-group">
                <label for="principal">Principal:</label>
                <input type="checkbox" name="principal" id="principal" value="1" {{ old('principal') ? 'checked' : '' }}>
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary">Adicionar Contato</button>
        </div>
    </div>
</form>
<br>
<br>
<h1>Lista de Contatos</h1>

<table class="table">
    <thead>
        <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Principal</th>
                <th>Opções</th>
        </tr>
    </thead>
    <tbody>

            @foreach ($contatos as $contato)
                <tr>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->cpf }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->principal ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('contatos.edit', $contato->id) }}">Editar</a>
                        <a href="{{ route('contatos.destroy', $contato->id) }}">Remover</a>
                    </td>
                </tr>
            @endforeach

    </tbody>
</table>

@endsection('content')
