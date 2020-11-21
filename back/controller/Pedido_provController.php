<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No te olvides de quitar mis comentarios  \\
include_once realpath('../facade/Pedido_provFacade.php');


class Pedido_provController {

    public static function insert(){
        $idpedido_prov = strip_tags($_POST['idpedido_prov']);
        $fecha_prov = strip_tags($_POST['fecha_prov']);
        $fecha_insercion_prov = strip_tags($_POST['fecha_insercion_prov']);
        $total_prov = strip_tags($_POST['total_prov']);
        $stado_prov = strip_tags($_POST['stado_prov']);
        $observacion_prov = strip_tags($_POST['observacion_prov']);
        $Cliente_idcliente = strip_tags($_POST['clientes_idclient']);
        $cliente= new Cliente();
        $cliente->setIdcliente($Cliente_idcliente);
        $Empleado_idemp = strip_tags($_POST['empleado_idemp']);
        $empleado= new Empleado();
        $empleado->setIdemp($Empleado_idemp);
        Pedido_provFacade::insert($idpedido_prov, $fecha_prov, $fecha_insercion_prov, $total_prov, $stado_prov, $observacion_prov, $cliente, $empleado);
return true;
    }

    public static function listAll(){
        $list=Pedido_provFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Pedido_prov) {	
	       $rta.="{
	    \"idpedido_prov\":\"{$Pedido_prov->getidpedido_prov()}\",
	    \"fecha_prov\":\"{$Pedido_prov->getfecha_prov()}\",
	    \"fecha_insercion_prov\":\"{$Pedido_prov->getfecha_insercion_prov()}\",
	    \"total_prov\":\"{$Pedido_prov->gettotal_prov()}\",
	    \"stado_prov\":\"{$Pedido_prov->getstado_prov()}\",
	    \"observacion_prov\":\"{$Pedido_prov->getobservacion_prov()}\",
	    \"clientes_idclient_idcliente\":\"{$Pedido_prov->getclientes_idclient()->getidcliente()}\",
	    \"empleado_idemp_idemp\":\"{$Pedido_prov->getempleado_idemp()->getidemp()}\"
	       },";
        }

        if($rta!=""){
	       $rta = substr($rta, 0, -1);
	       $msg="{\"msg\":\"exito\"}";
        }else{
	       $msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	       $rta="{\"result\":\"No se encontraron registros.\"}";	
        }
        return "[{$msg},{$rta}]";
    }

}
//That`s all folks!