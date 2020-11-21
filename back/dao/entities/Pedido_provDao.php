<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\

include_once realpath('../dao/interfaz/IPedido_provDao.php');
include_once realpath('../dto/Pedido_prov.php');
include_once realpath('../dto/Cliente.php');
include_once realpath('../dto/Empleado.php');

class Pedido_provDao implements IPedido_provDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($pedido_prov){
      $idpedido_prov=$pedido_prov->getIdpedido_prov();
$fecha_prov=$pedido_prov->getFecha_prov();
$fecha_insercion_prov=$pedido_prov->getFecha_insercion_prov();
$total_prov=$pedido_prov->getTotal_prov();
$stado_prov=$pedido_prov->getStado_prov();
$observacion_prov=$pedido_prov->getObservacion_prov();
$clientes_idclient=$pedido_prov->getClientes_idclient()->getIdcliente();
$empleado_idemp=$pedido_prov->getEmpleado_idemp()->getIdemp();

      try {
          $sql= "INSERT INTO `pedido_prov`( `idpedido_prov`, `fecha_prov`, `fecha_insercion_prov`, `total_prov`, `stado_prov`, `observacion_prov`, `clientes_idclient`, `empleado_idemp`)"
          ."VALUES ('$idpedido_prov','$fecha_prov','$fecha_insercion_prov','$total_prov','$stado_prov','$observacion_prov','$clientes_idclient','$empleado_idemp')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($pedido_prov){
      $idpedido_prov=$pedido_prov->getIdpedido_prov();

      try {
          $sql= "SELECT `idpedido_prov`, `fecha_prov`, `fecha_insercion_prov`, `total_prov`, `stado_prov`, `observacion_prov`, `clientes_idclient`, `empleado_idemp`"
          ."FROM `pedido_prov`"
          ."WHERE `idpedido_prov`='$idpedido_prov'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $pedido_prov->setIdpedido_prov($data[$i]['idpedido_prov']);
          $pedido_prov->setFecha_prov($data[$i]['fecha_prov']);
          $pedido_prov->setFecha_insercion_prov($data[$i]['fecha_insercion_prov']);
          $pedido_prov->setTotal_prov($data[$i]['total_prov']);
          $pedido_prov->setStado_prov($data[$i]['stado_prov']);
          $pedido_prov->setObservacion_prov($data[$i]['observacion_prov']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['clientes_idclient']);
           $pedido_prov->setClientes_idclient($cliente);
           $empleado = new Empleado();
           $empleado->setIdemp($data[$i]['empleado_idemp']);
           $pedido_prov->setEmpleado_idemp($empleado);

          }
      return $pedido_prov;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($pedido_prov){
      $idpedido_prov=$pedido_prov->getIdpedido_prov();
$fecha_prov=$pedido_prov->getFecha_prov();
$fecha_insercion_prov=$pedido_prov->getFecha_insercion_prov();
$total_prov=$pedido_prov->getTotal_prov();
$stado_prov=$pedido_prov->getStado_prov();
$observacion_prov=$pedido_prov->getObservacion_prov();
$clientes_idclient=$pedido_prov->getClientes_idclient()->getIdcliente();
$empleado_idemp=$pedido_prov->getEmpleado_idemp()->getIdemp();

      try {
          $sql= "UPDATE `pedido_prov` SET`idpedido_prov`='$idpedido_prov' ,`fecha_prov`='$fecha_prov' ,`fecha_insercion_prov`='$fecha_insercion_prov' ,`total_prov`='$total_prov' ,`stado_prov`='$stado_prov' ,`observacion_prov`='$observacion_prov' ,`clientes_idclient`='$clientes_idclient' ,`empleado_idemp`='$empleado_idemp' WHERE `idpedido_prov`='$idpedido_prov' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($pedido_prov){
      $idpedido_prov=$pedido_prov->getIdpedido_prov();

      try {
          $sql ="DELETE FROM `pedido_prov` WHERE `idpedido_prov`='$idpedido_prov'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Pedido_prov en la base de datos.
     * @return ArrayList<Pedido_prov> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idpedido_prov`, `fecha_prov`, `fecha_insercion_prov`, `total_prov`, `stado_prov`, `observacion_prov`, `clientes_idclient`, `empleado_idemp`"
          ."FROM `pedido_prov`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $pedido_prov= new Pedido_prov();
          $pedido_prov->setIdpedido_prov($data[$i]['idpedido_prov']);
          $pedido_prov->setFecha_prov($data[$i]['fecha_prov']);
          $pedido_prov->setFecha_insercion_prov($data[$i]['fecha_insercion_prov']);
          $pedido_prov->setTotal_prov($data[$i]['total_prov']);
          $pedido_prov->setStado_prov($data[$i]['stado_prov']);
          $pedido_prov->setObservacion_prov($data[$i]['observacion_prov']);
           $cliente = new Cliente();
           $cliente->setIdcliente($data[$i]['clientes_idclient']);
           $pedido_prov->setClientes_idclient($cliente);
           $empleado = new Empleado();
           $empleado->setIdemp($data[$i]['empleado_idemp']);
           $pedido_prov->setEmpleado_idemp($empleado);

          array_push($lista,$pedido_prov);
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