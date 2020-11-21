<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es tu vida y se acaba a cada minuto.  \\
include_once realpath('../facade/RegistrosFacade.php');


class RegistrosController {

    public static function insert(){
        $idReg = strip_tags($_POST['idReg']);
        $fecha_reg = strip_tags($_POST['fecha_reg']);
        $tem_reg = strip_tags($_POST['tem_reg']);
        $sintomas_reg = strip_tags($_POST['sintomas_reg']);
        $Cliente_idcliente = strip_tags($_POST['Cliente_idcliente']);
        $cliente= new Cliente();
        $cliente->setIdcliente($Cliente_idcliente);
        RegistrosFacade::insert($idReg, $fecha_reg, $tem_reg, $sintomas_reg, $cliente);
return true;
    }

    public static function listAll(){
        $list=RegistrosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Registros) {	
	       $rta.="{
	    \"idReg\":\"{$Registros->getidReg()}\",
	    \"fecha_reg\":\"{$Registros->getfecha_reg()}\",
	    \"tem_reg\":\"{$Registros->gettem_reg()}\",
	    \"sintomas_reg\":\"{$Registros->getsintomas_reg()}\",
	    \"Cliente_idcliente_idcliente\":\"{$Registros->getCliente_idcliente()->getidcliente()}\"
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