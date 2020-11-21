<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando uses Anarchy, Georgie, tú también flotarás  \\

include_once realpath('../dao/interfaz/IEmpresaDao.php');
include_once realpath('../dto/Empresa.php');

class EmpresaDao implements IEmpresaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Empresa en la base de datos.
     * @param empresa objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($empresa){
      $idemp=$empresa->getIdemp();
$emp_nombre=$empresa->getEmp_nombre();
$emp_telefono=$empresa->getEmp_telefono();
$emp_direccion=$empresa->getEmp_direccion();
$emp_correo=$empresa->getEmp_correo();
$emp_nit=$empresa->getEmp_nit();

      try {
          $sql= "INSERT INTO `empresa`( `idemp`, `emp_nombre`, `emp_telefono`, `emp_direccion`, `emp_correo`, `emp_nit`)"
          ."VALUES ('$idemp','$emp_nombre','$emp_telefono','$emp_direccion','$emp_correo','$emp_nit')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empresa en la base de datos.
     * @param empresa objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($empresa){
      $idemp=$empresa->getIdemp();

      try {
          $sql= "SELECT `idemp`, `emp_nombre`, `emp_telefono`, `emp_direccion`, `emp_correo`, `emp_nit`"
          ."FROM `empresa`"
          ."WHERE `idemp`='$idemp'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $empresa->setIdemp($data[$i]['idemp']);
          $empresa->setEmp_nombre($data[$i]['emp_nombre']);
          $empresa->setEmp_telefono($data[$i]['emp_telefono']);
          $empresa->setEmp_direccion($data[$i]['emp_direccion']);
          $empresa->setEmp_correo($data[$i]['emp_correo']);
          $empresa->setEmp_nit($data[$i]['emp_nit']);

          }
      return $empresa;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Empresa en la base de datos.
     * @param empresa objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($empresa){
      $idemp=$empresa->getIdemp();
$emp_nombre=$empresa->getEmp_nombre();
$emp_telefono=$empresa->getEmp_telefono();
$emp_direccion=$empresa->getEmp_direccion();
$emp_correo=$empresa->getEmp_correo();
$emp_nit=$empresa->getEmp_nit();

      try {
          $sql= "UPDATE `empresa` SET`idemp`='$idemp' ,`emp_nombre`='$emp_nombre' ,`emp_telefono`='$emp_telefono' ,`emp_direccion`='$emp_direccion' ,`emp_correo`='$emp_correo' ,`emp_nit`='$emp_nit' WHERE `idemp`='$idemp' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Empresa en la base de datos.
     * @param empresa objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($empresa){
      $idemp=$empresa->getIdemp();

      try {
          $sql ="DELETE FROM `empresa` WHERE `idemp`='$idemp'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Empresa en la base de datos.
     * @return ArrayList<Empresa> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idemp`, `emp_nombre`, `emp_telefono`, `emp_direccion`, `emp_correo`, `emp_nit`"
          ."FROM `empresa`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $empresa= new Empresa();
          $empresa->setIdemp($data[$i]['idemp']);
          $empresa->setEmp_nombre($data[$i]['emp_nombre']);
          $empresa->setEmp_telefono($data[$i]['emp_telefono']);
          $empresa->setEmp_direccion($data[$i]['emp_direccion']);
          $empresa->setEmp_correo($data[$i]['emp_correo']);
          $empresa->setEmp_nit($data[$i]['emp_nit']);

          array_push($lista,$empresa);
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