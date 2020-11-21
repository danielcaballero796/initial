<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Lolita, luz de mi vida, fuego de mis entrañas. Pecado mío, alma mía.  \\

include_once realpath('../dao/entities/CategoriaDao.php');
include_once realpath('../dao/entities/ClienteDao.php');
include_once realpath('../dao/entities/CotizacionDao.php');
include_once realpath('../dao/entities/EmpleadoDao.php');
include_once realpath('../dao/entities/EmpresaDao.php');
include_once realpath('../dao/entities/ListadeproductosDao.php');
include_once realpath('../dao/entities/Pedido_provDao.php');
include_once realpath('../dao/entities/Product_proveedorDao.php');
include_once realpath('../dao/entities/Productos_cotizacionDao.php');
include_once realpath('../dao/entities/ProveedoresDao.php');
include_once realpath('../dao/entities/RegistrosDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de CategoriaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CategoriaDao
     */
     public function getCategoriaDao($dbName);
     /**
     * Devuelve una instancia de ClienteDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClienteDao
     */
     public function getClienteDao($dbName);
     /**
     * Devuelve una instancia de CotizacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CotizacionDao
     */
     public function getCotizacionDao($dbName);
     /**
     * Devuelve una instancia de EmpleadoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpleadoDao
     */
     public function getEmpleadoDao($dbName);
     /**
     * Devuelve una instancia de EmpresaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpresaDao
     */
     public function getEmpresaDao($dbName);
     /**
     * Devuelve una instancia de ListadeproductosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ListadeproductosDao
     */
     public function getListadeproductosDao($dbName);
     /**
     * Devuelve una instancia de Pedido_provDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Pedido_provDao
     */
     public function getPedido_provDao($dbName);
     /**
     * Devuelve una instancia de Product_proveedorDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Product_proveedorDao
     */
     public function getProduct_proveedorDao($dbName);
     /**
     * Devuelve una instancia de Productos_cotizacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Productos_cotizacionDao
     */
     public function getProductos_cotizacionDao($dbName);
     /**
     * Devuelve una instancia de ProveedoresDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedoresDao
     */
     public function getProveedoresDao($dbName);
     /**
     * Devuelve una instancia de RegistrosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RegistrosDao
     */
     public function getRegistrosDao($dbName);

}
//That`s all folks!