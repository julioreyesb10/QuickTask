<?php

namespace Controllers;

use Model\Usuario;

use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }

        //Render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesion'
        ]);
    }
    public static function logout()
    {
        echo "Desde Logout";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
    }
    public static function crear(Router $router)
    {
        $alertas = [];
        $usuario = new Usuario;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);

            $alertas = $usuario->validarNuevaCuenta();

            $existeUsuario = Usuario::where('email', $usuario->email);
            debuguear($existeUsuario);

            if ($existeUsuario) {
                Usuario::setAlerta('error', 'El Usuario ya esta registrado');
                $alertas = Usuario::getAlertas();
            }
        }
        //Render a la vista
        $router->render(
            'auth/crear',
            [
                'titulo' => 'Crea tu cuenta en QuickTask',
                'usuario' => $usuario,
                'alertas' => $alertas
            ]
        );
    }
    public static function olvide(Router $router)
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        $router->render(
            'auth/olvide',
            [
                'titulo' => 'Recuperar password'
            ]
        );
    }
    public static function reestablecer(Router $router)
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        $router->render(
            'auth/reestablecer',
            [
                'titulo' => 'Reestablecer password'
            ]
        );
    }


    public static function mensaje(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        $router->render(
            'auth/mensaje',
            [
                'titulo' => 'Cuenta creada exitosamente'
            ]
        );
    }


    public static function confirmar(Router $router)
    {
        $router->render('auth/confirmar', [
            'titulo' => 'Confirma tu cuenta de QuickTask'
        ]);
    }
}
