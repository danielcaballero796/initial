<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../facade/ProveedoresFacade.php');


class ProveedoresController {

    public static function insert(){
        $idProveedores = strip_tags($_POST['idProveedores']);
        $nombre = strip_tags($_POST['nombre']);
        $correo = strip_tags($_POST['correo']);
        $telf = strip_tags($_POST['telf']);
        ProveedoresFacade::insert($idProveedores, $nombre, $correo, $telf);
return true;
    }

    public static function listAll(){
        $list=ProveedoresFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Proveedores) {	
	       $rta.="{
	    \"idProveedores\":\"{$Proveedores->getidProveedores()}\",
	    \"nombre\":\"{$Proveedores->getnombre()}\",
	    \"correo\":\"{$Proveedores->getcorreo()}\",
	    \"telf\":\"{$Proveedores->gettelf()}\"
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