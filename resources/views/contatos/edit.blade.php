@extends('master')

@section('content')

    <div class="container">
        <h1>Editar Contato</h1>
        <form method="POST" action="{{ route('contatos.update', $contato->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>
                <div class="col-md-6">
                    <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome', $contato->nome) }}" required autocomplete="nome" autofocus>
                    @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF</label>
                <div class="col-md-6">
                    <input id="cpf" type="text" class="form-control cpf-mask cpf @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf', $contato->cpf) }}" required autocomplete="cpf">
                    @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $contato->email) }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
                <div class="col-md-6">
                    <input id="telefone" type="text" class="form-control telefone-mask telefone @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone', $contato->telefone) }}" required autocomplete="telefone">
                    @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="principal" id="principal" value="1" {{ old('principal', $contato->principal) ? 'checked' : '' }}>
                        <label class="form-check-label" for="principal">
                            Principal
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Atualizar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection('content')
