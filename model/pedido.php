<?php
require_once("conexion.php");
require_once("pedido_model.php");
require_once("detalle_pedido.php");

class Pedido
{
    private $id_pedido;
    private $cliente;
    private $fecha;
    private $id_vendedor;
    private $monto_total;

    public function __construct($id_pedido, $cliente, $fecha, $id_vendedor, $monto_total)
    {
        $this->id_pedido = $id_pedido;
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->fecha = $id_vendedor;
        $this->monto_total = $monto_total;
    }


    public function getId_pedido()
    {
        return $this->id_pedido;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getId_vendedor()
    {
        return $this->id_vendedor;
    }

    public function getMonto_total()
    {
        return $this->monto_total;
    }


    public function setId_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setId_vendedor($id_vendedor)
    {
        $this->id_vendedor = $id_vendedor;
    }

    public function setMonto_total($monto_total)
    {
        $this->monto_total = $monto_total;
    }

    public function calcularMonto($detalles_pedidos)
    {
        $monto = 0;
        foreach ($detalles_pedidos as $registro) {
            $obj1 = new Detalle_pedido($registro["id"], $registro["id_pedido"], $registro["producto"], $registro["cantidad"], $registro["precio_unitario"]);
            $monto = $obj1->subTotal($registro);
            $this->setMonto_total($monto);
        }
        return $this->monto_total;
    }

    public function cantidadVentas($id_vendedor, $matrizPedidos)
    {
        $cantidad = 0;
        $id = $id_vendedor;
        foreach ($matrizPedidos as $registro) {
            if ($id == $registro["id_vendedor"]) {
                $cantidad++;
            }
        }
        return $cantidad;
    }
}
