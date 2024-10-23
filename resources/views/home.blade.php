<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 11</title>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert type='dark'>
            <x-slot name='title'>
                Título
            </x-slot>
            Contenido de la alerta
        </x-alert>
    </div>
</body>

</html>
