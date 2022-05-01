@extends('layouts.main')
@section('title', 'item apagado do banco')
<script>
        function restore(){
            return confirm("Você deseja restaurar o produto?");
        }
</script>
@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
<h1>Lista de Vinhos-Apagados:</h1>
<div class="row">
    <table class="table table-striped">
        <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    {{-- <th>Imagem</th> --}}
                    <th>Preço</th>
                    <th>Opções</th>
                </tr>
        </thead>
        <tbody>
            @foreach($products as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->name }}</td>
                    <td>{{ $prod->description }}</td>
                    {{-- <td>{{ $prod->image }}</td> --}}
                    <td>{{ $prod->price }}</td>
                    <td>
                        <form action="{{ route('product.restore', $prod->id) }}" method="POST" onsubmit=" return restore()">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm btn-danger">Restaurar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    


   

