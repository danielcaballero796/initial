<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\

include_once realpath('../dao/interfaz/IRegistrosDao.php');
include_once realpath('../dto/Registros.php');
include_once realpath('../dto/Cliente.php');

class RegistrosDao implements IRegistrosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Registros en la base de datos.
     * @param registros objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($registros){
      $idReg=$registros->getIdReg();
$fecha_reg=$registros->getFecha_reg();
$tem_reg=$registros->getTem_reg();
$sintomas_reg=$registros->getSintomas_reg();
$cliente_idcliente=$registros->getCliente_idcliente()->getIdcliente();

      try {
          $sql= "INSERT INTO `registros`( `idReg`, `fecha_reg`, `tem_reg`, `sintomas_reg`, `Cliente_idcliente`)"
          ."VALUES ('$idReg','$fecha_reg','$tem_reg','$sintomas_reg','$cliente_idcliente')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Registros en la base de datos.
     * @param registros objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($registros){
      $idReg=$registros->getIdReg();

      try {
          $sql= "SELECT `idReg`, `fecha_reg`, `tem_reg`, `sintomas_reg`, `Cliente_idcliente`"
          ."FROM `registros`"
          ."WHERE `idReg`='$idReg'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $registros->setIdReg($data[$i]['idReg']);
          $registros->setFecha_reg($data[$i]['fecha_reg']);
          $registros->setTem_reg($data[$i]['tem_reg']);
          $registros->setSintomas_reg($data[$i]['sintomas_reg']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['Cliente_idcliente']);
           $registros->setCliente_idcliente($cliente);

          }
      return $registros;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Registros en la base de datos.
     * @param registros objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($registros){
      $idReg=$registros->getIdReg();
$fecha_reg=$registros->getFecha_reg();
$tem_reg=$registros->getTem_reg();
$sintomas_reg=$registros->getSintomas_reg();
$cliente_idcliente=$registros->getCliente_idcliente()->getIdcliente();

      try {
          $sql= "UPDATE `registros` SET`idReg`='$idReg' ,`fecha_reg`='$fecha_reg' ,`tem_reg`='$tem_reg' ,`sintomas_reg`='$sintomas_reg' ,`Cliente_idcliente`='$cliente_idcliente' WHERE `idReg`='$idReg' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Registros en la base de datos.
     * @param registros objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($registros){
      $idReg=$registros->getIdReg();

      try {
          $sql ="DELETE FROM `registros` WHERE `idReg`='$idReg'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Registros en la base de datos.
     * @return ArrayList<Registros> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idReg`, `fecha_reg`, `tem_reg`, `sintomas_reg`, `Cliente_idcliente`"
          ."FROM `registros`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $registros= new Registros();
          $registros->setIdReg($data[$i]['idReg']);
          $registros->setFecha_reg($data[$i]['fecha_reg']);
          $registros->setTem_reg($data[$i]['tem_reg']);
          $registros->setSintomas_reg($data[$i]['sintomas_reg']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['Cliente_idcliente']);
           $registros->setCliente_idcliente($cliente);

          array_push($lista,$registros);
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