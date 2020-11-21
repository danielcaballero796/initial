<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Oh gloria de las glorias, oh divino testamento de la eterna majestad de la creación de dios  \\

include_once realpath('../dao/interfaz/IProduct_proveedorDao.php');
include_once realpath('../dto/Product_proveedor.php');
include_once realpath('../dto/Pedido_prov.php');

class Product_proveedorDao implements IProduct_proveedorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($product_proveedor){
      $idproductos_prov=$product_proveedor->getIdproductos_prov();
$cantidad_prov=$product_proveedor->getCantidad_prov();
$precio_cto_prov=$product_proveedor->getPrecio_cto_prov();
$total_dto_prov=$product_proveedor->getTotal_dto_prov();
$proveedor=$product_proveedor->getProveedor();
$nombre_prov=$product_proveedor->getNombre_prov();
$ref_prov=$product_proveedor->getRef_prov();
$pedido_prov_idpedido_prov=$product_proveedor->getPedido_prov_idpedido_prov()->getIdpedido_prov();

      try {
          $sql= "INSERT INTO `product_proveedor`( `idproductos_prov`, `cantidad_prov`, `precio_cto_prov`, `total_dto_prov`, `proveedor`, `nombre_prov`, `ref_prov`, `pedido_prov_idpedido_prov`)"
          ."VALUES ('$idproductos_prov','$cantidad_prov','$precio_cto_prov','$total_dto_prov','$proveedor','$nombre_prov','$ref_prov','$pedido_prov_idpedido_prov')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($product_proveedor){
      $idproductos_prov=$product_proveedor->getIdproductos_prov();

      try {
          $sql= "SELECT `idproductos_prov`, `cantidad_prov`, `precio_cto_prov`, `total_dto_prov`, `proveedor`, `nombre_prov`, `ref_prov`, `pedido_prov_idpedido_prov`"
          ."FROM `product_proveedor`"
          ."WHERE `idproductos_prov`='$idproductos_prov'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $product_proveedor->setIdproductos_prov($data[$i]['idproductos_prov']);
          $product_proveedor->setCantidad_prov($data[$i]['cantidad_prov']);
          $product_proveedor->setPrecio_cto_prov($data[$i]['precio_cto_prov']);
          $product_proveedor->setTotal_dto_prov($data[$i]['total_dto_prov']);
          $product_proveedor->setProveedor($data[$i]['proveedor']);
          $product_proveedor->setNombre_prov($data[$i]['nombre_prov']);
          $product_proveedor->setRef_prov($data[$i]['ref_prov']);
           $pedido_prov = new Pedido_prov();
           $pedido_prov->setIdpedido_prov($data[$i]['pedido_prov_idpedido_prov']);
           $product_proveedor->setPedido_prov_idpedido_prov($pedido_prov);

          }
      return $product_proveedor;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($product_proveedor){
      $idproductos_prov=$product_proveedor->getIdproductos_prov();
$cantidad_prov=$product_proveedor->getCantidad_prov();
$precio_cto_prov=$product_proveedor->getPrecio_cto_prov();
$total_dto_prov=$product_proveedor->getTotal_dto_prov();
$proveedor=$product_proveedor->getProveedor();
$nombre_prov=$product_proveedor->getNombre_prov();
$ref_prov=$product_proveedor->getRef_prov();
$pedido_prov_idpedido_prov=$product_proveedor->getPedido_prov_idpedido_prov()->getIdpedido_prov();

      try {
          $sql= "UPDATE `product_proveedor` SET`idproductos_prov`='$idproductos_prov' ,`cantidad_prov`='$cantidad_prov' ,`precio_cto_prov`='$precio_cto_prov' ,`total_dto_prov`='$total_dto_prov' ,`proveedor`='$proveedor' ,`nombre_prov`='$nombre_prov' ,`ref_prov`='$ref_prov' ,`pedido_prov_idpedido_prov`='$pedido_prov_idpedido_prov' WHERE `idproductos_prov`='$idproductos_prov' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($product_proveedor){
      $idproductos_prov=$product_proveedor->getIdproductos_prov();

      try {
          $sql ="DELETE FROM `product_proveedor` WHERE `idproductos_prov`='$idproductos_prov'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Product_proveedor en la base de datos.
     * @return ArrayList<Product_proveedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idproductos_prov`, `cantidad_prov`, `precio_cto_prov`, `total_dto_prov`, `proveedor`, `nombre_prov`, `ref_prov`, `pedido_prov_idpedido_prov`"
          ."FROM `product_proveedor`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $product_proveedor= new Product_proveedor();
          $product_proveedor->setIdproductos_prov($data[$i]['idproductos_prov']);
          $product_proveedor->setCantidad_prov($data[$i]['cantidad_prov']);
          $product_proveedor->setPrecio_cto_prov($data[$i]['precio_cto_prov']);
          $product_proveedor->setTotal_dto_prov($data[$i]['total_dto_prov']);
          $product_proveedor->setProveedor($data[$i]['proveedor']);
          $product_proveedor->setNombre_prov($data[$i]['nombre_prov']);
          $product_proveedor->setRef_prov($data[$i]['ref_prov']);
           $pedido_prov = new Pedido_prov();
           $pedido_prov->setIdpedido_prov($data[$i]['pedido_prov_idpedido_prov']);
           $product_proveedor->setPedido_prov_idpedido_prov($pedido_prov);

          array_push($lista,$product_proveedor);
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