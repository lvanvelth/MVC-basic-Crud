<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title>Pedidos</title>
</head>
<br>

<body>
	<h1 class="text-center">Pedidos</h1>
	<br>
	<div class="col text-center">
		<button onclick="location.href='./view/add.php'" type="button" class="btn btn-primary">Agregar Pedido</button>
		<button onclick="location.href='./view/detalle_add.php'" type="button" class="btn btn-secondary">Agregar Detalle</button>
	</div>
	<br>

	<br>

	<h1>Lista de pedidos</h1>
	<div class="text-center">
		<table>
			<tr>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Id Pedido</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Cliente</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Fecha</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Id Vendedor</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Monto Total</td>

				<?php
				require_once "./controller/pedido_control.php";
				foreach ($ta as $c) {

					require_once("./model/pedido_model.php");
					$m = $pedido->get_detalle_pedidos($c["id_pedido"]);

					echo "<tr><td>" . $c["id_pedido"] . "</td>";
					echo "<td>" . $c["cliente"] . "</td>";
					echo "<td>" . $c["fecha"] . "</td>";
					echo "<td>" . $c["id_vendedor"] . "</td>";

					$obj = new Pedido($c["id_pedido"], $c["cliente"], $c["fecha"], $c["id_vendedor"], $c["monto_total"]);

					$obj->calcularMonto($m);

					echo "<td>" . $obj->getMonto_total() . "</td>";
				}
				?>
		</table>
		<br><br>
		<h1>Detalles de Pedido</h1>
		<table>
			<tr>
				<td style="width:120px; background-color: #5DACCD; color:#fff">Id</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff;">Id Pedido</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff;">Producto</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff;">Cantidad</td>
				<td style="width:120px; background-color: #5DACCD; color:#fff;">Precio Unitario</td>

				<?php

				foreach ($m as $d) {
					echo "<tr><td>" . $d["id"] . "</td>";
					echo "<td>" . $d["id_pedido"] . "</td>";
					echo "<td>" . $d["producto"] . "</td>";
					echo "<td>" . $d["cantidad"] . "</td>";
					echo "<td>" . $d["precio_unitario"] . "</td></tr>";
				}
				?>
		</table>
		<br><br>
		<h1>Ventas por vendedor</h1>

		<table>
			<td style="width:120px; background-color: #5DACCD; color:#fff">Id Vendedor</td>
			<td style="width:120px; background-color: #5DACCD; color:#fff">Ventas</td>

			<?php
			$id = 0;
			foreach ($ta as $e) {
				if ($e["id_vendedor"] != $id) {
					$obj = new Pedido($e["id_pedido"], $e["cliente"], $e["fecha"], $e["id_vendedor"], $e["monto_total"]);
					echo "<tr><td>" . $e["id_vendedor"] . "</td>";
					echo "<td>" . $obj->cantidadVentas($e["id_vendedor"], $ta) . "</td></tr>";
				}
				$id = $e["id_vendedor"];
			}
			?>
		</table>
		<br><br><br>
	</div>
</body>

</html>