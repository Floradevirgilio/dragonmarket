<?php

require_once ('DB.php');      // DBMySQL es hija de DB, require_once
require_once ('Usuario.php'); // y tambien va a mandarse mensajes con la clase Usuario
require_once ('CarroTemporal.php');

class DBMySQL extends DB
{
  private $conexion; // private $conexion se va a usar solo dentro de esta clase

  public function __construct()
  {
    // El constructor es basicamente PDO
    $dsn      = 'mysql:host=localhost;dbname=dm_180728;charset=utf8';
    $username = 'root';
    $pass     = '';

    //dato opcional para poder ver errores
    $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

    try {
      $this->conexion = new PDO($dsn, $username, $pass, $opt);
      // a $conexion le asigno el new PDO,
      // así luego escribimos "conexion->"
      // y el metodo de PDO que necesite acceder.
    } catch( PDOException $Exception ) {
      // Si no podemos conectarnos entramos al catch
      // preguntamos por el error y lo mostramos
      echo "La conexion a la base de datos falló: " . $Exception->getMessage();
    }
  }

// Funciones con la DB

  function guardarUsuario(Usuario $usuario)
  {
    // guarda un nuevo user en la db.
    // Recibe un $usuario del tipo Usuario
    // El parámetro ID lo asigna MySQL
    $query = $this->conexion->prepare('INSERT INTO users
                                        VALUES(default,
                                               :nombre,
                                               :apellido,
                                               :email,
                                               :pass,
                                               :avatar,
                                               :activo)');
    $query->bindValue(':nombre',   $usuario->getNombre());   // Bindeo de valores.
    $query->bindValue(':apellido', $usuario->getApellido()); // En clase lo corregimos a bindParam.
    $query->bindValue(':email',    $usuario->getEmail());    // Con bindValue podemos pasar tanto valores
    $query->bindValue(':pass',     $usuario->getPass());     // como variables.
    $query->bindValue(':avatar',   $usuario->getAvatar());
    $query->bindValue(':activo',   $usuario->getActivo());
    // Con bindParam solamente podemos pasar variables,
    // y si bien estamos pasando eso con getEmail() y getPass(),
    // lo cambio aca para que se entienda la diferencia entre ambos
    // y se vea como en este caso particular, hubiera funcionado igual.

   try {
      $query->execute(); // Ejecuto la query a $conexion
                         // le asigno el new PDO, así luego
                         // escribimos "conexion->" y el metodo
                         // de PDO que necesite acceder.
    } catch (Exception $e) {
      echo 'El alta falló' . $e->getMessage();
    }

    $id = $this->conexion->lastInsertId();

    //Genero el Id, con "->" le mando un "mensaje" a "conexion",
    // que de nuevo, es lo que se genera en el constructor
    // cuando en el TRY le digo
    // '$this->conexion = new PDO($dsn, $username, $pass);'
    // El mensaje que mando en forma de funcion es
    // "DAME EL ID QUE ACABAS DE SETEAR POR DEFAULT"

    // $usuario->setId($id);

    // Pido ese ID que acaba de crear

    // return $usuario;

    return;

    // retorno el ID
  }

  public function guardarAvatar($id) {
    $nombre = $_FILES["avatar"]["name"]; // nombre imagen
    $archivo = $_FILES["avatar"]["tmp_name"]; // nombre temporal
    $ext = pathinfo($nombre, PATHINFO_EXTENSION); // extension

    $path = "../../public/uploads/$id.$ext"; //armamos el nuevo path
    move_uploaded_file($archivo, $path);

    $query = $this->conexion->prepare("UPDATE users SET avatar = '$id.$ext' WHERE id = $id");
    $query->execute();
  }

  public function guardarCarroTemporal(CarroTemporal $carroTemporal)
  {
    $query = $this->conexion->prepare('INSERT INTO carro_temporal
                                       VALUES (default,
                                               :productos_id,
                                               :cantidad,
                                               :users_id,
                                               :creado)');

    $query->bindParam(':productos_id', $carroTemporal->getProductos_id());
    $query->bindParam(':cantidad', $carroTemporal->getCantidad());
    $query->bindParam(':users_id', $carroTemporal->getUsers_id());
    $query->bindParam(':creado', $carroTemporal->getCreado());

    try {
      $ctrl=true;
      $query->execute();
    } catch (Exception $e) {
      $ctrl=false;
      echo 'El alta falló' . $e->getMessage();
    }

    return $ctrl;
  }

  public function buscarUsuarioPorId($id)
  {
    $query = $this->conexion->prepare('SELECT * FROM users WHERE id = :id');
    $query->bindValue(':id', $id);
    $query->execute();

    $usuarioFormatoArray = $query->fetch();
    // fetch de la data del user en la db
    if ($usuarioFormatoArray) {
      // si lo encontró, lo instancio
      $usuario = new Usuario($usuarioFormatoArray['id'],
                             $usuarioFormatoArray['nombre'],
                             $usuarioFormatoArray['apellido'],
                             $usuarioFormatoArray['email'],
                             $usuarioFormatoArray['pass'],
                             $usuarioFormatoArray['avatar'],
                             $usuarioFormatoArray['activo']);
      // Nueva instancia de Usuario de un usuario que
      // ya tenemos registrado, para usarlo y manipular
      // los datos de MySQL y transformarlos en un objeto.
      return $usuario;
    } else {
      // y si no hay $usuarioFormatoArray,
      return null; // devolveme null.
    }
  }

  public function buscamePorEmail($email)
  {
    $query = $this->conexion->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindValue(':email', $email);
    $query->execute();

    $usuarioFormatoArray = $query->fetch();
    // fetch de la data del user en la db
    if ($usuarioFormatoArray) {
      // si lo encontró, lo instancio
      $usuario = new Usuario($usuarioFormatoArray['id'],
                             $usuarioFormatoArray['nombre'],
                             $usuarioFormatoArray['apellido'],
                             $usuarioFormatoArray['email'],
                             $usuarioFormatoArray['pass'],
                             $usuarioFormatoArray['avatar'],
                             $usuarioFormatoArray['activo']);
      // Nueva instancia de Usuario de un usuario que
      // ya tenemos registrado, para usarlo y manipular
      // los datos de MySQL y transformarlos en un objeto.
      return $usuario;
    } else {
      // y si no hay $usuarioFormatoArray,
      return null; // devolveme null.
    }
  }

  public function traeTodaLaBase()
  {
    $query = $this->conexion->prepare('SELECT * FROM users');
    $query->execute();

    $usersFormatoArray = $query->fetchAll(PDO::FETCH_ASSOC);
    //Esta variable va a traer todos los users
    // en formato array, pero queremos objetos...
    $usersFormatoClase = [];
    // asi que armamos nuestro array de users
    // EN FORMATO DE CLASE y lo "foreacheamos" (?)
    foreach ($usersFormatoArray as $usuario):
    // array DE OBJETOS del tipo Usuario.
    // Como se procesan despues,
    // es responsabilidad de otra clase.
    $usersFormatoClase[] = new Usuario($usuario['email'],
                                       $usuario['pass'],
                                       $usuario['id'],
                                       $usuario['activo']);
    endforeach;

    return $usersFormatoClase;
    // El array que devuelve este metodo es un ARRAY DE OBJETOS.
  }

  public function leerLineasProductos($activo)
  {
    $query = $this->conexion->prepare('SELECT l.nombre, l.id
                                        FROM lineas l
                                        WHERE l.activo = :activo
                                        ORDER BY l.nombre');

    $query->bindValue(':activo', $activo);
    $query->execute();

    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }

  public function mostrarProductosLinea($id, $activo)
  {
    $query = $this->conexion->prepare('SELECT p.id, p.descripcion, p.precio, ct.cantidad, ct.users_id
                                        FROM productos p
                                        LEFT JOIN carro_temporal ct
                                        ON p.id = ct.productos_id
                                        WHERE p.lineas_id = :id AND p.activo = :activo
                                        ORDER BY p.descripcion');

    $query->bindValue(':id', $id);
    $query->bindValue(':activo', $activo);
    $query->fetchAll(PDO::FETCH_ASSOC);
    $query->execute();

    return $query;
  }

  public function mostrarProductosTexto($texto, $activo)
  {
    $query = $this->conexion->prepare('SELECT p.id,
                                              p.descripcion,
                                              p.precio,
                                              ct.cantidad,
                                              ct.users_id
                                        FROM productos p
                                        LEFT JOIN carro_temporal ct
                                        ON p.id = ct.productos_id
                                        WHERE p.descripcion LIKE :texto
                                            AND p.activo = :activo
                                        ORDER BY p.descripcion');
    $query->bindValue(':texto', $texto);
    $query->bindValue(':activo', $activo);
    $query->fetchAll(PDO::FETCH_ASSOC);
    $query->execute();

    return $query;
  }

  public function productosCarroTemporal($id)
  {
    // Si el usuario tiene un carrito pendiente
    // Traigo el detalle de los productos de la DB
    // con su id
    $query = $this->conexion->prepare ('SELECT p.id,
                                               p.descripcion,
                                               p.precio,
                                               ct.id,
                                               ct.cantidad,
                                               ct.users_id,
                                               ct.cantidad * p.precio AS subtotal
                                      FROM carro_temporal ct
                                      LEFT JOIN productos p
                                      ON ct.productos_id = p.id
                                      WHERE ct.users_id = :id
                                      ORDER BY p.descripcion');

    $query->bindValue(':id', $id);
    $query->fetchAll(PDO::FETCH_ASSOC);
    $query->execute();

    return $query;
  }

  public function actualizarCarroTemporal($id, $cantidad)
  {
    // Query p/actualizar
    $query = $this->conexion->prepare('UPDATE carro_temporal
                                        SET cantidad = :cantidad
                                        WHERE id = :id');

    $query->bindValue(':id', $id);
    $query->bindValue(':cantidad', $cantidad);

    try {
      $ctrl = true;
      $query->execute();
    } catch (Exception $e) {
      $ctrl = false;
      echo 'El alta falló' . $e->getMessage();
    }
    return $ctrl;
  }

  public function borrarItemCarroTemporal($id)
  {
    // Query p/borrar
    // ya traigo el id del renglón
    // no necesito mover ningún otro dato
    $query = $this->conexion->prepare('DELETE FROM carro_temporal
                                        WHERE id = :id');

    $query->bindValue(':id', $id);

    try {
      $ctrl = true;
      $query->execute();
    } catch (Exception $e) {
      $ctrl = false;
      echo 'El alta falló' . $e->getMessage();
    }
    return $ctrl;
  }

  public function contarItemsCarroTemporal($id)
  {
    // Retorno la cantidad de productos en el carro
    $query = $this->conexion->prepare('SELECT * FROM carro_temporal
                                         WHERE users_id=:id');

    $query->bindvalue(':id', $id);
    $query->fetchAll(PDO::FETCH_ASSOC);
    $query->execute();

    return $query;
  }

  public function buscarOfertasPc($lineas_id, $limit)
  {
    // de momento está simplemente buscando combos. Sin ningun otro criterio.
    $query = $this->conexion->prepare("SELECT * FROM productos
                                        WHERE lineas_id = $lineas_id
                                        ORDER BY descripcion
                                        LIMIT $limit;");
    $query->execute();

    $pcsArmadasArray = $query->fetchAll(PDO::FETCH_ASSOC);
    return $pcsArmadasArray;
  }

  public function buscarLinea($linea) {
    $query = $this->conexion->prepare("SELECT nombre FROM lineas WHERE id = $linea");
    $query->execute();

    $linea = $query->fetchColumn();
    return $linea;
  }

  public function borrarCarroTemporalUser($id)
  {
    // Query p/borrar
    // traigo el id del clinete
    // y borro todos los items que tenga
    $query = $this->conexion->prepare('DELETE FROM carro_temporal
                                        WHERE users_id = :id');

    $query->bindValue(':id', $id);

    try {
      $ctrl = true;
      $query->execute();
    } catch (Exception $e) {
      $ctrl = false;
      echo 'El alta falló' . $e->getMessage();
    }
    return $ctrl;
  }

}
