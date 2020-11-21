<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que hay una vida afuera de tu cuarto?  \\
include_once realpath('../facade/ClienteFacade.php');


class ClienteController {

    public static function insert(){
        $idcliente = strip_tags($_POST['idcliente']);
        $cliente_nombre = strip_tags($_POST['cliente_nombre']);
        $cliente_telefono = strip_tags($_POST['cliente_telefono']);
        $cliente_direccion = strip_tags($_POST['cliente_direccion']);
        $cliente_correo = strip_tags($_POST['cliente_correo']);
        $cliente_estado = strip_tags($_POST['cliente_estado']);
        $cliente_cc = strip_tags($_POST['cliente_cc']);
        ClienteFacade::insert($idcliente, $cliente_nombre, $cliente_telefono, $cliente_direccion, $cliente_correo, $cliente_estado, $cliente_cc);
return true;
    }

    public static function listAll(){
        $list=ClienteFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Cliente) {	
	       $rta.="{
	    \"idcliente\":\"{$Cliente->getidcliente()}\",
	    \"cliente_nombre\":\"{$Cliente->getcliente_nombre()}\",
	    \"cliente_telefono\":\"{$Cliente->getcliente_telefono()}\",
	    \"cliente_direccion\":\"{$Cliente->getcliente_direccion()}\",
	    \"cliente_correo\":\"{$Cliente->getcliente_correo()}\",
	    \"cliente_estado\":\"{$Cliente->getcliente_estado()}\",
	    \"cliente_cc\":\"{$Cliente->getcliente_cc()}\"
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