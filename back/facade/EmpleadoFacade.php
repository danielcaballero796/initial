<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Empleado.php');
require_once realpath('../dao/interfaz/IEmpleadoDao.php');

class EmpleadoFacade {

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
   * Crea un objeto Empleado a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @param emp_nombre
   * @param emp_correo
   * @param emp_tel
   */
  public static function insert( $idemp,  $emp_nombre,  $emp_correo,  $emp_tel){
      $empleado = new Empleado();
      $empleado->setIdemp($idemp); 
      $empleado->setEmp_nombre($emp_nombre); 
      $empleado->setEmp_correo($emp_correo); 
      $empleado->setEmp_tel($emp_tel); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $rtn = $empleadoDao->insert($empleado);
     $empleadoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Empleado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @return El objeto en base de datos o Null
   */
  public static function select($idemp){
      $empleado = new Empleado();
      $empleado->setIdemp($idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $result = $empleadoDao->select($empleado);
     $empleadoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Empleado  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   * @param emp_nombre
   * @param emp_correo
   * @param emp_tel
   */
  public static function update($idemp, $emp_nombre, $emp_correo, $emp_tel){
      $empleado = self::select($idemp);
      $empleado->setEmp_nombre($emp_nombre); 
      $empleado->setEmp_correo($emp_correo); 
      $empleado->setEmp_tel($emp_tel); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $empleadoDao->update($empleado);
     $empleadoDao->close();
  }

  /**
   * Elimina un objeto Empleado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idemp
   */
  public static function delete($idemp){
      $empleado = new Empleado();
      $empleado->setIdemp($idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $empleadoDao->delete($empleado);
     $empleadoDao->close();
  }

  /**
   * Lista todos los objetos Empleado de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Empleado en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $empleadoDao =$FactoryDao->getempleadoDao(self::getDataBaseDefault());
     $result = $empleadoDao->listAll();
     $empleadoDao->close();
     return $result;
  }


}
//That`s all folks!