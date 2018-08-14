<?php

require_once('DB.php');

class Validator
{
  // Esta clase solamente tiene dos metodos,
  // y su unica responsabilidad para con
  // nuestra App es devolver errores si los hubo

  function validarLogin($datos, DB $db)
  {
    // ya que hicimos el require de DB,
    // ademas de $datos como veniamos usando,
    // consultamos contra nuestra base de datos
    // usando los metodos que creamos en ella.
    $errores = [];

    // foreach ($datos as $key => $value)
    // $datos[$key] = trim($value);

    if (empty($datos['email'])) {
      $errores['email'] = 'Ingresá tu email';
    }
    elseif (filter_var($datos['email'], FILTER_VALIDATE_EMAIL) == false) {
      $errores['email'] = 'El email ingresado no es un email válido';
    }
    elseif ($db->buscamePorEmail($datos['email']) == null) {
      // si no encuentra el email..
      $errores['emailNoRegistrado'] = 'El email ingresado no está registrado';
    }
    // A partir de aca, tenemos una variable $usuario con un objeto del tipo Usuario,
    // ya que si buscamePorMail() devuelve null o un objeto,
    // la parte de null ya la pasamos, asi que solamente queda que se instancie el usuario.
    // Esa instancia se genera en la clase DB, por eso no necesitamos hacer require
    // de Usuario para que esto pase.

    $usuario = $db->buscamePorEmail($datos['email']);

    if (empty($errores['emailNoRegistrado'])) {
      // si el email está registrado,
      // sigo con los checkeos de pass,
      // si no es al pedo
      if (empty($datos['pass'])) {
        // si el input pass está vacío...
        $errores['pass'] = "Ingresá la contraseña";
      }
      elseif (!password_verify($datos['pass'], $usuario->getPass())) {
        // valido que la pass que pone coincida con la que registró
        $errores['pass'] = "La contraseña es incorrecta";
      }
    }

    return $errores;
  }

  function validarRegistro($datos, DB $db)
  {
    $errores = [];

    if (trim($datos['nombre']) == '') //NOMBRE
      $errores['nombre'] = 'Ingresá tu nombre';

    if (trim($datos['apellido']) == '') //APELLIDO
      $errores['apellido'] = 'Ingresá tu apellido';

    if (empty($datos["email"])) // EMAIL CHECKS
      $errores["email"] = "Ingresá tu email";
    elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL))
      $errores['email'] = 'El email ingresado no es válido';
    elseif ($db->buscamePorEmail($datos['email']) == $datos['email']) //SI buscamePorEmail() encuentra el mail que le paso de POST en la db,
      $errores['email'] = 'El Email ingresado ya existe en nuestra base de datos'; // ese email ya está registrado
    elseif ($datos['email_confirm'] != $datos['email'])
      $errores['email_confirm'] = 'El Email y su confirmación deben coincidir';

    if (strlen($datos['pass']) < 6) // PASS CHECKS
      $errores['pass'] = 'La contraseña debe tener al menos 6 caracteres';
    elseif ($datos['pass'] != $datos['pass_confirm'])
      $errores['pass_confirm'] = 'La Contraseña y su confirmación deben coincidir';

    $nombre = $_FILES["avatar"]["name"]; // nombre original // AVATAR CHECKS
    $archivo = $_FILES["avatar"]["tmp_name"]; // nombre temporal
    $ext = pathinfo($nombre, PATHINFO_EXTENSION); //tomo la extensión...

    if ($_FILES['avatar']['error'] === UPLOAD_ERR_NO_FILE)
      $errores['avatar'] = 'Debe cargar una imagen de perfil';
    elseif ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'JPG' && $ext != 'JPEG')
      $errores['avatar'] = "la imagen debe ser en formato JPG"; //devuelvo error

    if (!isset($datos['terminos'])) // terminos y condiciones
      $errores['terminos'] = 'Debés aceptar los Términos y Condiciones';

    return $errores;
  }

  function validarEmail($email, DB $db) {
    $errores = [];

    if (empty($email['email'])) {
      $errores['email'] = 'Ingresá tu email';
    }
    elseif (filter_var($email['email'], FILTER_VALIDATE_EMAIL) == false) {
      $errores['email'] = 'El email ingresado no es un email válido';
    }
    elseif ($db->buscamePorEmail($email['email']) == null) {
      // si no encuentra el email..
      $errores['emailNoRegistrado'] = 'El email ingresado no está registrado';
    }

    return $errores;
  }
}
