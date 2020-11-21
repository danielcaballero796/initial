<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Soy la sonrisa burlona y vengativa de Jack  \\

include_once realpath('../dao/conexion/Conexion.php');
include_once realpath('../dao/interfaz/IFactoryDao.php');

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de CategoriaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CategoriaDao
     */
     public function getCategoriaDao($dbName){
        return new CategoriaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ClienteDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClienteDao
     */
     public function getClienteDao($dbName){
        return new ClienteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CotizacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CotizacionDao
     */
     public function getCotizacionDao($dbName){
        return new CotizacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EmpleadoDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpleadoDao
     */
     public function getEmpleadoDao($dbName){
        return new EmpleadoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EmpresaDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EmpresaDao
     */
     public function getEmpresaDao($dbName){
        return new EmpresaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ListadeproductosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ListadeproductosDao
     */
     public function getListadeproductosDao($dbName){
        return new ListadeproductosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Pedido_provDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Pedido_provDao
     */
     public function getPedido_provDao($dbName){
        return new Pedido_provDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Product_proveedorDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Product_proveedorDao
     */
     public function getProduct_proveedorDao($dbName){
        return new Product_proveedorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Productos_cotizacionDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Productos_cotizacionDao
     */
     public function getProductos_cotizacionDao($dbName){
        return new Productos_cotizacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ProveedoresDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedoresDao
     */
     public function getProveedoresDao($dbName){
        return new ProveedoresDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de RegistrosDao con una conexiÃ³n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RegistrosDao
     */
     public function getRegistrosDao($dbName){
        return new RegistrosDao($this->conn->obtener($dbName));
    }

}
//That`s all folks!