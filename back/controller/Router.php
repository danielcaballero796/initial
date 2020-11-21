<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\
include_once realpath('CategoriaController.php');
include_once realpath('ClienteController.php');
include_once realpath('CotizacionController.php');
include_once realpath('EmpleadoController.php');
include_once realpath('EmpresaController.php');
include_once realpath('ListadeproductosController.php');
include_once realpath('Pedido_provController.php');
include_once realpath('Product_proveedorController.php');
include_once realpath('Productos_cotizacionController.php');
include_once realpath('ProveedoresController.php');
include_once realpath('RegistrosController.php');

$ruta = strip_tags($_POST['ruta']);
    	$rtn = "";
    	switch ($ruta) {
           case 'CategoriaInsert':
    			$rtn = CategoriaController::insert();
    			break;
    		case 'CategoriaList':
    			$rtn = CategoriaController::listAll();
    			break;
           case 'ClienteInsert':
    			$rtn = ClienteController::insert();
    			break;
    		case 'ClienteList':
    			$rtn = ClienteController::listAll();
    			break;
           case 'CotizacionInsert':
    			$rtn = CotizacionController::insert();
    			break;
    		case 'CotizacionList':
    			$rtn = CotizacionController::listAll();
    			break;
           case 'EmpleadoInsert':
    			$rtn = EmpleadoController::insert();
    			break;
    		case 'EmpleadoList':
    			$rtn = EmpleadoController::listAll();
    			break;
           case 'EmpresaInsert':
    			$rtn = EmpresaController::insert();
    			break;
    		case 'EmpresaList':
    			$rtn = EmpresaController::listAll();
    			break;
           case 'ListadeproductosInsert':
    			$rtn = ListadeproductosController::insert();
    			break;
    		case 'ListadeproductosList':
    			$rtn = ListadeproductosController::listAll();
    			break;
           case 'Pedido_provInsert':
    			$rtn = Pedido_provController::insert();
    			break;
    		case 'Pedido_provList':
    			$rtn = Pedido_provController::listAll();
    			break;
           case 'Product_proveedorInsert':
    			$rtn = Product_proveedorController::insert();
    			break;
    		case 'Product_proveedorList':
    			$rtn = Product_proveedorController::listAll();
    			break;
           case 'Productos_cotizacionInsert':
    			$rtn = Productos_cotizacionController::insert();
    			break;
    		case 'Productos_cotizacionList':
    			$rtn = Productos_cotizacionController::listAll();
    			break;
           case 'ProveedoresInsert':
    			$rtn = ProveedoresController::insert();
    			break;
    		case 'ProveedoresList':
    			$rtn = ProveedoresController::listAll();
    			break;
           case 'RegistrosInsert':
    			$rtn = RegistrosController::insert();
    			break;
    		case 'RegistrosList':
    			$rtn = RegistrosController::listAll();
    			break;
    		default:
    			$rtn="404 Ruta no encontrada.";
    			break;
    	}

echo $rtn;

//That`s all folks!