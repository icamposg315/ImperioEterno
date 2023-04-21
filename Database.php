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
        $db = 'libro';

        $dsn = "$driver:dbname=$db;$host:host;$port:port";

        try {
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Ha debido ocurrir algun error' . $e->getMessage();
        }
        return $gbd;
    }

    public function getAllPersonajes()
    {
        $sql = "SELECT * FROM personajes";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }

    public function getAllGotas()
    {
        $sql = "SELECT * FROM gotas_de_escritura";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }

    public function getAllComentarios()
    {
        $sql = "SELECT * FROM comentario";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }
}
