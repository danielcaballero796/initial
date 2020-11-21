<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\

include_once realpath('../dao/interfaz/IProductos_cotizacionDao.php');
include_once realpath('../dto/Productos_cotizacion.php');
include_once realpath('../dto/Cotizacion.php');
include_once realpath('../dto/Categoria.php');

class Productos_cotizacionDao implements IProductos_cotizacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($productos_cotizacion){
      $idproductos=$productos_cotizacion->getIdproductos();
$cantidad=$productos_cotizacion->getCantidad();
$pvp_iva=$productos_cotizacion->getPvp_iva();
$dto=$productos_cotizacion->getDto();
$precio_cto=$productos_cotizacion->getPrecio_cto();
$total_dto=$productos_cotizacion->getTotal_dto();
$cotizacion_idcotizacion=$productos_cotizacion->getCotizacion_idcotizacion()->getIdcotizacion();
$descrip_pro=$productos_cotizacion->getDescrip_pro();
$nombre_pro=$productos_cotizacion->getNombre_pro();
$categoria_idcateg_nom=$productos_cotizacion->getCategoria_idcateg_nom()->getIdcateg_nom();

      try {
          $sql= "INSERT INTO `productos_cotizacion`( `idproductos`, `cantidad`, `pvp_iva`, `dto`, `precio_cto`, `total_dto`, `cotizacion_idcotizacion`, `descrip_pro`, `nombre_pro`, `categoria_idcateg_nom`)"
          ."VALUES ('$idproductos','$cantidad','$pvp_iva','$dto','$precio_cto','$total_dto','$cotizacion_idcotizacion','$descrip_pro','$nombre_pro','$categoria_idcateg_nom')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($productos_cotizacion){
      $idproductos=$productos_cotizacion->getIdproductos();

      try {
          $sql= "SELECT `idproductos`, `cantidad`, `pvp_iva`, `dto`, `precio_cto`, `total_dto`, `cotizacion_idcotizacion`, `descrip_pro`, `nombre_pro`, `categoria_idcateg_nom`"
          ."FROM `productos_cotizacion`"
          ."WHERE `idproductos`='$idproductos'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos_cotizacion->setIdproductos($data[$i]['idproductos']);
          $productos_cotizacion->setCantidad($data[$i]['cantidad']);
          $productos_cotizacion->setPvp_iva($data[$i]['pvp_iva']);
          $productos_cotizacion->setDto($data[$i]['dto']);
          $productos_cotizacion->setPrecio_cto($data[$i]['precio_cto']);
          $productos_cotizacion->setTotal_dto($data[$i]['total_dto']);
           $cotizacion = new Cotizacion();
           $cotizacion->setIdcotizacion($data[$i]['cotizacion_idcotizacion']);
           $productos_cotizacion->setCotizacion_idcotizacion($cotizacion);
          $productos_cotizacion->setDescrip_pro($data[$i]['descrip_pro']);
          $productos_cotizacion->setNombre_pro($data[$i]['nombre_pro']);
           $categoria = new Categoria();
           $categoria->setIdcateg_nom($data[$i]['categoria_idcateg_nom']);
           $productos_cotizacion->setCategoria_idcateg_nom($categoria);

          }
      return $productos_cotizacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($productos_cotizacion){
      $idproductos=$productos_cotizacion->getIdproductos();
$cantidad=$productos_cotizacion->getCantidad();
$pvp_iva=$productos_cotizacion->getPvp_iva();
$dto=$productos_cotizacion->getDto();
$precio_cto=$productos_cotizacion->getPrecio_cto();
$total_dto=$productos_cotizacion->getTotal_dto();
$cotizacion_idcotizacion=$productos_cotizacion->getCotizacion_idcotizacion()->getIdcotizacion();
$descrip_pro=$productos_cotizacion->getDescrip_pro();
$nombre_pro=$productos_cotizacion->getNombre_pro();
$categoria_idcateg_nom=$productos_cotizacion->getCategoria_idcateg_nom()->getIdcateg_nom();

      try {
          $sql= "UPDATE `productos_cotizacion` SET`idproductos`='$idproductos' ,`cantidad`='$cantidad' ,`pvp_iva`='$pvp_iva' ,`dto`='$dto' ,`precio_cto`='$precio_cto' ,`total_dto`='$total_dto' ,`cotizacion_idcotizacion`='$cotizacion_idcotizacion' ,`descrip_pro`='$descrip_pro' ,`nombre_pro`='$nombre_pro' ,`categoria_idcateg_nom`='$categoria_idcateg_nom' WHERE `idproductos`='$idproductos' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($productos_cotizacion){
      $idproductos=$productos_cotizacion->getIdproductos();

      try {
          $sql ="DELETE FROM `productos_cotizacion` WHERE `idproductos`='$idproductos'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Productos_cotizacion en la base de datos.
     * @return ArrayList<Productos_cotizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idproductos`, `cantidad`, `pvp_iva`, `dto`, `precio_cto`, `total_dto`, `cotizacion_idcotizacion`, `descrip_pro`, `nombre_pro`, `categoria_idcateg_nom`"
          ."FROM `productos_cotizacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $productos_cotizacion= new Productos_cotizacion();
          $productos_cotizacion->setIdproductos($data[$i]['idproductos']);
          $productos_cotizacion->setCantidad($data[$i]['cantidad']);
          $productos_cotizacion->setPvp_iva($data[$i]['pvp_iva']);
          $productos_cotizacion->setDto($data[$i]['dto']);
          $productos_cotizacion->setPrecio_cto($data[$i]['precio_cto']);
          $productos_cotizacion->setTotal_dto($data[$i]['total_dto']);
           $cotizacion = new Cotizacion();
           $cotizacion->setIdcotizacion($data[$i]['cotizacion_idcotizacion']);
           $productos_cotizacion->setCotizacion_idcotizacion($cotizacion);
          $productos_cotizacion->setDescrip_pro($data[$i]['descrip_pro']);
          $productos_cotizacion->setNombre_pro($data[$i]['nombre_pro']);
           $categoria = new Categoria();
           $categoria->setIdcateg_nom($data[$i]['categoria_idcateg_nom']);
           $productos_cotizacion->setCategoria_idcateg_nom($categoria);

          array_push($lista,$productos_cotizacion);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That`s all folks!