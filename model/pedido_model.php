<?php

class Pedidos_modelo
{
    private $db;
    private $pedidos;
    private $detalle_pedidos;

    public function __construct()
    { 

        require_once("conexion.php");

        $this->db = Database::startUp();

        $this->pedidos = array();
        $this->detalle_pedidos = array();
    }

    public function get_pedidos()
    { 
        $consulta = $this->db->query("SELECT * FROM pedido");

        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) { 

            $this->pedidos[] = $filas; 

        }
        return $this->pedidos;
    }

    public function get_detalle_pedidos($id)
    { 

        $consulta = $this->db->query("SELECT * FROM detalle_pedido where id_pedido = " . $id);

        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) { 

            $this->detalle_pedidos[] = $filas; 

        }
        return $this->detalle_pedidos;
    }
    public function cargar($cliente, $fecha, $id_vendedor)
    {
        //$id = intval($id_vendedor);
        $monto = 0;

        $consulta = ("INSERT INTO pedido(cliente, fecha, id_vendedor, monto_total) VALUES (?, ?, ?, ?)");

        $insert = $this->db->prepare($consulta);
        $insert->bindParam(1, $cliente);
        $insert->bindParam(2, $fecha);
        $insert->bindParam(3, $id_vendedor);
        $insert->bindParam(4, $monto);

        $insert->execute();
    }
}
