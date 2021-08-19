<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ingresar Pedido</title>
</head>

<body>
    <br>
    <br>

    <h1>Registrar Pedido</h1>
    <br>
    <div class="d-flex flex-row justify-content-center alig-items-center">
        <span class="border border-primary">
            <form style="margin:30px" method="get" action="../controller/registro_pedido.php">
                <label for="cli">Nombre del Cliente:</label><br>
                <input type="text" name="cli" value=""><br><br>
                <label for="start">Fecha</label>
                <input type="date" name="fecha" value="">
                <br>
                <br>

                <label>Vendedor N°</label>

                <select name="cbo_ven">
                    <option value="1">Vendedor 1</option>
                    <option value="2">Vendedor 2</option>
                    <option value="3">Vendedor 3</option>
                </select>
                <br>
                <br>

                <div class="col text-center">
                    <button type="submit" class="btn btn-primary alig-items-center">Enviar</button>

                </div>



        </span>
    </div>

</body>

</html>