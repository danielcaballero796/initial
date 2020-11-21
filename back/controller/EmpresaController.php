<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\
include_once realpath('../facade/EmpresaFacade.php');


class EmpresaController {

    public static function insert(){
        $idemp = strip_tags($_POST['idemp']);
        $emp_nombre = strip_tags($_POST['emp_nombre']);
        $emp_telefono = strip_tags($_POST['emp_telefono']);
        $emp_direccion = strip_tags($_POST['emp_direccion']);
        $emp_correo = strip_tags($_POST['emp_correo']);
        $emp_nit = strip_tags($_POST['emp_nit']);
        EmpresaFacade::insert($idemp, $emp_nombre, $emp_telefono, $emp_direccion, $emp_correo, $emp_nit);
return true;
    }

    public static function listAll(){
        $list=EmpresaFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Empresa) {	
	       $rta.="{
	    \"idemp\":\"{$Empresa->getidemp()}\",
	    \"emp_nombre\":\"{$Empresa->getemp_nombre()}\",
	    \"emp_telefono\":\"{$Empresa->getemp_telefono()}\",
	    \"emp_direccion\":\"{$Empresa->getemp_direccion()}\",
	    \"emp_correo\":\"{$Empresa->getemp_correo()}\",
	    \"emp_nit\":\"{$Empresa->getemp_nit()}\"
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