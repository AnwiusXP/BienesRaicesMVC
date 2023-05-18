<?php

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginControllers
{
    public static function login(Router $router)
    {
        $errores = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);

            $errores = $auth->validar();

            if (empty($errores)) {
                // verificar si el usuario existe
                $resultado = $auth->existeUsuario();

                if (!$resultado) {
                    // verificar si el usuario existe o no
                    $errores = Admin::getErrores();
                } else {
                    // verificar el password
                    $autenticado = $auth->comprobarPassword($resultado);

                    if ($autenticado) {
                        // autenticar al usuario
                        $auth->autenticar();
                    } else {
                        $errores = Admin::getErrores();
                    }
                }
            }
        }

        $router->render('auth/login', [
            'errores' => $errores
        ]);
    }
    public static function logout()
    {
        session_start();

        $_SESSION = [];

        header('location:/');
    }
}
