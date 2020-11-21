<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\
include_once realpath('../facade/Product_proveedorFacade.php');


class Product_proveedorController {

    public static function insert(){
        $idproductos_prov = strip_tags($_POST['idproductos_prov']);
        $cantidad_prov = strip_tags($_POST['cantidad_prov']);
        $precio_cto_prov = strip_tags($_POST['precio_cto_prov']);
        $total_dto_prov = strip_tags($_POST['total_dto_prov']);
        $proveedor = strip_tags($_POST['proveedor']);
        $nombre_prov = strip_tags($_POST['nombre_prov']);
        $ref_prov = strip_tags($_POST['ref_prov']);
        $Pedido_prov_idpedido_prov = strip_tags($_POST['pedido_prov_idpedido_prov']);
        $pedido_prov= new Pedido_prov();
        $pedido_prov->setIdpedido_prov($Pedido_prov_idpedido_prov);
        Product_proveedorFacade::insert($idproductos_prov, $cantidad_prov, $precio_cto_prov, $total_dto_prov, $proveedor, $nombre_prov, $ref_prov, $pedido_prov);
return true;
    }

    public static function listAll(){
        $list=Product_proveedorFacade::listAll();
        $rta="";
        foreach ($list as $obj => $Product_proveedor) {	
	       $rta.="{
	    \"idproductos_prov\":\"{$Product_proveedor->getidproductos_prov()}\",
	    \"cantidad_prov\":\"{$Product_proveedor->getcantidad_prov()}\",
	    \"precio_cto_prov\":\"{$Product_proveedor->getprecio_cto_prov()}\",
	    \"total_dto_prov\":\"{$Product_proveedor->gettotal_dto_prov()}\",
	    \"proveedor\":\"{$Product_proveedor->getproveedor()}\",
	    \"nombre_prov\":\"{$Product_proveedor->getnombre_prov()}\",
	    \"ref_prov\":\"{$Product_proveedor->getref_prov()}\",
	    \"pedido_prov_idpedido_prov_idpedido_prov\":\"{$Product_proveedor->getpedido_prov_idpedido_prov()->getidpedido_prov()}\"
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