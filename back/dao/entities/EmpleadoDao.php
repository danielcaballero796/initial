<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\

include_once realpath('../dao/interfaz/IEmpleadoDao.php');
include_once realpath('../dto/Empleado.php');

class EmpleadoDao implements IEmpleadoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Empleado en la base de datos.
     * @param empleado objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empleado){
      $idemp=$empleado->getIdemp();
$emp_nombre=$empleado->getEmp_nombre();
$emp_correo=$empleado->getEmp_correo();
$emp_tel=$empleado->getEmp_tel();

      try {
          $sql= "INSERT INTO `empleado`( `idemp`, `emp_nombre`, `emp_correo`, `emp_tel`)"
          ."VALUES ('$idemp','$emp_nombre','$emp_correo','$emp_tel')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empleado){
      $idemp=$empleado->getIdemp();

      try {
          $sql= "SELECT `idemp`, `emp_nombre`, `emp_correo`, `emp_tel`"
          ."FROM `empleado`"
          ."WHERE `idemp`='$idemp'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empleado->setIdemp($data[$i]['idemp']);
          $empleado->setEmp_nombre($data[$i]['emp_nombre']);
          $empleado->setEmp_correo($data[$i]['emp_correo']);
          $empleado->setEmp_tel($data[$i]['emp_tel']);

          }
      return $empleado;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Empleado en la base de datos.
     * @param empleado objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empleado){
      $idemp=$empleado->getIdemp();
$emp_nombre=$empleado->getEmp_nombre();
$emp_correo=$empleado->getEmp_correo();
$emp_tel=$empleado->getEmp_tel();

      try {
          $sql= "UPDATE `empleado` SET`idemp`='$idemp' ,`emp_nombre`='$emp_nombre' ,`emp_correo`='$emp_correo' ,`emp_tel`='$emp_tel' WHERE `idemp`='$idemp' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Empleado en la base de datos.
     * @param empleado objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empleado){
      $idemp=$empleado->getIdemp();

      try {
          $sql ="DELETE FROM `empleado` WHERE `idemp`='$idemp'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empleado en la base de datos.
     * @return ArrayList<Empleado> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idemp`, `emp_nombre`, `emp_correo`, `emp_tel`"
          ."FROM `empleado`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $empleado= new Empleado();
          $empleado->setIdemp($data[$i]['idemp']);
          $empleado->setEmp_nombre($data[$i]['emp_nombre']);
          $empleado->setEmp_correo($data[$i]['emp_correo']);
          $empleado->setEmp_tel($data[$i]['emp_tel']);

          array_push($lista,$empleado);
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