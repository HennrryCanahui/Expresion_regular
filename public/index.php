<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresion_Regular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #63b9ebff;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: rgba(236, 244, 245, 0.97);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 2px solid #000000ff;
        }

        h1 {
            color: darkblue;
            text-align: center;
        }

        #confirm {
            background-color: #1738f3ff;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto;
            text-align: center;
        }

        input[type="text"] {
            width: 53%;
            padding: 5px;
            margin: 7px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fae364ff;
        }

        label {
            font-weight: bold;
        }

        small {
            color: #555;
            opacity: 0.5;
            font-size: 0.9em;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Formulario de Registro</h1>
        <form action="procesar.php" method="post">

            <label for="inputNombre">Nombre <small>(requerido)</small></label><br>
            <input type="text" id="inputNombre" name="inputNombre" required><br><br>

            <label for="inputApellido">Apellido <small>(requerido)</small></label><br>
            <input type="text" id="inputApellido" name="inputApellido" required><br><br>

            <label for="inputEmail">Email <small>(requerido)</small></label><br>
            <input type="text" placeholder="ejemplo@gmail.com" id="inputEmail" title="Introduce tu correo válido" name="inputEmail" required><br>
            <small>-asado cd</small>
            <input id="confirm" type="submit" value="Suscribirse">
        </form>
    </div>
</body>
</html>