<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\
include_once realpath('../facade/ListadeproductosFacade.php');


class ListadeproductosController {

    public static function insert(){
        $idListadeProductos = strip_tags($_POST['idListadeProductos']);
        $nombre = strip_tags($_POST['nombre']);
        $referencia = strip_tags($_POST['referencia']);
        $Proveedores_idProveedores = strip_tags($_POST['idProveedores']);
        $proveedores= new Proveedores();
        $proveedores->setIdProveedores($Proveedores_idProveedores);
        ListadeproductosFacade::insert($idListadeProductos, $nombre, $referencia, $proveedores);
return true;
    }

    public static function listAll(){
        $list=ListadeproductosFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Listadeproductos) {	
	       $rta.="{
	    \"idListadeProductos\":\"{$Listadeproductos->getidListadeProductos()}\",
	    \"nombre\":\"{$Listadeproductos->getnombre()}\",
	    \"referencia\":\"{$Listadeproductos->getreferencia()}\",
	    \"idProveedores_idProveedores\":\"{$Listadeproductos->getidProveedores()->getidProveedores()}\"
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