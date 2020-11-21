<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\


class Listadeproductos {

  private $idListadeProductos;
  private $nombre;
  private $referencia;
  private $idProveedores;

    /**
     * Constructor de Listadeproductos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idListadeProductos
     * @return idListadeProductos
     */
  public function getIdListadeProductos(){
      return $this->idListadeProductos;
  }

    /**
     * Modifica el valor correspondiente a idListadeProductos
     * @param idListadeProductos
     */
  public function setIdListadeProductos($idListadeProductos){
      $this->idListadeProductos = $idListadeProductos;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a referencia
     * @return referencia
     */
  public function getReferencia(){
      return $this->referencia;
  }

    /**
     * Modifica el valor correspondiente a referencia
     * @param referencia
     */
  public function setReferencia($referencia){
      $this->referencia = $referencia;
  }
    /**
     * Devuelve el valor correspondiente a idProveedores
     * @return idProveedores
     */
  public function getIdProveedores(){
      return $this->idProveedores;
  }

    /**
     * Modifica el valor correspondiente a idProveedores
     * @param idProveedores
     */
  public function setIdProveedores($idProveedores){
      $this->idProveedores = $idProveedores;
  }


}
//That`s all folks!