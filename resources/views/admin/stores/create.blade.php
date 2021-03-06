@extends('layouts.app')

@section('content')
<h1>Criar Loja</h1>

<form action="{{route('admin.stores.store')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        
    <div class="form-group">
        <label for="name">Nome Loja</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Descrição</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="form-group">
        <label for="mobile_phone">Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" class="form-control">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>
    <div class="form-group">
        <label for="user">Usuário</label>
        <select name="user" class="form-control">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
    </div>

</form>
@endsection




