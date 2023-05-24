<?php

class Database
{

    public static function conectar()
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


    public static function login($email, $password)
    {
        $sql = "SELECT * FROM administradores WHERE email = '$email' && password = '$password'";
        $user = self::conectar()->query($sql);
        if ($user != null) {
            return $user->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;
        }
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

    public static function getAllPersonajes()
    {
        $sql = "SELECT * FROM personajes";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }

    public static function getAllGotas()
    {
        $sql = "SELECT * FROM gotas_de_escritura";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }

    public static function getAllComentarios()
    {
        $sql = "SELECT * FROM comentario";
        $resultado = self::conectar()->query($sql);



        return $resultado;
    }

    public static function getAllClientes()
    {
        $sql = "SELECT * FROM cliente";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function deleteCLIENTE($id)
    {
        $sql = "DELETE FROM cliente WHERE id = $id";
        self::conectar()->exec($sql);
    }

    public static function deleteCOMENTARIO($id)
    {
        $sql = "DELETE FROM comentario WHERE id = $id";
        self::conectar()->exec($sql);
    }

    public static function deleteGOTAS($id)
    {
        $sql = "DELETE FROM gotas_de_escritura WHERE id = $id";
        self::conectar()->exec($sql);
    }

    public static function deletePERSONAJES($id)
    {
        $sql = "DELETE FROM personajes WHERE id = $id";

        self::conectar()->exec($sql);
    }

    public static function saveCLIENTE($datos)
    {
        $sql = "INSERT INTO cliente (nombre, apellidos, email, libro_id) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', $datos[3])";
        self::conectar()->exec($sql);
    }

    public static function saveCOMENTARIO($datos)
    {
        $sql = "INSERT INTO comentario (nombre, apellidos, email, fecha, comentario) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', now(), '$datos[4]')";
        self::conectar()->exec($sql);
    }

    public static function saveGOTAS($datos)
    {
        $sql = "INSERT INTO gotas_de_escritura (titulo, texto) VALUES ('$datos[0]', '$datos[1]')";
        self::conectar()->exec($sql);
    }

    public static function savePERSONAJES($datos)
    {
        $sql = "INSERT INTO personajes (nombre, texto) VALUES ('$datos[0]', '$datos[1]')";
        self::conectar()->exec($sql);
    }

    public static function updateCLIENTE($datos)
    {
        $sql = "UPDATE cliente SET nombre = '$datos[1]', apellidos = '$datos[2]', email = '$datos[3]', libro_id = $datos[4] WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateCOMENTARIO($datos)
    {
        $sql = "UPDATE comentario SET nombre = '$datos[1]', apellidos = '$datos[2]', email = '$datos[3]', fecha = NOW(), comentario = '$datos[5]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateGOTAS($datos)
    {
        $sql = "UPDATE gotas_de_escritura SET titulo = '$datos[1]', texto = '$datos[2]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updatePERSONAJES($datos)
    {
        $sql = "UPDATE personajes SET nombre = '$datos[1]', texto = '$datos[2]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function findById($id, $tabla)
    {
        $sql = "SELECT * FROM $tabla WHERE id = $id";
        $cliente = self::conectar()->query($sql);
        return $cliente->fetch(PDO::FETCH_ASSOC);
    }
}
