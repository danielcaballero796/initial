<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Puedes sugerirnos frases nuevas, se nos están acabando ( u.u)  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Proveedores.php');
require_once realpath('../dao/interfaz/IProveedoresDao.php');

class ProveedoresFacade {

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
   * Crea un objeto Proveedores a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedores
   * @param nombre
   * @param correo
   * @param telf
   */
  public static function insert( $idProveedores,  $nombre,  $correo,  $telf){
      $proveedores = new Proveedores();
      $proveedores->setIdProveedores($idProveedores); 
      $proveedores->setNombre($nombre); 
      $proveedores->setCorreo($correo); 
      $proveedores->setTelf($telf); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $rtn = $proveedoresDao->insert($proveedores);
     $proveedoresDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Proveedores de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedores
   * @return El objeto en base de datos o Null
   */
  public static function select($idProveedores){
      $proveedores = new Proveedores();
      $proveedores->setIdProveedores($idProveedores); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->select($proveedores);
     $proveedoresDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Proveedores  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedores
   * @param nombre
   * @param correo
   * @param telf
   */
  public static function update($idProveedores, $nombre, $correo, $telf){
      $proveedores = self::select($idProveedores);
      $proveedores->setNombre($nombre); 
      $proveedores->setCorreo($correo); 
      $proveedores->setTelf($telf); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $proveedoresDao->update($proveedores);
     $proveedoresDao->close();
  }

  /**
   * Elimina un objeto Proveedores de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProveedores
   */
  public static function delete($idProveedores){
      $proveedores = new Proveedores();
      $proveedores->setIdProveedores($idProveedores); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $proveedoresDao->delete($proveedores);
     $proveedoresDao->close();
  }

  /**
   * Lista todos los objetos Proveedores de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Proveedores en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->listAll();
     $proveedoresDao->close();
     return $result;
  }


}
//That`s all folks!