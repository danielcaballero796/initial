<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Pedido_prov.php');
require_once realpath('../dao/interfaz/IPedido_provDao.php');
require_once realpath('../dto/Cliente.php');
require_once realpath('../dto/Empleado.php');

class Pedido_provFacade {

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
   * Crea un objeto Pedido_prov a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpedido_prov
   * @param fecha_prov
   * @param fecha_insercion_prov
   * @param total_prov
   * @param stado_prov
   * @param observacion_prov
   * @param clientes_idclient
   * @param empleado_idemp
   */
  public static function insert( $idpedido_prov,  $fecha_prov,  $fecha_insercion_prov,  $total_prov,  $stado_prov,  $observacion_prov,  $clientes_idclient,  $empleado_idemp){
      $pedido_prov = new Pedido_prov();
      $pedido_prov->setIdpedido_prov($idpedido_prov); 
      $pedido_prov->setFecha_prov($fecha_prov); 
      $pedido_prov->setFecha_insercion_prov($fecha_insercion_prov); 
      $pedido_prov->setTotal_prov($total_prov); 
      $pedido_prov->setStado_prov($stado_prov); 
      $pedido_prov->setObservacion_prov($observacion_prov); 
      $pedido_prov->setClientes_idclient($clientes_idclient); 
      $pedido_prov->setEmpleado_idemp($empleado_idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pedido_provDao =$FactoryDao->getpedido_provDao(self::getDataBaseDefault());
     $rtn = $pedido_provDao->insert($pedido_prov);
     $pedido_provDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Pedido_prov de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpedido_prov
   * @return El objeto en base de datos o Null
   */
  public static function select($idpedido_prov){
      $pedido_prov = new Pedido_prov();
      $pedido_prov->setIdpedido_prov($idpedido_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pedido_provDao =$FactoryDao->getpedido_provDao(self::getDataBaseDefault());
     $result = $pedido_provDao->select($pedido_prov);
     $pedido_provDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Pedido_prov  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpedido_prov
   * @param fecha_prov
   * @param fecha_insercion_prov
   * @param total_prov
   * @param stado_prov
   * @param observacion_prov
   * @param clientes_idclient
   * @param empleado_idemp
   */
  public static function update($idpedido_prov, $fecha_prov, $fecha_insercion_prov, $total_prov, $stado_prov, $observacion_prov, $clientes_idclient, $empleado_idemp){
      $pedido_prov = self::select($idpedido_prov);
      $pedido_prov->setFecha_prov($fecha_prov); 
      $pedido_prov->setFecha_insercion_prov($fecha_insercion_prov); 
      $pedido_prov->setTotal_prov($total_prov); 
      $pedido_prov->setStado_prov($stado_prov); 
      $pedido_prov->setObservacion_prov($observacion_prov); 
      $pedido_prov->setClientes_idclient($clientes_idclient); 
      $pedido_prov->setEmpleado_idemp($empleado_idemp); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pedido_provDao =$FactoryDao->getpedido_provDao(self::getDataBaseDefault());
     $pedido_provDao->update($pedido_prov);
     $pedido_provDao->close();
  }

  /**
   * Elimina un objeto Pedido_prov de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idpedido_prov
   */
  public static function delete($idpedido_prov){
      $pedido_prov = new Pedido_prov();
      $pedido_prov->setIdpedido_prov($idpedido_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pedido_provDao =$FactoryDao->getpedido_provDao(self::getDataBaseDefault());
     $pedido_provDao->delete($pedido_prov);
     $pedido_provDao->close();
  }

  /**
   * Lista todos los objetos Pedido_prov de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Pedido_prov en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $pedido_provDao =$FactoryDao->getpedido_provDao(self::getDataBaseDefault());
     $result = $pedido_provDao->listAll();
     $pedido_provDao->close();
     return $result;
  }


}
//That`s all folks!