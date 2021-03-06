<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Cliente.php');
require_once realpath('../dao/interfaz/IClienteDao.php');

class ClienteFacade {

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
   * Crea un objeto Cliente a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcliente
   * @param cliente_nombre
   * @param cliente_telefono
   * @param cliente_direccion
   * @param cliente_correo
   * @param cliente_estado
   * @param cliente_cc
   */
  public static function insert( $idcliente,  $cliente_nombre,  $cliente_telefono,  $cliente_direccion,  $cliente_correo,  $cliente_estado,  $cliente_cc){
      $cliente = new Cliente();
      $cliente->setIdcliente($idcliente); 
      $cliente->setCliente_nombre($cliente_nombre); 
      $cliente->setCliente_telefono($cliente_telefono); 
      $cliente->setCliente_direccion($cliente_direccion); 
      $cliente->setCliente_correo($cliente_correo); 
      $cliente->setCliente_estado($cliente_estado); 
      $cliente->setCliente_cc($cliente_cc); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clienteDao =$FactoryDao->getclienteDao(self::getDataBaseDefault());
     $rtn = $clienteDao->insert($cliente);
     $clienteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cliente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcliente
   * @return El objeto en base de datos o Null
   */
  public static function select($idcliente){
      $cliente = new Cliente();
      $cliente->setIdcliente($idcliente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clienteDao =$FactoryDao->getclienteDao(self::getDataBaseDefault());
     $result = $clienteDao->select($cliente);
     $clienteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cliente  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcliente
   * @param cliente_nombre
   * @param cliente_telefono
   * @param cliente_direccion
   * @param cliente_correo
   * @param cliente_estado
   * @param cliente_cc
   */
  public static function update($idcliente, $cliente_nombre, $cliente_telefono, $cliente_direccion, $cliente_correo, $cliente_estado, $cliente_cc){
      $cliente = self::select($idcliente);
      $cliente->setCliente_nombre($cliente_nombre); 
      $cliente->setCliente_telefono($cliente_telefono); 
      $cliente->setCliente_direccion($cliente_direccion); 
      $cliente->setCliente_correo($cliente_correo); 
      $cliente->setCliente_estado($cliente_estado); 
      $cliente->setCliente_cc($cliente_cc); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clienteDao =$FactoryDao->getclienteDao(self::getDataBaseDefault());
     $clienteDao->update($cliente);
     $clienteDao->close();
  }

  /**
   * Elimina un objeto Cliente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcliente
   */
  public static function delete($idcliente){
      $cliente = new Cliente();
      $cliente->setIdcliente($idcliente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clienteDao =$FactoryDao->getclienteDao(self::getDataBaseDefault());
     $clienteDao->delete($cliente);
     $clienteDao->close();
  }

  /**
   * Lista todos los objetos Cliente de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cliente en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clienteDao =$FactoryDao->getclienteDao(self::getDataBaseDefault());
     $result = $clienteDao->listAll();
     $clienteDao->close();
     return $result;
  }


}
//That`s all folks!