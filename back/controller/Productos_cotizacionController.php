<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Santos frameworks Batman!  \\
include_once realpath('../facade/Productos_cotizacionFacade.php');


class Productos_cotizacionController {

    public static function insert(){
        $idproductos = strip_tags($_POST['idproductos']);
        $cantidad = strip_tags($_POST['cantidad']);
        $pvp_iva = strip_tags($_POST['pvp_iva']);
        $dto = strip_tags($_POST['dto']);
        $precio_cto = strip_tags($_POST['precio_cto']);
        $total_dto = strip_tags($_POST['total_dto']);
        $Cotizacion_idcotizacion = strip_tags($_POST['cotizacion_idcotizacion']);
        $cotizacion= new Cotizacion();
        $cotizacion->setIdcotizacion($Cotizacion_idcotizacion);
        $descrip_pro = strip_tags($_POST['descrip_pro']);
        $nombre_pro = strip_tags($_POST['nombre_pro']);
        $Categoria_idcateg_nom = strip_tags($_POST['categoria_idcateg_nom']);
        $categoria= new Categoria();
        $categoria->setIdcateg_nom($Categoria_idcateg_nom);
        Productos_cotizacionFacade::insert($idproductos, $cantidad, $pvp_iva, $dto, $precio_cto, $total_dto, $cotizacion, $descrip_pro, $nombre_pro, $categoria);
return true;
    }

    public static function listAll(){
        $list=Productos_cotizacionFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Productos_cotizacion) {	
	       $rta.="{
	    \"idproductos\":\"{$Productos_cotizacion->getidproductos()}\",
	    \"cantidad\":\"{$Productos_cotizacion->getcantidad()}\",
	    \"pvp_iva\":\"{$Productos_cotizacion->getpvp_iva()}\",
	    \"dto\":\"{$Productos_cotizacion->getdto()}\",
	    \"precio_cto\":\"{$Productos_cotizacion->getprecio_cto()}\",
	    \"total_dto\":\"{$Productos_cotizacion->gettotal_dto()}\",
	    \"cotizacion_idcotizacion_idcotizacion\":\"{$Productos_cotizacion->getcotizacion_idcotizacion()->getidcotizacion()}\",
	    \"descrip_pro\":\"{$Productos_cotizacion->getdescrip_pro()}\",
	    \"nombre_pro\":\"{$Productos_cotizacion->getnombre_pro()}\",
	    \"categoria_idcateg_nom_idcateg_nom\":\"{$Productos_cotizacion->getcategoria_idcateg_nom()->getidcateg_nom()}\"
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