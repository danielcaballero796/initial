<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\
include_once realpath('../facade/CategoriaFacade.php');


class CategoriaController {

    public static function insert(){
        $idcateg_nom = strip_tags($_POST['idcateg_nom']);
        $categ_nom = strip_tags($_POST['categ_nom']);
        CategoriaFacade::insert($idcateg_nom, $categ_nom);
return true;
    }

    public static function listAll(){
        $list=CategoriaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Categoria) {	
	       $rta.="{
	    \"idcateg_nom\":\"{$Categoria->getidcateg_nom()}\",
	    \"categ_nom\":\"{$Categoria->getcateg_nom()}\"
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