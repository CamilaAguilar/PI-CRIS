@extends('layouts.store')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Clube do Vinho</a></li>
            <li class="breadcrumb-item"><a href="{{ route('category.show', $product->category->id) }}">{{ $product->category->name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>
    <div class="row my-6 p-4 mt-5 mb-5" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
        <div class="zoom col-6 col-md-6 col-sm-12 text-center">
            <h2>{{ $product->name }}</h2>
            <img src="{{ asset($product->image) }}" style="width: 225px">
        </div>
        <div class="col-6 col-md-6 col-sm-12 text-center">
            <h2 class="mb-5">Descrição</h2>
            <p class="my-3">{{ $product->description }}</p>
            <span class="h4 d-block my-3 mt-5" style="font-size: 35px">R$ {{ $product->price }}</span>
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-lg btn-primary my-2" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Adicionar no Carrinho</a>
            <div class="d-block my-1">
                <span class="h4 d-block mt-5">Tags:</span>
                @foreach($product->tags as $tag)
                <a href="{{ route('tag.show', $tag->id) }}" class="btn btn-sm btn-light">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection