@extends('layouts.default')

@section('content')
<a class="btn btn-success" href="{{route('admin.stores.create')}}">Novo</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stores as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <a class="btn btn-info" href="{{route('admin.stores.edit',['store'=>$value->id])}}">Editar</a>
                    <a class="btn btn-danger" href="{{route('admin.stores.destroy',['store'=>$value->id])}}">Apagar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$stores->links()}}

@endsection