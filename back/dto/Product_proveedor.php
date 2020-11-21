<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora tú puedes ser el tipo con el látigo  \\


class Product_proveedor {

  private $idproductos_prov;
  private $cantidad_prov;
  private $precio_cto_prov;
  private $total_dto_prov;
  private $proveedor;
  private $nombre_prov;
  private $ref_prov;
  private $pedido_prov_idpedido_prov;

    /**
     * Constructor de Product_proveedor
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idproductos_prov
     * @return idproductos_prov
     */
  public function getIdproductos_prov(){
      return $this->idproductos_prov;
  }

    /**
     * Modifica el valor correspondiente a idproductos_prov
     * @param idproductos_prov
     */
  public function setIdproductos_prov($idproductos_prov){
      $this->idproductos_prov = $idproductos_prov;
  }
    /**
     * Devuelve el valor correspondiente a cantidad_prov
     * @return cantidad_prov
     */
  public function getCantidad_prov(){
      return $this->cantidad_prov;
  }

    /**
     * Modifica el valor correspondiente a cantidad_prov
     * @param cantidad_prov
     */
  public function setCantidad_prov($cantidad_prov){
      $this->cantidad_prov = $cantidad_prov;
  }
    /**
     * Devuelve el valor correspondiente a precio_cto_prov
     * @return precio_cto_prov
     */
  public function getPrecio_cto_prov(){
      return $this->precio_cto_prov;
  }

    /**
     * Modifica el valor correspondiente a precio_cto_prov
     * @param precio_cto_prov
     */
  public function setPrecio_cto_prov($precio_cto_prov){
      $this->precio_cto_prov = $precio_cto_prov;
  }
    /**
     * Devuelve el valor correspondiente a total_dto_prov
     * @return total_dto_prov
     */
  public function getTotal_dto_prov(){
      return $this->total_dto_prov;
  }

    /**
     * Modifica el valor correspondiente a total_dto_prov
     * @param total_dto_prov
     */
  public function setTotal_dto_prov($total_dto_prov){
      $this->total_dto_prov = $total_dto_prov;
  }
    /**
     * Devuelve el valor correspondiente a proveedor
     * @return proveedor
     */
  public function getProveedor(){
      return $this->proveedor;
  }

    /**
     * Modifica el valor correspondiente a proveedor
     * @param proveedor
     */
  public function setProveedor($proveedor){
      $this->proveedor = $proveedor;
  }
    /**
     * Devuelve el valor correspondiente a nombre_prov
     * @return nombre_prov
     */
  public function getNombre_prov(){
      return $this->nombre_prov;
  }

    /**
     * Modifica el valor correspondiente a nombre_prov
     * @param nombre_prov
     */
  public function setNombre_prov($nombre_prov){
      $this->nombre_prov = $nombre_prov;
  }
    /**
     * Devuelve el valor correspondiente a ref_prov
     * @return ref_prov
     */
  public function getRef_prov(){
      return $this->ref_prov;
  }

    /**
     * Modifica el valor correspondiente a ref_prov
     * @param ref_prov
     */
  public function setRef_prov($ref_prov){
      $this->ref_prov = $ref_prov;
  }
    /**
     * Devuelve el valor correspondiente a pedido_prov_idpedido_prov
     * @return pedido_prov_idpedido_prov
     */
  public function getPedido_prov_idpedido_prov(){
      return $this->pedido_prov_idpedido_prov;
  }

    /**
     * Modifica el valor correspondiente a pedido_prov_idpedido_prov
     * @param pedido_prov_idpedido_prov
     */
  public function setPedido_prov_idpedido_prov($pedido_prov_idpedido_prov){
      $this->pedido_prov_idpedido_prov = $pedido_prov_idpedido_prov;
  }


}
//That`s all folks!