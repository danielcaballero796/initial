<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Todos los animales son iguales, pero algunos animales son más iguales que otros  \\

include_once realpath('../dao/interfaz/IListadeproductosDao.php');
include_once realpath('../dto/Listadeproductos.php');
include_once realpath('../dto/Proveedores.php');

class ListadeproductosDao implements IListadeproductosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($listadeproductos){
      $idListadeProductos=$listadeproductos->getIdListadeProductos();
$nombre=$listadeproductos->getNombre();
$referencia=$listadeproductos->getReferencia();
$idProveedores=$listadeproductos->getIdProveedores()->getIdProveedores();

      try {
          $sql= "INSERT INTO `listadeproductos`( `idListadeProductos`, `nombre`, `referencia`, `idProveedores`)"
          ."VALUES ('$idListadeProductos','$nombre','$referencia','$idProveedores')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($listadeproductos){
      $idListadeProductos=$listadeproductos->getIdListadeProductos();

      try {
          $sql= "SELECT `idListadeProductos`, `nombre`, `referencia`, `idProveedores`"
          ."FROM `listadeproductos`"
          ."WHERE `idListadeProductos`='$idListadeProductos'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $listadeproductos->setIdListadeProductos($data[$i]['idListadeProductos']);
          $listadeproductos->setNombre($data[$i]['nombre']);
          $listadeproductos->setReferencia($data[$i]['referencia']);
           $proveedores = new Proveedores();
           $proveedores->setIdProveedores($data[$i]['idProveedores']);
           $listadeproductos->setIdProveedores($proveedores);

          }
      return $listadeproductos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($listadeproductos){
      $idListadeProductos=$listadeproductos->getIdListadeProductos();
$nombre=$listadeproductos->getNombre();
$referencia=$listadeproductos->getReferencia();
$idProveedores=$listadeproductos->getIdProveedores()->getIdProveedores();

      try {
          $sql= "UPDATE `listadeproductos` SET`idListadeProductos`='$idListadeProductos' ,`nombre`='$nombre' ,`referencia`='$referencia' ,`idProveedores`='$idProveedores' WHERE `idListadeProductos`='$idListadeProductos' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($listadeproductos){
      $idListadeProductos=$listadeproductos->getIdListadeProductos();

      try {
          $sql ="DELETE FROM `listadeproductos` WHERE `idListadeProductos`='$idListadeProductos'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Listadeproductos en la base de datos.
     * @return ArrayList<Listadeproductos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idListadeProductos`, `nombre`, `referencia`, `idProveedores`"
          ."FROM `listadeproductos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $listadeproductos= new Listadeproductos();
          $listadeproductos->setIdListadeProductos($data[$i]['idListadeProductos']);
          $listadeproductos->setNombre($data[$i]['nombre']);
          $listadeproductos->setReferencia($data[$i]['referencia']);
           $proveedores = new Proveedores();
           $proveedores->setIdProveedores($data[$i]['idProveedores']);
           $listadeproductos->setIdProveedores($proveedores);

          array_push($lista,$listadeproductos);
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