@extends('layouts.front')

@section('content')

<div class="row">
    <div class="col-6">
        <img src="{{url('img/no-photo.jpg')}}" class="card-img-top">
    </div>
    <div class="col-6">
        <h2>{{$product->name}}</h2>
        <p>{{$product->description}}</p>
        <h3>R$ {{number_format($product->price,'2',',','.')}}</h3>
        <span>
            Loja: {{$product->store->name}}
        </span>
    </div>
</div>
<div class="row">
    {{$product->body}}
</div>

@endsection