

 <?php

    require_once("./model/Pedido.php");
    $pedido = new Pedidos_modelo;

    $ta = $pedido->get_pedidos();

    require_once("./view/pedido_view.php");

    ?>
