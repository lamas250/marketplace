@extends('layouts.default')

@section('content')
<a class="btn btn-success" href="{{route('admin.products.create')}}">Criar Produto</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome Produto</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->price}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-info" href="{{route('admin.products.edit',['product'=>$value->id])}}">Editar</a>
                        <form action="{{route('admin.products.destroy',['product'=>$value->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$products->links()}}

@endsection