<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Anarchy! Apoyando la vagancia desde 2017  \\


class Empresa {

  private $idemp;
  private $emp_nombre;
  private $emp_telefono;
  private $emp_direccion;
  private $emp_correo;
  private $emp_nit;

    /**
     * Constructor de Empresa
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idemp
     * @return idemp
     */
  public function getIdemp(){
      return $this->idemp;
  }

    /**
     * Modifica el valor correspondiente a idemp
     * @param idemp
     */
  public function setIdemp($idemp){
      $this->idemp = $idemp;
  }
    /**
     * Devuelve el valor correspondiente a emp_nombre
     * @return emp_nombre
     */
  public function getEmp_nombre(){
      return $this->emp_nombre;
  }

    /**
     * Modifica el valor correspondiente a emp_nombre
     * @param emp_nombre
     */
  public function setEmp_nombre($emp_nombre){
      $this->emp_nombre = $emp_nombre;
  }
    /**
     * Devuelve el valor correspondiente a emp_telefono
     * @return emp_telefono
     */
  public function getEmp_telefono(){
      return $this->emp_telefono;
  }

    /**
     * Modifica el valor correspondiente a emp_telefono
     * @param emp_telefono
     */
  public function setEmp_telefono($emp_telefono){
      $this->emp_telefono = $emp_telefono;
  }
    /**
     * Devuelve el valor correspondiente a emp_direccion
     * @return emp_direccion
     */
  public function getEmp_direccion(){
      return $this->emp_direccion;
  }

    /**
     * Modifica el valor correspondiente a emp_direccion
     * @param emp_direccion
     */
  public function setEmp_direccion($emp_direccion){
      $this->emp_direccion = $emp_direccion;
  }
    /**
     * Devuelve el valor correspondiente a emp_correo
     * @return emp_correo
     */
  public function getEmp_correo(){
      return $this->emp_correo;
  }

    /**
     * Modifica el valor correspondiente a emp_correo
     * @param emp_correo
     */
  public function setEmp_correo($emp_correo){
      $this->emp_correo = $emp_correo;
  }
    /**
     * Devuelve el valor correspondiente a emp_nit
     * @return emp_nit
     */
  public function getEmp_nit(){
      return $this->emp_nit;
  }

    /**
     * Modifica el valor correspondiente a emp_nit
     * @param emp_nit
     */
  public function setEmp_nit($emp_nit){
      $this->emp_nit = $emp_nit;
  }


}
//That`s all folks!