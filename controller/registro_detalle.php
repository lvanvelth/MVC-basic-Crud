<?php

$producto=$_REQUEST['producto'];
$cantidad=$_REQUEST['cantidad'];
$precio=$_REQUEST['precio'];
$id=$_REQUEST['id_pedido'];

require_once ('../model/detalle_pedido.php');

$obj=new Detalle_pedido($producto,$cantidad,$precio);
$obj->cargarDetalle($producto,$cantidad,$precio,$id);