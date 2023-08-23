<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <form action="/api/usuarios/create" method="post" class="flex flex-col bg-slate-400 w-[400px] p-5 gap-3">
        @csrf
        <!-- Campos del formulario -->
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="correo" placeholder="Correo electrónico">
        <select name="rango">
            <option value="1">Maestro</option>
            <option value="2">Alumno</option>
        </select>
        <select name="usuario_activo">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
