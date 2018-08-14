<?php
require_once('json.php');

// Definimos una constante llamada USUARIOS_KEY con valor 'usuarios'.
// de esta forma, nadie puede cambiar el nombre del archivo de usuarios
// ni la key principal de nuestro json.
define('USUARIOS_KEY', 'usuarios');
define('EMAIL_FIELD', 'email');
define('USERNAME_FIELD', 'username');

function guardarUsuario($datos)
{
    //obtenemos un array de usuarios de nuestro archivo json
    $usuarios = obtenerContenido(USUARIOS_KEY);

    //agregamos un ID a los datos del usuario
    $datos['id'] = count($usuarios) + 1;

    //agregamos los datos final del array.
    $usuarios[] = $datos;

    //guardamos el array en el archivo json
    guardarContenido(USUARIOS_KEY, $usuarios);
}

function buscarUsuario($campo, $valor)
{
    //obtenemos un array de usuarios de nuestro archivo json
    $usuarios = obtenerContenido(USUARIOS_KEY);

    //por cada usuario
    foreach ($usuarios as $usuario)
    {
        //si el valor del campo pedido, es igual al valor del campo que nos mandaron como parametro
        if ($usuario[$campo] == $valor) {
            //devuelvo que encontre al usuario
            return $usuario;
        }
    }

    // Si ya busque en todos los usuarios y no encontre el valor,
    // entonces devuelvo que no encontre uno repetido
    return false;
}