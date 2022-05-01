@extends('layouts.store')

@section('content')
<section>
    <div class="row py-5">
        <div class="text-center">
            <h2>{{ $category->name }}</h2>
            <span class="text-muted">Esses são os produtos da categoria</span>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class=" col-lg-4 col-md-6 col-sm-10" >
                <div class="p-3 m-3 text-center" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset($product->image) }}" style="height: 250px;">
                </a>
                    <span class="d-block fw-bold">{{ $product->name }}</span>
                    <span class="d-block">R$ {{ $product->price }}</span>
                    <span class="my-3 text-ellipse">{{ $product->description }}</span>
                    <div class="text-center">
                        <div class="mt-2">
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-secondary">Visualizar</a>
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary" style="background-color: #483d8b; border: none;">Comprar</a>
                        </div>
                </div>
            </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</section>
@endsection
