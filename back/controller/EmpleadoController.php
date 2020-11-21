<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\
include_once realpath('../facade/EmpleadoFacade.php');


class EmpleadoController {

    public static function insert(){
        $idemp = strip_tags($_POST['idemp']);
        $emp_nombre = strip_tags($_POST['emp_nombre']);
        $emp_correo = strip_tags($_POST['emp_correo']);
        $emp_tel = strip_tags($_POST['emp_tel']);
        EmpleadoFacade::insert($idemp, $emp_nombre, $emp_correo, $emp_tel);
return true;
    }

    public static function listAll(){
        $list=EmpleadoFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Empleado) {	
	       $rta.="{
	    \"idemp\":\"{$Empleado->getidemp()}\",
	    \"emp_nombre\":\"{$Empleado->getemp_nombre()}\",
	    \"emp_correo\":\"{$Empleado->getemp_correo()}\",
	    \"emp_tel\":\"{$Empleado->getemp_tel()}\"
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