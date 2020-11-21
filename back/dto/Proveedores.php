<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    404 Frase no encontrada  \\


class Proveedores {

  private $idProveedores;
  private $nombre;
  private $correo;
  private $telf;

    /**
     * Constructor de Proveedores
    */
     public function __construct(){}

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
     * Devuelve el valor correspondiente a correo
     * @return correo
     */
  public function getCorreo(){
      return $this->correo;
  }

    /**
     * Modifica el valor correspondiente a correo
     * @param correo
     */
  public function setCorreo($correo){
      $this->correo = $correo;
  }
    /**
     * Devuelve el valor correspondiente a telf
     * @return telf
     */
  public function getTelf(){
      return $this->telf;
  }

    /**
     * Modifica el valor correspondiente a telf
     * @param telf
     */
  public function setTelf($telf){
      $this->telf = $telf;
  }


}
//That`s all folks!