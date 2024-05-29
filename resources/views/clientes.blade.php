<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
    <h1>Clientes</h1>
</div>
<a href="{{ route('cliente.create') }}"><button>Crear Cliente</button></a>
<div class="table-responsive">
<table class="table -mt-2 table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($finish as $cliente)
    <tr>
        <th scope="row">{{ $cliente['id'] }}</th>
        <td>{{ $cliente['name'] }}</td>
        <td>{{ $cliente['email'] }}</td>
        <td>{{ $cliente['phone'] }}</td>
        <td>{{ $cliente['adress'] }}</td>
        <td>
            <a href="{{ route('cliente.delete', $cliente['id']) }}"> Eliminar</a>
            <a href="{{ route('cliente.view', $cliente['id']) }}"> Ver</a>
        </td>
    </tr>
@endforeach

  </tbody>
</table>
</body>
</html>