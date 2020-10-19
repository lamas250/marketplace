@extends('layouts.app')

@section('content')
<h1>Criar Produto</h1>

<form action="{{route('admin.products.store')}}" method="POST">
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
        <label>Conteudo</label>
        <textarea name="body" cols="30" rows="3" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="text" name="price" class="form-control">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    <button  type="submit" class="btn btn-success">Enviar</button>
</form>

@endsection