<?php //require_once ('../classes/DbMySQL.php'); ?>
<?php
class Usuario
{
  private $id;
  private $nombre;
  private $apellido;
  private $email;
  private $pass;
  private $avatar;
  private $activo;

  public function __construct($id = null, $nombre, $apellido, $email, $pass, $avatar, $activo)
  {
    // Si el id que llega es null es porque
    // no está registrado.
    // Así que le hasheamos la pass
    // sinó dejo la pass como está para que
    // sea usada en password_verify()
    if (is_null($id)) {
      $this->setPass($pass);
    } else {
      $this->pass = $pass;
    }

    $this->setId($id);
    $this->setNombre($nombre);
    $this->setApellido($apellido);
    $this->setEmail($email);
    $this->setAvatar($avatar);
    $this->setActivo($activo);
  }

  // G E T T E R S
  public function getId()
  {
    return $this->id;
  }

   public function getNombre()
  {
    return $this->nombre;
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPass()
  {
    return $this->pass;
  }

  public function getAvatar()
  {
    return $this->avatar;
  }

  public function getActivo()
  {
    return $this->activo;
  }

  // S E T T E R S
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setPass($pass)
  {
    $this->pass = password_hash($pass, PASSWORD_DEFAULT);
  }

  public function setAvatar($avatar) {
    $this->avatar = $avatar;
  }

  public function setActivo($activo) {
    $this->activo = $activo;
  }
}
