<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Custom styles */
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Editar Cliente</h1>
    <form id="clientForm" action="{{ route('cliente.update') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $cliente['client']['id'] }}">
        </div>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $cliente['client']['name'] }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ $cliente['client']['email'] }}">
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="tel" class="form-control" id="phone" name="phone" required value="{{ $cliente['client']['phone'] }}">
        </div>
        <div class="form-group">
            <label for="adress">Dirección</label>
            <input type="text" class="form-control" id="adress" name="adress" required value="{{ $cliente['client']['adress'] }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</body>
</html>
