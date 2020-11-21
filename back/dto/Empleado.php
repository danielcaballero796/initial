<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando eres Ingeniero en sistemas, pero tu vocación siempre fueron los memes  \\


class Empleado {

  private $idemp;
  private $emp_nombre;
  private $emp_correo;
  private $emp_tel;

    /**
     * Constructor de Empleado
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
     * Devuelve el valor correspondiente a emp_tel
     * @return emp_tel
     */
  public function getEmp_tel(){
      return $this->emp_tel;
  }

    /**
     * Modifica el valor correspondiente a emp_tel
     * @param emp_tel
     */
  public function setEmp_tel($emp_tel){
      $this->emp_tel = $emp_tel;
  }


}
//That`s all folks!