<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Únicamente cuando se pierde todo somos libres para actuar.  \\


class Cliente {

  private $idcliente;
  private $cliente_nombre;
  private $cliente_telefono;
  private $cliente_direccion;
  private $cliente_correo;
  private $cliente_estado;
  private $cliente_cc;

    /**
     * Constructor de Cliente
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idcliente
     * @return idcliente
     */
  public function getIdcliente(){
      return $this->idcliente;
  }

    /**
     * Modifica el valor correspondiente a idcliente
     * @param idcliente
     */
  public function setIdcliente($idcliente){
      $this->idcliente = $idcliente;
  }
    /**
     * Devuelve el valor correspondiente a cliente_nombre
     * @return cliente_nombre
     */
  public function getCliente_nombre(){
      return $this->cliente_nombre;
  }

    /**
     * Modifica el valor correspondiente a cliente_nombre
     * @param cliente_nombre
     */
  public function setCliente_nombre($cliente_nombre){
      $this->cliente_nombre = $cliente_nombre;
  }
    /**
     * Devuelve el valor correspondiente a cliente_telefono
     * @return cliente_telefono
     */
  public function getCliente_telefono(){
      return $this->cliente_telefono;
  }

    /**
     * Modifica el valor correspondiente a cliente_telefono
     * @param cliente_telefono
     */
  public function setCliente_telefono($cliente_telefono){
      $this->cliente_telefono = $cliente_telefono;
  }
    /**
     * Devuelve el valor correspondiente a cliente_direccion
     * @return cliente_direccion
     */
  public function getCliente_direccion(){
      return $this->cliente_direccion;
  }

    /**
     * Modifica el valor correspondiente a cliente_direccion
     * @param cliente_direccion
     */
  public function setCliente_direccion($cliente_direccion){
      $this->cliente_direccion = $cliente_direccion;
  }
    /**
     * Devuelve el valor correspondiente a cliente_correo
     * @return cliente_correo
     */
  public function getCliente_correo(){
      return $this->cliente_correo;
  }

    /**
     * Modifica el valor correspondiente a cliente_correo
     * @param cliente_correo
     */
  public function setCliente_correo($cliente_correo){
      $this->cliente_correo = $cliente_correo;
  }
    /**
     * Devuelve el valor correspondiente a cliente_estado
     * @return cliente_estado
     */
  public function getCliente_estado(){
      return $this->cliente_estado;
  }

    /**
     * Modifica el valor correspondiente a cliente_estado
     * @param cliente_estado
     */
  public function setCliente_estado($cliente_estado){
      $this->cliente_estado = $cliente_estado;
  }
    /**
     * Devuelve el valor correspondiente a cliente_cc
     * @return cliente_cc
     */
  public function getCliente_cc(){
      return $this->cliente_cc;
  }

    /**
     * Modifica el valor correspondiente a cliente_cc
     * @param cliente_cc
     */
  public function setCliente_cc($cliente_cc){
      $this->cliente_cc = $cliente_cc;
  }


}
//That`s all folks!