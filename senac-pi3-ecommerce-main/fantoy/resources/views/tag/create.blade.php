@extends('layouts.main')
@section('title', 'Cadastrar Tag do Fantoy')
@section('content')
<h1>Cadastrar Tag do Fantoy:</h1>
    <form method="POST" action="{{ route('tag.store') }}">
        @csrf
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control">
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Salvar</button>
            <a href="{{ route('tag.index') }}" class="btn btn-lg btn-primary mt-2">Voltar</a>
        </div>
    </form>
@endsection
