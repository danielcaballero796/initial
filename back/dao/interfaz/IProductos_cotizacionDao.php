<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es tu vida y se acaba a cada minuto.  \\


interface IProductos_cotizacionDao {

    /**
     * Guarda un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($productos_cotizacion);
    /**
     * Modifica un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($productos_cotizacion);
    /**
     * Elimina un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($productos_cotizacion);
    /**
     * Busca un objeto Productos_cotizacion en la base de datos.
     * @param productos_cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($productos_cotizacion);
    /**
     * Lista todos los objetos Productos_cotizacion en la base de datos.
     * @return Array<Productos_cotizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!