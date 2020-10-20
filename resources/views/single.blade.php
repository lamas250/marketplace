@extends('layouts.front')

@section('content')

<div class="row">
    <div class="col-6">
        <img src="{{url('img/no-photo.jpg')}}" class="card-img-top">
    </div>
    <div class="col-6">
        <div>
            <h2>{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <h3>R$ {{number_format($product->price,'2',',','.')}}</h3>
            <span>
                Loja: {{$product->store->name}}
            </span>
        </div>
        <div class="product-add">
            <form action="{{route('cart.add')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="product[name]" value="{{$product->name}}">
                    <input type="hidden" name="product[price]" value="{{$product->price}}">
                    <input type="hidden" name="product[slug]" value="{{$product->slug}}">
                    <label>Quantidade</label>
                    <input type="number" name="product[amount]" class="form-control col-md-2" value="1">
                </div>
                <button href="" class="btn btn-lg btn-danger">Comprar</button>
            </form>
        </div>
    </div>
</div>
<div class="row">
    {{$product->body}}
</div>

@endsection