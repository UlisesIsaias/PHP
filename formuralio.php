<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./index.php" method="GET">
        <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"><br><br>
        </div>
        <br>
        <label for="materia">Asignatura:</label><br>
        <select id="materia" name="materia">
            <option value="matematicas">Matemáticas</option>
            <option value="historia">Historia</option>
            <option value="ciencias">Ciencias</option>
        </select><br><br>

        <!-- Checkbox -->
        <label>
            <input type="checkbox" name="manzana" value="sí">
            Manzana
        </label><br><br>

        <!-- Botón submit -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
