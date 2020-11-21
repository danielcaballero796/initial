<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El gran hermano te vigila  \\


interface ICategoriaDao {

    /**
     * Guarda un objeto Categoria en la base de datos.
     * @param categoria objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($categoria);
    /**
     * Modifica un objeto Categoria en la base de datos.
     * @param categoria objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($categoria);
    /**
     * Elimina un objeto Categoria en la base de datos.
     * @param categoria objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($categoria);
    /**
     * Busca un objeto Categoria en la base de datos.
     * @param categoria objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($categoria);
    /**
     * Lista todos los objetos Categoria en la base de datos.
     * @return Array<Categoria> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!