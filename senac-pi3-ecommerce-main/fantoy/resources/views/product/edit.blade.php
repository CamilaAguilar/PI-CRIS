@extends('layouts.main')
@section('title', 'Editar Fantoys')
@section('content')
    <h1>Editar Fantoy:</h1>
    <form method="POST" action="{{ route('product.update', $product->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <span class="form-label">Nome:</span>
            <input name="name" type="text"  class="form-control" value="{{ $product->name }}">
        </div>
        <div class="row">
            <span class="form-label">Descrição:</span>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="row">
            <span class="form-label">Preço:</span>
            <input name="price" type="number" min="0.00" max="10000" step="0.01" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="row">
            <span class="form-label">categoria</span>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">tag</span>
            <select class="form-select" name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}" @if($product->tags->contains($tag->id)) selected @endif>{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <span class="form-label">Imagem</span>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="row mt-4">
            <button type="submit" class="btn btn-success btn-lg" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Salvar</button>
            <a href="{{ route('product.index') }}" class="btn btn-lg btn-primary mt-2">Voltar</a>
        </div>
    </form>
@endsection
