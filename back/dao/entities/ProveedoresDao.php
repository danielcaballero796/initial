<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Oh gloria de las glorias, oh divino testamento de la eterna majestad de la creación de dios  \\

include_once realpath('../dao/interfaz/IProveedoresDao.php');
include_once realpath('../dto/Proveedores.php');

class ProveedoresDao implements IProveedoresDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Proveedores en la base de datos.
     * @param proveedores objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($proveedores){
      $idProveedores=$proveedores->getIdProveedores();
$nombre=$proveedores->getNombre();
$correo=$proveedores->getCorreo();
$telf=$proveedores->getTelf();

      try {
          $sql= "INSERT INTO `proveedores`( `idProveedores`, `nombre`, `correo`, `telf`)"
          ."VALUES ('$idProveedores','$nombre','$correo','$telf')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($proveedores){
      $idProveedores=$proveedores->getIdProveedores();

      try {
          $sql= "SELECT `idProveedores`, `nombre`, `correo`, `telf`"
          ."FROM `proveedores`"
          ."WHERE `idProveedores`='$idProveedores'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $proveedores->setIdProveedores($data[$i]['idProveedores']);
          $proveedores->setNombre($data[$i]['nombre']);
          $proveedores->setCorreo($data[$i]['correo']);
          $proveedores->setTelf($data[$i]['telf']);

          }
      return $proveedores;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($proveedores){
      $idProveedores=$proveedores->getIdProveedores();
$nombre=$proveedores->getNombre();
$correo=$proveedores->getCorreo();
$telf=$proveedores->getTelf();

      try {
          $sql= "UPDATE `proveedores` SET`idProveedores`='$idProveedores' ,`nombre`='$nombre' ,`correo`='$correo' ,`telf`='$telf' WHERE `idProveedores`='$idProveedores' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($proveedores){
      $idProveedores=$proveedores->getIdProveedores();

      try {
          $sql ="DELETE FROM `proveedores` WHERE `idProveedores`='$idProveedores'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @return ArrayList<Proveedores> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idProveedores`, `nombre`, `correo`, `telf`"
          ."FROM `proveedores`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $proveedores= new Proveedores();
          $proveedores->setIdProveedores($data[$i]['idProveedores']);
          $proveedores->setNombre($data[$i]['nombre']);
          $proveedores->setCorreo($data[$i]['correo']);
          $proveedores->setTelf($data[$i]['telf']);

          array_push($lista,$proveedores);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!