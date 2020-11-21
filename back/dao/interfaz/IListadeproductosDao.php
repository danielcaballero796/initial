<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\


interface IListadeproductosDao {

    /**
     * Guarda un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($listadeproductos);
    /**
     * Modifica un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($listadeproductos);
    /**
     * Elimina un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($listadeproductos);
    /**
     * Busca un objeto Listadeproductos en la base de datos.
     * @param listadeproductos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($listadeproductos);
    /**
     * Lista todos los objetos Listadeproductos en la base de datos.
     * @return Array<Listadeproductos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!