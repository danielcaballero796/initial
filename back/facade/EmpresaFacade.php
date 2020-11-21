<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella no te quiere </3 mejor ponte a programar  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Empresa.php');
require_once realpath('../dao/interfaz/IEmpresaDao.php');

class EmpresaFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Empresa a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @param emp_nombre
   * @param emp_telefono
   * @param emp_direccion
   * @param emp_correo
   * @param emp_nit
   */
  public static function insert( $idemp,  $emp_nombre,  $emp_telefono,  $emp_direccion,  $emp_correo,  $emp_nit){
      $empresa = new Empresa();
      $empresa->setIdemp($idemp); 
      $empresa->setEmp_nombre($emp_nombre); 
      $empresa->setEmp_telefono($emp_telefono); 
      $empresa->setEmp_direccion($emp_direccion); 
      $empresa->setEmp_correo($emp_correo); 
      $empresa->setEmp_nit($emp_nit); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empresaDao =$FactoryDao->getempresaDao(self::getDataBaseDefault());
     $rtn = $empresaDao->insert($empresa);
     $empresaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Empresa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @return El objeto en base de datos o Null
   */
  public static function select($idemp){
      $empresa = new Empresa();
      $empresa->setIdemp($idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empresaDao =$FactoryDao->getempresaDao(self::getDataBaseDefault());
     $result = $empresaDao->select($empresa);
     $empresaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Empresa  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @param emp_nombre
   * @param emp_telefono
   * @param emp_direccion
   * @param emp_correo
   * @param emp_nit
   */
  public static function update($idemp, $emp_nombre, $emp_telefono, $emp_direccion, $emp_correo, $emp_nit){
      $empresa = self::select($idemp);
      $empresa->setEmp_nombre($emp_nombre); 
      $empresa->setEmp_telefono($emp_telefono); 
      $empresa->setEmp_direccion($emp_direccion); 
      $empresa->setEmp_correo($emp_correo); 
      $empresa->setEmp_nit($emp_nit); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empresaDao =$FactoryDao->getempresaDao(self::getDataBaseDefault());
     $empresaDao->update($empresa);
     $empresaDao->close();
  }

  /**
   * Elimina un objeto Empresa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   */
  public static function delete($idemp){
      $empresa = new Empresa();
      $empresa->setIdemp($idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empresaDao =$FactoryDao->getempresaDao(self::getDataBaseDefault());
     $empresaDao->delete($empresa);
     $empresaDao->close();
  }

  /**
   * Lista todos los objetos Empresa de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Empresa en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empresaDao =$FactoryDao->getempresaDao(self::getDataBaseDefault());
     $result = $empresaDao->listAll();
     $empresaDao->close();
     return $result;
  }


}
//That`s all folks!