<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>¡BIENVENIDO!</title>
    <style>
    .success {
        background-color:#1a73e8;
        color: #FFFFFF !important;
        padding: 8px 20px;
        text-decoration:none;
        font-weight:bold;
        border-radius:5px;
        cursor:pointer;
    }

    .success:hover {
        background-color:#4285f4;
        color: #FFFFFF;
    }
    </style>
</head>
<body>
    <h1 style="text-align: center;">¡BIENVENIDO!</h1>
    <p>Hola, {{ $name }}</p>
    <p>¡Felicidades! Ya eres parte de 8i.</p>
    <br>
    <div style="text-align: center; margin: 15px;">
        <a href="https://www.8i.cl/" class="success">VISITANOS</a>
    </div>
    <br>
    <p>Saludos,</p>
    <p>8i</p>
</body>
</html>
