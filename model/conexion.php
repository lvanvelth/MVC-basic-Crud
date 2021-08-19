<?php

class Database
{
    public static function startUp()
    {

        try {

            $stm = new PDO('mysql:host=localhost; dbname=ejercicio_lud', 'root', '');

            $stm->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stm->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {

            die("Error" . $e->getMessage());

            echo $e->getLine();
        }
        return $stm;
    }
}
