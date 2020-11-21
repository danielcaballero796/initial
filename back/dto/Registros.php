<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\


class Registros {

  private $idReg;
  private $fecha_reg;
  private $tem_reg;
  private $sintomas_reg;
  private $Cliente_idcliente;

    /**
     * Constructor de Registros
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idReg
     * @return idReg
     */
  public function getIdReg(){
      return $this->idReg;
  }

    /**
     * Modifica el valor correspondiente a idReg
     * @param idReg
     */
  public function setIdReg($idReg){
      $this->idReg = $idReg;
  }
    /**
     * Devuelve el valor correspondiente a fecha_reg
     * @return fecha_reg
     */
  public function getFecha_reg(){
      return $this->fecha_reg;
  }

    /**
     * Modifica el valor correspondiente a fecha_reg
     * @param fecha_reg
     */
  public function setFecha_reg($fecha_reg){
      $this->fecha_reg = $fecha_reg;
  }
    /**
     * Devuelve el valor correspondiente a tem_reg
     * @return tem_reg
     */
  public function getTem_reg(){
      return $this->tem_reg;
  }

    /**
     * Modifica el valor correspondiente a tem_reg
     * @param tem_reg
     */
  public function setTem_reg($tem_reg){
      $this->tem_reg = $tem_reg;
  }
    /**
     * Devuelve el valor correspondiente a sintomas_reg
     * @return sintomas_reg
     */
  public function getSintomas_reg(){
      return $this->sintomas_reg;
  }

    /**
     * Modifica el valor correspondiente a sintomas_reg
     * @param sintomas_reg
     */
  public function setSintomas_reg($sintomas_reg){
      $this->sintomas_reg = $sintomas_reg;
  }
    /**
     * Devuelve el valor correspondiente a Cliente_idcliente
     * @return Cliente_idcliente
     */
  public function getCliente_idcliente(){
      return $this->Cliente_idcliente;
  }

    /**
     * Modifica el valor correspondiente a Cliente_idcliente
     * @param Cliente_idcliente
     */
  public function setCliente_idcliente($cliente_idcliente){
      $this->Cliente_idcliente = $cliente_idcliente;
  }


}
//That`s all folks!