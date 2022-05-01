@extends('layouts.store')
@section('content')
<h2 class='mt-5'>Carrinho de Compra</h2>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Nome</th>
            <th></th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="align-middle">
    @php
        $total = 0;
    @endphp
        @foreach($cart as $item)
            <tr fs-5>
                <td><img src="{{$item->product()->image}}" style="width:40px"></td>
                <td><a href="{{ route('product.show', $item->product()->id) }}">{{ $item->product()->name }}</a></td>
                <td></td>
                <td>
                    <a href="{{ route('cart.add', $item->product()->id) }}" class="btn btn-md btn-danger">+</a>
                    <span class="btn btn-success"> {{ $item->quantity }}</span>
                    <a href="{{ route('cart.remove', $item->product()->id) }}" class="btn btn-md btn-primary font-size: 50px">-</a>
                </td>
                <td>
                    <span>R$ {{ $item->product()->price * $item->quantity}} (R$ {{ $item->product()->price  }})</span>
                    @php
                        $total += $item->product()->price * $item->quantity;
                    @endphp
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex flex-column flex-wrap align-items-end">
    <span class="h3 mx-3">Total da compra: R$ {{ $total }}</span>
    <a href="{{ route('cart.payment') }}" class="btn btn-lg btn-primary mx-5 my-2" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Ir para o Pagamento</a>
</div>
@endsection
