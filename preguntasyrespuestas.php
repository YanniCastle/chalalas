<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas y Respuestas</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f4f4f4;
        padding: 20px;
    }

    .container {
        max-width: 400px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        margin-top: 15px;
        cursor: pointer;
    }

    button:hover {
        background: #218838;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Agregar Pregunta y Respuesta al Chatbot</h2>
        <form action="guardar.php" method="POST">
            <label for="pregunta">Pregunta:</label>
            <input type="text" id="pregunta" name="pregunta" required>

            <label for="respuesta">Respuesta:</label>
            <textarea id="respuesta" name="respuesta" required></textarea>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>