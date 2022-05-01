@extends('layouts.main')
@section('title', 'Editar Tag de Vinhos')
@section('content')
    <h1 class="mt-5">Editar Tag Vinho:</h1>
    <form method="POST" action="{{ route('tag.update', $tag->id ) }}">
        @csrf
        @method('PATCH')
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control" value="{{ $tag->name }}">
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Salvar</button>
            <a href="{{ route('tag.index') }}" class="btn btn-lg btn-primary mt-2">Voltar</a>
        </div>
    </form>
@endsection