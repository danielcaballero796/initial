<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Sólo relájate y deja que alguien más lo haga  \\
include_once realpath('../facade/CotizacionFacade.php');


class CotizacionController {

    public static function insert(){
        $idcotizacion = strip_tags($_POST['idcotizacion']);
        $coti_total = strip_tags($_POST['coti_total']);
        $cot_estado = strip_tags($_POST['cot_estado']);
        $cot_observaciones = strip_tags($_POST['cot_observaciones']);
        $Cliente_idcliente = strip_tags($_POST['clientes_idclient']);
        $cliente= new Cliente();
        $cliente->setIdcliente($Cliente_idcliente);
        $Empleado_idemp = strip_tags($_POST['empleado_idemp']);
        $empleado= new Empleado();
        $empleado->setIdemp($Empleado_idemp);
        CotizacionFacade::insert($idcotizacion, $coti_total, $cot_estado, $cot_observaciones, $cliente, $empleado);
return true;
    }

    public static function listAll(){
        $list=CotizacionFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Cotizacion) {	
	       $rta.="{
	    \"idcotizacion\":\"{$Cotizacion->getidcotizacion()}\",
	    \"coti_total\":\"{$Cotizacion->getcoti_total()}\",
	    \"cot_estado\":\"{$Cotizacion->getcot_estado()}\",
	    \"cot_observaciones\":\"{$Cotizacion->getcot_observaciones()}\",
	    \"clientes_idclient_idcliente\":\"{$Cotizacion->getclientes_idclient()->getidcliente()}\",
	    \"empleado_idemp_idemp\":\"{$Cotizacion->getempleado_idemp()->getidemp()}\"
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