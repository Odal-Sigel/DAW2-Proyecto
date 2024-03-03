<?php

final class Consultas
{
    private static function conectar(): PDO
    {
        $dsn = 'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'];

        return new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);
    }

    private static function desconectar(PDO $conexion)
    {
        $conexion = null;
    }

    public static function consultar(string $consulta, array $parametros)
    {
        $conexion = Consultas::conectar();

        $consulta = $conexion->prepare($consulta);
        foreach ($parametros as $clave => $valor) {
            $consulta->bindParam($clave, $valor);
        }
        $consulta->execute();

        Consultas::desconectar($conexion);

        return $consulta->fetchAll();
    }
}
