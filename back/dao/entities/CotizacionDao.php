<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mátalos a todos, y que dios elija  \\

include_once realpath('../dao/interfaz/ICotizacionDao.php');
include_once realpath('../dto/Cotizacion.php');
include_once realpath('../dto/Cliente.php');
include_once realpath('../dto/Empleado.php');

class CotizacionDao implements ICotizacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cotizacion){
      $idcotizacion=$cotizacion->getIdcotizacion();
$coti_total=$cotizacion->getCoti_total();
$cot_estado=$cotizacion->getCot_estado();
$cot_observaciones=$cotizacion->getCot_observaciones();
$clientes_idclient=$cotizacion->getClientes_idclient()->getIdcliente();
$empleado_idemp=$cotizacion->getEmpleado_idemp()->getIdemp();

      try {
          $sql= "INSERT INTO `cotizacion`( `idcotizacion`, `coti_total`, `cot_estado`, `cot_observaciones`, `clientes_idclient`, `empleado_idemp`)"
          ."VALUES ('$idcotizacion','$coti_total','$cot_estado','$cot_observaciones','$clientes_idclient','$empleado_idemp')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cotizacion){
      $idcotizacion=$cotizacion->getIdcotizacion();

      try {
          $sql= "SELECT `idcotizacion`, `coti_total`, `cot_estado`, `cot_observaciones`, `clientes_idclient`, `empleado_idemp`"
          ."FROM `cotizacion`"
          ."WHERE `idcotizacion`='$idcotizacion'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cotizacion->setIdcotizacion($data[$i]['idcotizacion']);
          $cotizacion->setCoti_total($data[$i]['coti_total']);
          $cotizacion->setCot_estado($data[$i]['cot_estado']);
          $cotizacion->setCot_observaciones($data[$i]['cot_observaciones']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['clientes_idclient']);
           $cotizacion->setClientes_idclient($cliente);
           $empleado = new Empleado();
           $empleado->setIdemp($data[$i]['empleado_idemp']);
           $cotizacion->setEmpleado_idemp($empleado);

          }
      return $cotizacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cotizacion){
      $idcotizacion=$cotizacion->getIdcotizacion();
$coti_total=$cotizacion->getCoti_total();
$cot_estado=$cotizacion->getCot_estado();
$cot_observaciones=$cotizacion->getCot_observaciones();
$clientes_idclient=$cotizacion->getClientes_idclient()->getIdcliente();
$empleado_idemp=$cotizacion->getEmpleado_idemp()->getIdemp();

      try {
          $sql= "UPDATE `cotizacion` SET`idcotizacion`='$idcotizacion' ,`coti_total`='$coti_total' ,`cot_estado`='$cot_estado' ,`cot_observaciones`='$cot_observaciones' ,`clientes_idclient`='$clientes_idclient' ,`empleado_idemp`='$empleado_idemp' WHERE `idcotizacion`='$idcotizacion' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cotizacion){
      $idcotizacion=$cotizacion->getIdcotizacion();

      try {
          $sql ="DELETE FROM `cotizacion` WHERE `idcotizacion`='$idcotizacion'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cotizacion en la base de datos.
     * @return ArrayList<Cotizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idcotizacion`, `coti_total`, `cot_estado`, `cot_observaciones`, `clientes_idclient`, `empleado_idemp`"
          ."FROM `cotizacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cotizacion= new Cotizacion();
          $cotizacion->setIdcotizacion($data[$i]['idcotizacion']);
          $cotizacion->setCoti_total($data[$i]['coti_total']);
          $cotizacion->setCot_estado($data[$i]['cot_estado']);
          $cotizacion->setCot_observaciones($data[$i]['cot_observaciones']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['clientes_idclient']);
           $cotizacion->setClientes_idclient($cliente);
           $empleado = new Empleado();
           $empleado->setIdemp($data[$i]['empleado_idemp']);
           $cotizacion->setEmpleado_idemp($empleado);

          array_push($lista,$cotizacion);
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