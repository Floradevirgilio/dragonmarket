<?php

// se va a usar la db para algunas verificaciones
require_once('DB.php');
?>

<?php

class Auth
{
  public function __construct()
  {
    session_start();  // Auth maneja la sesion,
                      // cuando la instanciemos hacemos
                      // session_start() para aprovechar
                      // las funcionalidades que nos da.

    // Si no hay sesión pero sí hay cookie
    // pongo la data de la cookie en la sesión
    if (!isset($_SESSION['login']) && isset($_COOKIE['login'])) {
      $_SESSION['login'] = $_COOKIE['login'];
    }
  }

  public function login($id)
  {
    // Inicio sesión y guardo el ID
    // cualquier otro dato que necesite
    // la DB
    $_SESSION['id'] = $id;
  }

  public function loginControl()
  {
    // controlo si está logueado
    return isset($_SESSION['id']);
  }

  public function usuarioLogueado(DB $db)
  {
    // Aca interactuamos con nuestra $db del tipo DB
    // Si en una instancia del tipo Auth ($this),
    // login control es true
    // asigno el valor de $_SESSION["login"]
    // a una variable $mail
    if ($this->loginControl()) {
       $email = $_SESSION['login'];
       return $db->buscamePorEmail($email); // para decirle a la $db que busque ese $mail
    } else {
      return NULL;
    }
  }

  public function logout()
  {
    session_destroy();
    setcookie('login', '', -1);
  }
}
