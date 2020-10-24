@extends('layouts.front')

@section('content')

    <h2 class="alert alert-success">
       Muito Obrigado!
    </h2>
    <p>
        Seu pedido foi processado, código do pedido: {{request()->get('order')}}
    </p>

@endsection