<?php

$cliente=$_REQUEST['cli'];
$fecha=$_REQUEST['fecha'];
$id_vendedor=$_REQUEST['cbo_ven'];

require_once ('../model/pedido.php');
require_once ('../model/pedido_model.php');

//$obj=new Pedido($id=0, $cliente, $fecha, $id_vendedor, $monto_total=0);
$obj2=new Pedidos_modelo();
$obj2->cargar($cliente,$fecha,$id_vendedor);
