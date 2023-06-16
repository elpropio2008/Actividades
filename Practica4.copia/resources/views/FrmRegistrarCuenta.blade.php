<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MODIFICAR CUENTAS</title>
</head>
<body>
    <center>
        <h2>MODIFICAR CUENTAS</h2>
        <form action="/Actualizar/{{$Edit->id}}" method="POST">
            @method('PUT')
            @csrf
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" id="Id" name="Id" value="{{$Edit->id}}"></td>
                </tr>
                <tr>
                    <td>Saldo</td>
                    <td><input type="text" id="Saldo" name="Saldo" value="{{$Edit->Saldo}}"></td>
                </tr>
                <tr>
                    <td>Hora De Creacion</td>
                    <td><input type="time" id="Hora" name="Hora" value="{{$Edit->HoraCreacion}}"></td>
                </tr>
                <tr>
                    <td>Fecha De Creacion</td>
                    <td><input type="datetime" id="Fecha" name="Fecha" value="{{$Edit->FechaCreacion}}"></td>
                </tr>
                <tr>
                    <td>Tipo De Cuenta</td>
                    <td><input type="text" name="Tipo" id="Tipo" value="{{$Edit->Tipo}}"></td>
                </tr>
                <tr>
                    <td>Id Del Cliente</td>
                    <td><input type="text" name="IdCliente" id="IdCliente" value="{{$Edit->IdCliente}}"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Modificar"></td>
                </tr>
            </table>
        </form>

        @if (session('Update'))
        <p>{{ session('Update') }}</p>
        @endif
    </center>
</body>
</html>