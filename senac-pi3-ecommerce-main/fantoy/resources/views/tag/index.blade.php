@extends('layouts.main')
@section('title', 'Lista de Tags Vinhos')
<script>
        function remover(){
            return confirm("Você deseja remover a tag?");
        }
</script>
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
<h1 class="mt-5">Lista de Tags Vinhos:</h1>
<a href="{{ route('tag.create') }}" class="btn btn-lg btn-primary mt-3" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Criar Tag Vinho</a>
<div class="row">
    <table class="table table-striped mt-3">
        <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }} ({{$tag->products()->count()}})</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Visualizar</a>
                        <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form class="d-inline" action="{{ route('tag.destroy', $tag->id) }}" method="POST" onsubmit=" return remover()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection