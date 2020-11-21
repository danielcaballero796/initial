<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Trabajo individual singifica ganancia individual  \\


interface ICotizacionDao {

    /**
     * Guarda un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cotizacion);
    /**
     * Modifica un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cotizacion);
    /**
     * Elimina un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cotizacion);
    /**
     * Busca un objeto Cotizacion en la base de datos.
     * @param cotizacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cotizacion);
    /**
     * Lista todos los objetos Cotizacion en la base de datos.
     * @return Array<Cotizacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!