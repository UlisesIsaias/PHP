<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./index.php" method="POST">
    
        <label for="materia">Asignatura:</label><br>
        <select id="materia" name="materia[]" multiple> 
            <option value="matematicas">Matemáticas</option>
            <option value="historia">Historia</option>
            <option value="ciencias">Ciencias</option>
        </select><br><br>

        <!-- Checkbox -->
        <label for="op1">
            <input type="checkbox" name="f[]" id="op1" value="pera">
            pera
        </label><br><br>
        <label for="op2">
            <input type="checkbox" name="f[]" id="op2" value="manzana">
            manzana
        </label><br><br>
        <label for="op3">
            <input type="checkbox" name="f[]" id="op3" value="fresa">
            fresa
        </label><br><br>

        <!-- Botón submit -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
