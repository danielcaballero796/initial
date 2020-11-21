<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\


class Productos_cotizacion {

  private $idproductos;
  private $cantidad;
  private $pvp_iva;
  private $dto;
  private $precio_cto;
  private $total_dto;
  private $cotizacion_idcotizacion;
  private $descrip_pro;
  private $nombre_pro;
  private $categoria_idcateg_nom;

    /**
     * Constructor de Productos_cotizacion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idproductos
     * @return idproductos
     */
  public function getIdproductos(){
      return $this->idproductos;
  }

    /**
     * Modifica el valor correspondiente a idproductos
     * @param idproductos
     */
  public function setIdproductos($idproductos){
      $this->idproductos = $idproductos;
  }
    /**
     * Devuelve el valor correspondiente a cantidad
     * @return cantidad
     */
  public function getCantidad(){
      return $this->cantidad;
  }

    /**
     * Modifica el valor correspondiente a cantidad
     * @param cantidad
     */
  public function setCantidad($cantidad){
      $this->cantidad = $cantidad;
  }
    /**
     * Devuelve el valor correspondiente a pvp_iva
     * @return pvp_iva
     */
  public function getPvp_iva(){
      return $this->pvp_iva;
  }

    /**
     * Modifica el valor correspondiente a pvp_iva
     * @param pvp_iva
     */
  public function setPvp_iva($pvp_iva){
      $this->pvp_iva = $pvp_iva;
  }
    /**
     * Devuelve el valor correspondiente a dto
     * @return dto
     */
  public function getDto(){
      return $this->dto;
  }

    /**
     * Modifica el valor correspondiente a dto
     * @param dto
     */
  public function setDto($dto){
      $this->dto = $dto;
  }
    /**
     * Devuelve el valor correspondiente a precio_cto
     * @return precio_cto
     */
  public function getPrecio_cto(){
      return $this->precio_cto;
  }

    /**
     * Modifica el valor correspondiente a precio_cto
     * @param precio_cto
     */
  public function setPrecio_cto($precio_cto){
      $this->precio_cto = $precio_cto;
  }
    /**
     * Devuelve el valor correspondiente a total_dto
     * @return total_dto
     */
  public function getTotal_dto(){
      return $this->total_dto;
  }

    /**
     * Modifica el valor correspondiente a total_dto
     * @param total_dto
     */
  public function setTotal_dto($total_dto){
      $this->total_dto = $total_dto;
  }
    /**
     * Devuelve el valor correspondiente a cotizacion_idcotizacion
     * @return cotizacion_idcotizacion
     */
  public function getCotizacion_idcotizacion(){
      return $this->cotizacion_idcotizacion;
  }

    /**
     * Modifica el valor correspondiente a cotizacion_idcotizacion
     * @param cotizacion_idcotizacion
     */
  public function setCotizacion_idcotizacion($cotizacion_idcotizacion){
      $this->cotizacion_idcotizacion = $cotizacion_idcotizacion;
  }
    /**
     * Devuelve el valor correspondiente a descrip_pro
     * @return descrip_pro
     */
  public function getDescrip_pro(){
      return $this->descrip_pro;
  }

    /**
     * Modifica el valor correspondiente a descrip_pro
     * @param descrip_pro
     */
  public function setDescrip_pro($descrip_pro){
      $this->descrip_pro = $descrip_pro;
  }
    /**
     * Devuelve el valor correspondiente a nombre_pro
     * @return nombre_pro
     */
  public function getNombre_pro(){
      return $this->nombre_pro;
  }

    /**
     * Modifica el valor correspondiente a nombre_pro
     * @param nombre_pro
     */
  public function setNombre_pro($nombre_pro){
      $this->nombre_pro = $nombre_pro;
  }
    /**
     * Devuelve el valor correspondiente a categoria_idcateg_nom
     * @return categoria_idcateg_nom
     */
  public function getCategoria_idcateg_nom(){
      return $this->categoria_idcateg_nom;
  }

    /**
     * Modifica el valor correspondiente a categoria_idcateg_nom
     * @param categoria_idcateg_nom
     */
  public function setCategoria_idcateg_nom($categoria_idcateg_nom){
      $this->categoria_idcateg_nom = $categoria_idcateg_nom;
  }


}
//That`s all folks!