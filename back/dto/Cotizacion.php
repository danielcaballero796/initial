<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\


class Cotizacion {

  private $idcotizacion;
  private $coti_total;
  private $cot_estado;
  private $cot_observaciones;
  private $clientes_idclient;
  private $empleado_idemp;

    /**
     * Constructor de Cotizacion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idcotizacion
     * @return idcotizacion
     */
  public function getIdcotizacion(){
      return $this->idcotizacion;
  }

    /**
     * Modifica el valor correspondiente a idcotizacion
     * @param idcotizacion
     */
  public function setIdcotizacion($idcotizacion){
      $this->idcotizacion = $idcotizacion;
  }
    /**
     * Devuelve el valor correspondiente a coti_total
     * @return coti_total
     */
  public function getCoti_total(){
      return $this->coti_total;
  }

    /**
     * Modifica el valor correspondiente a coti_total
     * @param coti_total
     */
  public function setCoti_total($coti_total){
      $this->coti_total = $coti_total;
  }
    /**
     * Devuelve el valor correspondiente a cot_estado
     * @return cot_estado
     */
  public function getCot_estado(){
      return $this->cot_estado;
  }

    /**
     * Modifica el valor correspondiente a cot_estado
     * @param cot_estado
     */
  public function setCot_estado($cot_estado){
      $this->cot_estado = $cot_estado;
  }
    /**
     * Devuelve el valor correspondiente a cot_observaciones
     * @return cot_observaciones
     */
  public function getCot_observaciones(){
      return $this->cot_observaciones;
  }

    /**
     * Modifica el valor correspondiente a cot_observaciones
     * @param cot_observaciones
     */
  public function setCot_observaciones($cot_observaciones){
      $this->cot_observaciones = $cot_observaciones;
  }
    /**
     * Devuelve el valor correspondiente a clientes_idclient
     * @return clientes_idclient
     */
  public function getClientes_idclient(){
      return $this->clientes_idclient;
  }

    /**
     * Modifica el valor correspondiente a clientes_idclient
     * @param clientes_idclient
     */
  public function setClientes_idclient($clientes_idclient){
      $this->clientes_idclient = $clientes_idclient;
  }
    /**
     * Devuelve el valor correspondiente a empleado_idemp
     * @return empleado_idemp
     */
  public function getEmpleado_idemp(){
      return $this->empleado_idemp;
  }

    /**
     * Modifica el valor correspondiente a empleado_idemp
     * @param empleado_idemp
     */
  public function setEmpleado_idemp($empleado_idemp){
      $this->empleado_idemp = $empleado_idemp;
  }


}
//That`s all folks!