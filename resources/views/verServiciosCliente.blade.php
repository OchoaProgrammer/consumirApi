<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios del Cliente</title>
    
</head>
<body>
<div class="container">
    <h1>Servicios del Cliente: {{ $cliente['client']['name'] }}</h1>

    <h2>Servicios Contratados:</h2>
    @if(count($finish) > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
        @foreach($finish as $servicio)
            @if(isset($servicio['name']))
                <tr>
                    <td>{{ $servicio['id'] }}</td>
                    <td>{{ $servicio['name'] }}</td>
                    <td>{{ $servicio['price'] }}</td>
                    <!-- Añade más columnas según necesites -->
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    @else
    <p>No hay servicios contratados por este cliente.</p>
    @endif
</div>
</body>
</html>
