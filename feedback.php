<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Feedback</title>
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        
        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

       
        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        
        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

    
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            transition: border 0.3s;
        }

        
        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border: 1px solid #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

       
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

      
        textarea {
            min-height: 100px;
        }

        
        .notice {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            text-align: center;
        }

        
        .final-message {
            font-size: 14px;
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Deja tu Sugerencia, Reporte o Comentario Anónimo</h1>
    <p class="notice">Tu comentario será anónimo.</p>
    <form action="submit_feedback.php" method="POST">
        <label for="nombre">Nombre (opcional):</label>
        <input type="text" id="nombre" name="nombre">
        
        <label for="email">Email (opcional):</label>
        <input type="email" id="email" name="email">
        
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>
        
        <input type="submit" value="Enviar">
    </form>
    <p class="final-message">¡Todo por el bien de nuestra empresa y para mejorar juntos!</p>
</div>

</body>
</html>
