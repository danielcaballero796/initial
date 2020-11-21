<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya están los patrones implementados, ahora sí viene lo chido...  \\


class Pedido_prov {

  private $idpedido_prov;
  private $fecha_prov;
  private $fecha_insercion_prov;
  private $total_prov;
  private $stado_prov;
  private $observacion_prov;
  private $clientes_idclient;
  private $empleado_idemp;

    /**
     * Constructor de Pedido_prov
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idpedido_prov
     * @return idpedido_prov
     */
  public function getIdpedido_prov(){
      return $this->idpedido_prov;
  }

    /**
     * Modifica el valor correspondiente a idpedido_prov
     * @param idpedido_prov
     */
  public function setIdpedido_prov($idpedido_prov){
      $this->idpedido_prov = $idpedido_prov;
  }
    /**
     * Devuelve el valor correspondiente a fecha_prov
     * @return fecha_prov
     */
  public function getFecha_prov(){
      return $this->fecha_prov;
  }

    /**
     * Modifica el valor correspondiente a fecha_prov
     * @param fecha_prov
     */
  public function setFecha_prov($fecha_prov){
      $this->fecha_prov = $fecha_prov;
  }
    /**
     * Devuelve el valor correspondiente a fecha_insercion_prov
     * @return fecha_insercion_prov
     */
  public function getFecha_insercion_prov(){
      return $this->fecha_insercion_prov;
  }

    /**
     * Modifica el valor correspondiente a fecha_insercion_prov
     * @param fecha_insercion_prov
     */
  public function setFecha_insercion_prov($fecha_insercion_prov){
      $this->fecha_insercion_prov = $fecha_insercion_prov;
  }
    /**
     * Devuelve el valor correspondiente a total_prov
     * @return total_prov
     */
  public function getTotal_prov(){
      return $this->total_prov;
  }

    /**
     * Modifica el valor correspondiente a total_prov
     * @param total_prov
     */
  public function setTotal_prov($total_prov){
      $this->total_prov = $total_prov;
  }
    /**
     * Devuelve el valor correspondiente a stado_prov
     * @return stado_prov
     */
  public function getStado_prov(){
      return $this->stado_prov;
  }

    /**
     * Modifica el valor correspondiente a stado_prov
     * @param stado_prov
     */
  public function setStado_prov($stado_prov){
      $this->stado_prov = $stado_prov;
  }
    /**
     * Devuelve el valor correspondiente a observacion_prov
     * @return observacion_prov
     */
  public function getObservacion_prov(){
      return $this->observacion_prov;
  }

    /**
     * Modifica el valor correspondiente a observacion_prov
     * @param observacion_prov
     */
  public function setObservacion_prov($observacion_prov){
      $this->observacion_prov = $observacion_prov;
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