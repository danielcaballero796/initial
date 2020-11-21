<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Listadeproductos.php');
require_once realpath('../dao/interfaz/IListadeproductosDao.php');
require_once realpath('../dto/Proveedores.php');

class ListadeproductosFacade {

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
   * Crea un objeto Listadeproductos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idListadeProductos
   * @param nombre
   * @param referencia
   * @param idProveedores
   */
  public static function insert( $idListadeProductos,  $nombre,  $referencia,  $idProveedores){
      $listadeproductos = new Listadeproductos();
      $listadeproductos->setIdListadeProductos($idListadeProductos); 
      $listadeproductos->setNombre($nombre); 
      $listadeproductos->setReferencia($referencia); 
      $listadeproductos->setIdProveedores($idProveedores); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $listadeproductosDao =$FactoryDao->getlistadeproductosDao(self::getDataBaseDefault());
     $rtn = $listadeproductosDao->insert($listadeproductos);
     $listadeproductosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Listadeproductos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idListadeProductos
   * @return El objeto en base de datos o Null
   */
  public static function select($idListadeProductos){
      $listadeproductos = new Listadeproductos();
      $listadeproductos->setIdListadeProductos($idListadeProductos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $listadeproductosDao =$FactoryDao->getlistadeproductosDao(self::getDataBaseDefault());
     $result = $listadeproductosDao->select($listadeproductos);
     $listadeproductosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Listadeproductos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idListadeProductos
   * @param nombre
   * @param referencia
   * @param idProveedores
   */
  public static function update($idListadeProductos, $nombre, $referencia, $idProveedores){
      $listadeproductos = self::select($idListadeProductos);
      $listadeproductos->setNombre($nombre); 
      $listadeproductos->setReferencia($referencia); 
      $listadeproductos->setIdProveedores($idProveedores); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $listadeproductosDao =$FactoryDao->getlistadeproductosDao(self::getDataBaseDefault());
     $listadeproductosDao->update($listadeproductos);
     $listadeproductosDao->close();
  }

  /**
   * Elimina un objeto Listadeproductos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idListadeProductos
   */
  public static function delete($idListadeProductos){
      $listadeproductos = new Listadeproductos();
      $listadeproductos->setIdListadeProductos($idListadeProductos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $listadeproductosDao =$FactoryDao->getlistadeproductosDao(self::getDataBaseDefault());
     $listadeproductosDao->delete($listadeproductos);
     $listadeproductosDao->close();
  }

  /**
   * Lista todos los objetos Listadeproductos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Listadeproductos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $listadeproductosDao =$FactoryDao->getlistadeproductosDao(self::getDataBaseDefault());
     $result = $listadeproductosDao->listAll();
     $listadeproductosDao->close();
     return $result;
  }


}
//That`s all folks!