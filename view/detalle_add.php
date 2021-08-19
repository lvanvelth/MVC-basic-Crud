<html>

<head>
    <title>Agregar Detalle Pedido</title>
    <script type="text/javascript" src="../js/function.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <br><br><br>
    <div class="d-flex flex-row justify-content-center alig-items-center">

        <span class="border border-primary">
            <form method="get" action="../controller/registro_detalle.php">
                <table id="mytab" cellspacing="10" cellpadding="10">
                    <tr>

                        <th style="width:120px; background-color: #5DACCD; color:#fff">Producto</th>
                        <th style="width:120px; background-color: #5DACCD; color:#fff">Cantidad</th>
                        <th style="width:120px; background-color: #5DACCD; color:#fff">Precio Unitario</th>
                        <th style="width:120px; background-color: #5DACCD; color:#fff">Id de Pedido</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="producto"></td>
                        <td><input type="text" name="cantidad"></td>
                        <td><input type="text" name="precio"></td>
                        <td>
                            <input type="text" name="id_pedido" value="">
                        </td>
                    </tr>
                </table>

                <div class="col text-center">
                    <button type="submit" class="btn btn-primary alig-items-center">Enviar</button>

                </div>



        </span>
    </div>

    <!--

<br><br>
  <div class="d-flex flex-row justify-content-center alig-items-center">

  <form method="get" action="../controller/registro_detalle.php">


            <br>
            <table id="mytab" cellspacing="10" cellpadding="10">
                <tr>

                    <th style="width:120px; background-color: #5DACCD; color:#fff">Producto</th>
                    <th style="width:120px; background-color: #5DACCD; color:#fff">Cantidad</th>
                    <th style="width:120px; background-color: #5DACCD; color:#fff">Precio Unitario</th>
                </tr>
                <tr>
                    <td><input type="text" name="producto"></td>
                    <td><input type="text" name="cantidad"></td>
                    <td><input type="text" name="precio"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="col text-center">
                    <button  type="submit" class="btn btn-primary alig-items-center">Enviar</button>
                    
                </div>-->

</body>

</html>