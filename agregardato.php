<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lightblue;
        }
        nav a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Formulario de Registro</h2>

    <form action="guardar.php" method="POST" class="bg-white p-4 rounded shadow">
        <div class="mb-3">
            <label for="empleado" class="form-label">Empleado</label>
            <input type="text" class="form-control" id="empleado" name="empleado" required>
        </div>

        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="number" class="form-control" id="cedula" name="cedula" required>
        </div>

        <div class="mb-3">
            <label for="repuesto" class="form-label">Repuesto</label>
            <input type="text" class="form-control" id="repuesto" name="repuesto" required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="number" class="form-control" id="modelo" name="modelo" required>
        </div>

        <div class="mb-3">
            <label for="pagoemp" class="form-label">Mano de Obra</label>
            <input type="number" class="form-control" id="pagoemp" name="pagoemp" required>
        </div>

        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="number" class="form-control" id="placa" name="placa" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Agregar</button>
    </form>

    <div class="mt-4 d-flex justify-content-between">
        <a href="datos.php" class="btn btn-secondary">Datos</a>
        <a href="principal.php" class="btn btn-secondary">Principal</a>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
