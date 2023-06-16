<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORMULARIO DE CLIENTES</title>
</head>
<body>
    <center>
        <h2>REGISTRO DE CLIENTES</h2>
        <form action="/AgregarCliente" method="post">            
            @csrf
            <table>
                <tr>
                    <td>Id Del Cliente</td>
                    <td><input type="text" id="Id" name="Id"></td>
                </tr>
                <tr>
                    <td>Carnet</td>
                    <td><input type="text" id="TxtCi" name="TxtCi"></td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" id="TxtNombres" name="TxtNombres"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" id="TxtApeliidos" name="TxtApellidos"></td>
                </tr>
                <tr>
                    <td>Fecha De Nacimiento</td>
                    <td><input type="date" id="DtpFecha" name="DtpFecha"></td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td><input type="text" id="TxtGenero" name="TxtGenero"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" id="TxtDireccion" name="TxtDireccion"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" id="TxtTelefono" name="TxtTelefono"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
        @if (session('AgregarCliente'))
        <p>{{ session('AgregarCliente') }}</p>
        @endif
        <br>
        <br>
        <table border="1" id="TablaCliente">
            <tr>
                <th>Id Del Cliente</th>
                <th>CI</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha De Nacimiento</th>
                <th>Genero</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($clientes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->CI}}</td>
                <td>{{$item->Nombres}}</td>
                <td>{{$item->Apellidos}}</td>
                <td>{{$item->FechaNacimiento}}</td>
                <td>{{$item->Genero}}</td>
                <td>{{$item->Direccion}}</td>
                <td>{{$item->Telefono}}</td>
                <td>
                    <a href="/EditarCliente/{{$item->id}}">Editar</a>
                </td>
                <td>
                    <form action="/EliminarCliente/{{$item->id}}" method="post">
                        @method('delete')
                        @csrf
                    <button type="submit">Eliminar</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>