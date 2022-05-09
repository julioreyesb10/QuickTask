<?php

namespace Model;

class Usuario extends ActiveRecord
{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'email', 'password', 'token', 'confirmado'];
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '';
    }

    //Para la validacion de cuentas nuevas
    public function validarNuevaCuenta()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Usuario esta Vacio';
        }


        if (!$this->email) {
            self::$alertas['error'][] = 'El email del Usuario esta Vacio';
        }
        if (!$this->password) {
            self::$alertas['error'][] = 'El password no puede estar vacio';
        }
        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe ser mayor a 6 caracteres';
        }

        if ($this->password !== $this->password2) {
            self::$alertas['error'][] = 'Los password no coinciden';
        }

        return self::$alertas;
    }
}
