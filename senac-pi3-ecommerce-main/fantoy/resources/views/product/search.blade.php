@extends('layouts.store')

@section('content')
<section>
    <div class="row py-5">
        <div class="text-center">
            <h2>{{ $search }}</h2>
            <span class="text-muted">Aqui está o item que você procurou!</span>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="text-center" style="height: 250px;">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset($product->image) }}" class="h-100">
                </a>
                </div>
                <div class="text-center">
                    <span class="d-block fw-bold">{{ $product->name }}</span>
                    <span class="d-block">R$ {{ $product->price }}</span>
                    <div class="mt-2">
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-secondary">Visualizar</a>
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary" style="background-color: #483d8b; border: none;">Comprar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $products->withQueryString()->links() }}
    </div>
</section>
@endsection
