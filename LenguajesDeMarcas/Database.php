<?php

class Database
{

    public function conectar()
    {
        $driver = 'mysql';
        $host = '127.0.0.1';
        $port = '3306';
        $user = 'root';
        $password = '';
        $db = 'libroimperioeterno';

        $dsn = "$driver:dbname=$db;$host:host;$port:port";

        try {
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Ha debido ocurrir algun error' . $e->getMessage();
        }
        return $gbd;
    }
    public function getGotas($id)
    {
        $sql = "SELECT * FROM gotas_de_escritura WHERE id = $id";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
    public function getPersonajes($id)
    {
        $sql = "SELECT * FROM personajes WHERE id = $id";
        $personaje = self::conectar()->query($sql);

        return $personaje;
    }

    public function getSintesis()
    {

        $sql = "SELECT * FROM libro";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }
}
