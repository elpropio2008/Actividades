<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORMULARIO DE CUENTA</title>
</head>
<body>
    <center>
        <h2>LISTA DE CUENTAS</h2>
        <form action="/Agregar" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Id</td>
                    <td><input type="text" id="Id" name="Id"></td>
                </tr>
                <tr>
                    <td>Saldo</td>
                    <td><input type="text" id="Saldo" name="Saldo"></td>
                </tr>
                <tr>
                    <td>Hora De Creacion</td>
                    <td><input type="time" id="Hora" name="Hora" value="<?php echo time();?>"></td>
                </tr>
                <tr>
                    <td>Fecha De Creacion</td>
                    <td><input type="datetime" id="Fecha" name="Fecha" value="<?php echo date("Y-m-d");?>"></td>
                </tr>
                <tr>
                    <td>Tipo De Cuenta</td>
                    <td><input type="text" name="Tipo" id="Tipo"></td>
                </tr>
                <tr>
                    <td>Id Del Cliente</td>
                    <td><input type="text" name="IdCliente" id="IdCliente"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>

        @if (session('Agregar'))
        <p>{{ session('Agregar') }}</p>
        @endif

        <br>
        <br>
        <table border="1" id="Tabla1" name="Tabla1" >
        <tr>
            <th>Id</th>
            <th>Saldo</th>
            <th>Hora De Creacion</th>
            <th>Fecha De Creacion</th>
            <th>Tipo</th>
            <th>Cliente</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach ($cuentas as $item) 
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Saldo}}</td>
            <td>{{$item->HoraCreacion}}</td>
            <td>{{$item->FechaCreacion}}</td>
            <td>{{$item->Tipo}}</td>
            <td>{{$item->IdCliente}}</td>
            <td>                
                <a href="/Editar/{{$item->id}}">Editar</a>
            </td>
            <td>
                <form action="/Eliminar/{{$item->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>
        @if (session('Eliminar'))
        <p>{{ session('Eliminar') }}</p>
        @endif
    </center>
</body>
</html>

<script>
    function Edita()
    {
        var Filas, Tab=document.getElementById("Tabla1");
        for(var i=1;i < Tab.rows.length;i++)
        {
            Tab.rows[i].onclick=function()
            {
                Filas=this.rowIndex;
                document.getElementById("Id").value=this.cells[0].innerHTML;
                document.getElementById("Saldo").value=this.cells[1].innerHTML;
                document.getElementById("Hora").value=this.cells[2].innerHTML;
                document.getElementById("Fecha").value=this.cells[3].innerHTML;
                document.getElementById("Tipo").value=this.cells[4].innerHTML;
                document.getElementById("IdCliente").value=this.cells[5].innerHTML;
            };
        }
    }

</script>