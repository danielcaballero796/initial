<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Product_proveedor.php');
require_once realpath('../dao/interfaz/IProduct_proveedorDao.php');
require_once realpath('../dto/Pedido_prov.php');

class Product_proveedorFacade {

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
   * Crea un objeto Product_proveedor a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos_prov
   * @param cantidad_prov
   * @param precio_cto_prov
   * @param total_dto_prov
   * @param proveedor
   * @param nombre_prov
   * @param ref_prov
   * @param pedido_prov_idpedido_prov
   */
  public static function insert( $idproductos_prov,  $cantidad_prov,  $precio_cto_prov,  $total_dto_prov,  $proveedor,  $nombre_prov,  $ref_prov,  $pedido_prov_idpedido_prov){
      $product_proveedor = new Product_proveedor();
      $product_proveedor->setIdproductos_prov($idproductos_prov); 
      $product_proveedor->setCantidad_prov($cantidad_prov); 
      $product_proveedor->setPrecio_cto_prov($precio_cto_prov); 
      $product_proveedor->setTotal_dto_prov($total_dto_prov); 
      $product_proveedor->setProveedor($proveedor); 
      $product_proveedor->setNombre_prov($nombre_prov); 
      $product_proveedor->setRef_prov($ref_prov); 
      $product_proveedor->setPedido_prov_idpedido_prov($pedido_prov_idpedido_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $product_proveedorDao =$FactoryDao->getproduct_proveedorDao(self::getDataBaseDefault());
     $rtn = $product_proveedorDao->insert($product_proveedor);
     $product_proveedorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Product_proveedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos_prov
   * @return El objeto en base de datos o Null
   */
  public static function select($idproductos_prov){
      $product_proveedor = new Product_proveedor();
      $product_proveedor->setIdproductos_prov($idproductos_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $product_proveedorDao =$FactoryDao->getproduct_proveedorDao(self::getDataBaseDefault());
     $result = $product_proveedorDao->select($product_proveedor);
     $product_proveedorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Product_proveedor  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos_prov
   * @param cantidad_prov
   * @param precio_cto_prov
   * @param total_dto_prov
   * @param proveedor
   * @param nombre_prov
   * @param ref_prov
   * @param pedido_prov_idpedido_prov
   */
  public static function update($idproductos_prov, $cantidad_prov, $precio_cto_prov, $total_dto_prov, $proveedor, $nombre_prov, $ref_prov, $pedido_prov_idpedido_prov){
      $product_proveedor = self::select($idproductos_prov);
      $product_proveedor->setCantidad_prov($cantidad_prov); 
      $product_proveedor->setPrecio_cto_prov($precio_cto_prov); 
      $product_proveedor->setTotal_dto_prov($total_dto_prov); 
      $product_proveedor->setProveedor($proveedor); 
      $product_proveedor->setNombre_prov($nombre_prov); 
      $product_proveedor->setRef_prov($ref_prov); 
      $product_proveedor->setPedido_prov_idpedido_prov($pedido_prov_idpedido_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $product_proveedorDao =$FactoryDao->getproduct_proveedorDao(self::getDataBaseDefault());
     $product_proveedorDao->update($product_proveedor);
     $product_proveedorDao->close();
  }

  /**
   * Elimina un objeto Product_proveedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idproductos_prov
   */
  public static function delete($idproductos_prov){
      $product_proveedor = new Product_proveedor();
      $product_proveedor->setIdproductos_prov($idproductos_prov); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $product_proveedorDao =$FactoryDao->getproduct_proveedorDao(self::getDataBaseDefault());
     $product_proveedorDao->delete($product_proveedor);
     $product_proveedorDao->close();
  }

  /**
   * Lista todos los objetos Product_proveedor de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Product_proveedor en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $product_proveedorDao =$FactoryDao->getproduct_proveedorDao(self::getDataBaseDefault());
     $result = $product_proveedorDao->listAll();
     $product_proveedorDao->close();
     return $result;
  }


}
//That`s all folks!