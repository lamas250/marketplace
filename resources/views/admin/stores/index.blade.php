@extends('layouts.app')

@section('content')
    @if(!$stores)
        <a class="btn btn-success" href="{{route('admin.stores.create')}}">Novo</a>
    @endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Total Produtos</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$stores->id}}</td>
                <td>{{$stores->name}}</td>
                <td>{{$stores->products->count()}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('admin.stores.edit',['store'=>$stores->id])}}">Editar</a>
                    <a class="btn btn-danger" href="{{route('admin.stores.destroy',['store'=>$stores->id])}}">Apagar</a>
                </td>
            </tr>
    </tbody>
</table>


@endsection