<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Cotizacion.php');
require_once realpath('../dao/interfaz/ICotizacionDao.php');
require_once realpath('../dto/Cliente.php');
require_once realpath('../dto/Empleado.php');

class CotizacionFacade {

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
   * Crea un objeto Cotizacion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcotizacion
   * @param coti_total
   * @param cot_estado
   * @param cot_observaciones
   * @param clientes_idclient
   * @param empleado_idemp
   */
  public static function insert( $idcotizacion,  $coti_total,  $cot_estado,  $cot_observaciones,  $clientes_idclient,  $empleado_idemp){
      $cotizacion = new Cotizacion();
      $cotizacion->setIdcotizacion($idcotizacion); 
      $cotizacion->setCoti_total($coti_total); 
      $cotizacion->setCot_estado($cot_estado); 
      $cotizacion->setCot_observaciones($cot_observaciones); 
      $cotizacion->setClientes_idclient($clientes_idclient); 
      $cotizacion->setEmpleado_idemp($empleado_idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cotizacionDao =$FactoryDao->getcotizacionDao(self::getDataBaseDefault());
     $rtn = $cotizacionDao->insert($cotizacion);
     $cotizacionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cotizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcotizacion
   * @return El objeto en base de datos o Null
   */
  public static function select($idcotizacion){
      $cotizacion = new Cotizacion();
      $cotizacion->setIdcotizacion($idcotizacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cotizacionDao =$FactoryDao->getcotizacionDao(self::getDataBaseDefault());
     $result = $cotizacionDao->select($cotizacion);
     $cotizacionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cotizacion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcotizacion
   * @param coti_total
   * @param cot_estado
   * @param cot_observaciones
   * @param clientes_idclient
   * @param empleado_idemp
   */
  public static function update($idcotizacion, $coti_total, $cot_estado, $cot_observaciones, $clientes_idclient, $empleado_idemp){
      $cotizacion = self::select($idcotizacion);
      $cotizacion->setCoti_total($coti_total); 
      $cotizacion->setCot_estado($cot_estado); 
      $cotizacion->setCot_observaciones($cot_observaciones); 
      $cotizacion->setClientes_idclient($clientes_idclient); 
      $cotizacion->setEmpleado_idemp($empleado_idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cotizacionDao =$FactoryDao->getcotizacionDao(self::getDataBaseDefault());
     $cotizacionDao->update($cotizacion);
     $cotizacionDao->close();
  }

  /**
   * Elimina un objeto Cotizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcotizacion
   */
  public static function delete($idcotizacion){
      $cotizacion = new Cotizacion();
      $cotizacion->setIdcotizacion($idcotizacion); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cotizacionDao =$FactoryDao->getcotizacionDao(self::getDataBaseDefault());
     $cotizacionDao->delete($cotizacion);
     $cotizacionDao->close();
  }

  /**
   * Lista todos los objetos Cotizacion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cotizacion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cotizacionDao =$FactoryDao->getcotizacionDao(self::getDataBaseDefault());
     $result = $cotizacionDao->listAll();
     $cotizacionDao->close();
     return $result;
  }


}
//That`s all folks!