<?php


class Detalle_pedido
{
    private $db;
    private $id;
    private $id_pedido;
    private $producto;
    private $cantidad;
    private $precio_unitario;


    public function __construct($producto, $cantidad, $precio_unitario)
    {
        //$this->id = $id;
       // $this->id_pedido = $id_pedido;
       require_once("conexion.php");

       $this->db = Database::startUp();

       $this->pedidos = array();
       $this->detalle_pedidos = array();
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->precio_unitario = $precio_unitario;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getId_pedido()
    {
        return $this->id_pedido;
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getPrecio_unitario()
    {
        return $this->precio_unitario;
    }

 
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setId_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function setPrecio_unitario($precio_unitario)
    {
        $this->precio_unitario = $precio_unitario;
    }

    public function subTotal($detalles_pedidos){
        $subTotal = $detalles_pedidos['cantidad'] * $detalles_pedidos['precio_unitario'];
        return $subTotal;
    }

    public function cargarDetalle($producto,$cantidad,$precio,$id)
    {
        //$id = intval($id_vendedor);

        $consulta = ("INSERT INTO detalle_pedido(
        producto,
        cantidad,
        precio_unitario,
        id_pedido) 
        VALUES (?, ?, ?,?)");

            $insert = $this->db->prepare($consulta);
                $insert->bindParam(1, $producto);
                $insert->bindParam(2, $cantidad);                
                $insert->bindParam(3, $precio);                
                $insert->bindParam(4, $id);                

            $insert->execute();
    }
}
