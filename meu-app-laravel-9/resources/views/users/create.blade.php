@extends('template.users')
@section('title', 'Novo Usuario')
@section('body')

<h1>Novo Usuario</h1>

<form action="{{route('users.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
   <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection