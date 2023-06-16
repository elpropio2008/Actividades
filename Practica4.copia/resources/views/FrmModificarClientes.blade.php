<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACTUALIZAR CLIENTES</title>
</head>
<body>
    <center>
    <h2>REGISTRO DE CLIENTES</h2>
        <form action="/ActualizarCliente/{{$Edit->id}}" method="post">
        @method('PUT')
            @csrf
            <table>
                <tr>
                    <td>Id Del Cliente</td>
                    <td><input type="text" id="Id" name="Id" value="{{$Edit->id}}"></td>
                </tr>
                <tr>
                    <td>Carnet</td>
                    <td><input type="text" id="TxtCi" name="TxtCi" value="{{$Edit->CI}}"></td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" id="TxtNombres" name="TxtNombres" value="{{$Edit->Nombres}}"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" id="TxtApeliidos" name="TxtApellidos" value="{{$Edit->Apellidos}}"></td>
                </tr>
                <tr>
                    <td>Fecha De Nacimiento</td>
                    <td><input type="date" id="DtpFecha" name="DtpFecha" value="{{$Edit->FechaNacimiento}}"></td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td><input type="text" id="TxtGenero" name="TxtGenero" value="{{$Edit->Genero}}"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" id="TxtDireccion" name="TxtDireccion" value="{{$Edit->Direccion}}"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" id="TxtTelefono" name="TxtTelefono" value="{{$Edit->Telefono}}"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                </tr>
            </table>
        </form>
        @if (session('ActualizarCliente'))
        <p>{{ session('ActualizarCliente') }}</p>
        @endif
    </center>
</body>
</html>