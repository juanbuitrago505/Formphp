<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos y Empleado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Formulario de Productos y Empleado</h2>
    <form action="process.php" method="post">
        <!-- Employee Details -->
        <div class="form-group">
            <label for="identificacion">Identificación del Empleado:</label>
            <input type="text" id="identificacion" name="identificacion" required>
        </div>
        <div class="form-group">
            <label for="NomApellidos">Nombres y Apellidos:</label>
            <input type="text" id="NomApellidos" name="NomApellidos" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
        </div>
        <div class="form-group">
            <label for="salario">Salario:</label>
            <input type="number" id="salario" name="salario" step="0.01" min="0" required>
        </div>

        <!-- Product Details -->
        <div class="form-group">
            <label for="producto1">Nombre del Producto 1:</label>
            <input type="text" id="producto1" name="producto1" required>
        </div>
        <div class="form-group">
            <label for="precio1">Precio del Producto 1:</label>
            <input type="number" id="precio1" name="precio
