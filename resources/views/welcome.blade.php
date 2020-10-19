@extends('layouts.front')

@section('content')
 
<div class="row front">
    @foreach($products as $key => $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url('img/no-photo.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">{{$product->name}}</h2>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <a href="{{route('product.single',['slug'=>$product->slug])}}" class="btn btn-success">
                        Ver Produto
                    </a>
                </div>
            </div>
        @if(($key + 1) % 3 == 0) </div><div class="row front"> @endif
    @endforeach
</div>

@endsection