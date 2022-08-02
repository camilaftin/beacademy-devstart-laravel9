@extends('template.users')
@section('title', $title)
@section('body')

<h1>Usuario {{$user->name}}</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Data Cadastro</th>
      <th scope="col">Edicao</th>
      <th scope="col">Delecao</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
      <div class="container">
        <td><a href="{{route('users.edit', $user->id) }}" class="btn btn-warning ">Editar</a></td>
        <td>
          <form action=" {{ route('users.destroy', $user->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type='submit' class="btn btn-danger btn-icon-split">Apagar</button>
          </form>
        </td>
      </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

@endsection