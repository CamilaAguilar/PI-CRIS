@extends('layouts.store')
@section('content')
<h2>Pagamentos</h2>
<hr>
<div class="row justify-content-center">
    <div class="col-md-6 col-10 my-4 p-3">
        <h3>Dados de Entrega</h3>
            <address class="ms-3">
                <span>{{Auth()->user()->address}}, </span> <span>{{Auth()->user()->number}}</span><br>
                <span>{{Auth()->user()->city}}, </span> <span>{{Auth()->user()->state}} </span><br>
                <span>Telefone para contato: {{Auth()->user()->cellphone}}

            </address>
            <a href="{{ route('user.edit') }}" class="float-end me-4">Trocar o endereço</a>
    </div>
    <div class="col-md-6 col-10 my-4 p-3 bg-light">
        <h3>Resumo da Compra</h3>
        <div class="ms-3">
            <div>
                <span>Quantidade de produtos comprados:</span>
                <a href="{{ route('cart.show') }}" class="float-end me-4">{{ \App\Models\Cart::count()}} produto(s)</a>
            </div>
            <div>
                <span>Frete:</span>
                <span class="float-end me-4 fw-bold">Grátis</span>
            </div>
            <div>
                <span class="h4">Total a pagar:</span>
                <span class="float-end me-4 h4">R$ {{ number_format(\App\Models\Cart::totalValue(), 2, ',' , '.') }}</span>
            </div>
        </div>
    </div>
</div>
<hr>
<form style="margin-top: 25px; margin-bottom: 70px;" method="POST" action="{{ route('order.add') }}">
    <h2>Dados de pagamento</h2>
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-5 col-10 mb-3">
            <label for="">Nome no cartão</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                <input type="text" id="cc-nome" name="cc-nome" class="form-control" required>
            </div>
        </div>
        <div class="col-md-5 col-10">
            <label for="">Numero do cartão</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fab fa-cc-mastercard"></i></span>
                <input type="text" id="cc_card" name="cc_card" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 col-10">
            <label for="">Código CVV</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fab fa-cc-mastercard"></i></span>
                    <input type="text" id="cc_card" name="cc_card" class="form-control" required>
                </div>
            <span class="text-muted">Você deve preencher o nome igual está no cartão</span>
        </div>
        <div class="col-md-5 col-10">
            <label for="">Data de Expiração</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fab fa-cc-mastercard"></i></span>
                    <input type="text" id="cc_card" name="cc_card" class="form-control" required>
                </div>
            <span class="text-muted">Você deve preencher o nome igual está no cartão</span>
        </div>
    </div>
    <button type="submit" class="btn btn-lg btn-success float-end" style="color: white; background: #30092a; border: none; padding: 15px; border-radius: 12px;">Efetuar Pagamento</button>
</form>
@endsection
