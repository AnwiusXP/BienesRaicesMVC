<?php

function conectarDB(): mysqli
{
    $db = new mysqli('localhost', 'root', 'tomas1205', 'bienesraices_crud');

    if (!$db) {
        echo "error no se pudo conectar";
        exit;
    }

    return $db;
}
