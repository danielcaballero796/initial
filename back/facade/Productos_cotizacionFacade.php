<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Productos_cotizacion.php');
require_once realpath('../dao/interfaz/IProductos_cotizacionDao.php');
require_once realpath('../dto/Cotizacion.php');
require_once realpath('../dto/Categoria.php');

class Productos_cotizacionFacade {

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
   * Crea un objeto Productos_cotizacion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos
   * @param cantidad
   * @param pvp_iva
   * @param dto
   * @param precio_cto
   * @param total_dto
   * @param cotizacion_idcotizacion
   * @param descrip_pro
   * @param nombre_pro
   * @param categoria_idcateg_nom
   */
  public static function insert( $idproductos,  $cantidad,  $pvp_iva,  $dto,  $precio_cto,  $total_dto,  $cotizacion_idcotizacion,  $descrip_pro,  $nombre_pro,  $categoria_idcateg_nom){
      $productos_cotizacion = new Productos_cotizacion();
      $productos_cotizacion->setIdproductos($idproductos); 
      $productos_cotizacion->setCantidad($cantidad); 
      $productos_cotizacion->setPvp_iva($pvp_iva); 
      $productos_cotizacion->setDto($dto); 
      $productos_cotizacion->setPrecio_cto($precio_cto); 
      $productos_cotizacion->setTotal_dto($total_dto); 
      $productos_cotizacion->setCotizacion_idcotizacion($cotizacion_idcotizacion); 
      $productos_cotizacion->setDescrip_pro($descrip_pro); 
      $productos_cotizacion->setNombre_pro($nombre_pro); 
      $productos_cotizacion->setCategoria_idcateg_nom($categoria_idcateg_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productos_cotizacionDao =$FactoryDao->getproductos_cotizacionDao(self::getDataBaseDefault());
     $rtn = $productos_cotizacionDao->insert($productos_cotizacion);
     $productos_cotizacionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Productos_cotizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos
   * @return El objeto en base de datos o Null
   */
  public static function select($idproductos){
      $productos_cotizacion = new Productos_cotizacion();
      $productos_cotizacion->setIdproductos($idproductos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productos_cotizacionDao =$FactoryDao->getproductos_cotizacionDao(self::getDataBaseDefault());
     $result = $productos_cotizacionDao->select($productos_cotizacion);
     $productos_cotizacionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Productos_cotizacion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos
   * @param cantidad
   * @param pvp_iva
   * @param dto
   * @param precio_cto
   * @param total_dto
   * @param cotizacion_idcotizacion
   * @param descrip_pro
   * @param nombre_pro
   * @param categoria_idcateg_nom
   */
  public static function update($idproductos, $cantidad, $pvp_iva, $dto, $precio_cto, $total_dto, $cotizacion_idcotizacion, $descrip_pro, $nombre_pro, $categoria_idcateg_nom){
      $productos_cotizacion = self::select($idproductos);
      $productos_cotizacion->setCantidad($cantidad); 
      $productos_cotizacion->setPvp_iva($pvp_iva); 
      $productos_cotizacion->setDto($dto); 
      $productos_cotizacion->setPrecio_cto($precio_cto); 
      $productos_cotizacion->setTotal_dto($total_dto); 
      $productos_cotizacion->setCotizacion_idcotizacion($cotizacion_idcotizacion); 
      $productos_cotizacion->setDescrip_pro($descrip_pro); 
      $productos_cotizacion->setNombre_pro($nombre_pro); 
      $productos_cotizacion->setCategoria_idcateg_nom($categoria_idcateg_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productos_cotizacionDao =$FactoryDao->getproductos_cotizacionDao(self::getDataBaseDefault());
     $productos_cotizacionDao->update($productos_cotizacion);
     $productos_cotizacionDao->close();
  }

  /**
   * Elimina un objeto Productos_cotizacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos
   */
  public static function delete($idproductos){
      $productos_cotizacion = new Productos_cotizacion();
      $productos_cotizacion->setIdproductos($idproductos); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productos_cotizacionDao =$FactoryDao->getproductos_cotizacionDao(self::getDataBaseDefault());
     $productos_cotizacionDao->delete($productos_cotizacion);
     $productos_cotizacionDao->close();
  }

  /**
   * Lista todos los objetos Productos_cotizacion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Productos_cotizacion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productos_cotizacionDao =$FactoryDao->getproductos_cotizacionDao(self::getDataBaseDefault());
     $result = $productos_cotizacionDao->listAll();
     $productos_cotizacionDao->close();
     return $result;
  }


}
//That`s all folks!