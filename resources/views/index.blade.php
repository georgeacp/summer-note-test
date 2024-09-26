<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page Prueba</title>
  <!-- bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Agrega CSS personalizado para una apariencia mejorada */
    .table-custom {
      background-color: #f9f9f9;
      border-radius: 4px;
      overflow: hidden;
    }
    .table-custom thead {
      background-color: #007bff;
      color: #fff;
    }
    .table-custom tbody tr:hover {
      background-color: #f1f1f1;
    }
    .table-custom th, .table-custom td {
      text-align: center;
    }
    .btn-custom {
      margin: 2px;
    }
  </style>
</head>
<body>

  <div class="container p-4">
    <div class="text-center">
      <h1>Summernote</h1>
    </div>
    <a href="/create" class="btn btn-md btn-primary">Añadir</a>
    <hr>

    <table class="table table-bordered table-hover table-custom">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>
              <a href="show/{{ $post->id }}" class="btn btn-success btn-custom">Ver</a>
              <a href="edit/{{ $post->id }}" class="btn btn-info btn-custom">Editar</a>
              <a href="delete/{{ $post->id }}" class="btn btn-danger btn-custom">Eliminar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>
