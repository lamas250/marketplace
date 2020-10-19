@extends('layouts.app')

@section('content')
<h1>Criar Loja</h1>

<form action="{{route('admin.stores.store')}}" method="POST">
    @csrf

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" >
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" >
    </div>

    <div class="form-group">
        <label>Celular</label>
        <input type="text" name="mobile_phone" class="form-control">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    <button  type="submit" class="btn btn-success">Enviar</button>
</form>

@endsection