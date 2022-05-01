@extends('layouts.store')
@section('content')

    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container mt-5 mb-5" style="text-align: -webkit-center;">
            <h1>Editar Usuário:</h1>
            <div class="col-2">
                <span class="form-label">Nome:</span>
                <input name="name" type="text"  class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="col-2">
                <span class="form-label">Endereço:</span>
                <input name="address" type="text"  class="form-control" value="{{ $user->address }}" required>
            </div>

            <div class="col-2">
                <span class="form-label">Número:</span>
                <input name="number" type="text"  class="form-control" value="{{ $user->number }}" required>
            </div>

            <div class="col-2">
                <span class="form-label">Celular:</span>
                <input name="cellphone" type="text"  class="form-control" value="{{ $user->cellphone }}" required>
            </div>

            <div class="col-2">
                <span class="form-label">Cidade:</span>
                <input name="city" type="text"  class="form-control" value="{{ $user->city }}">
                <div style="margin-top: 10px;">
                <span class="form-label" >Estado:</span>
                    <select name="state" value="{{ $user->state }}">
                    @foreach ($user as $users)
                        <option selected hidden>{{$user->state}}</option>
                    @endforeach
                    <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
            </div>

            <div class="col-2 mt-5">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
                <a href="{{ route('cart.payment') }}" class="btn btn-lg btn-primary">voltar</a>
            </div>
        </div>
    </form>
@endsection
