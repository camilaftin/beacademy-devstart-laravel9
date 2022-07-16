<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuario {{$user->name}}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Usuario {{$user->name}}</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Data Cadastro</th>
          <th scope="col">Acoes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
          <td><a href="" class="btn btn-warning text-white">Editar</a>
            <a href="" class="btn btn-danger text-white">Deletar</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>