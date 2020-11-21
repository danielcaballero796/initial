<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Dispongo de doce horas de adelanto, puedo de decárselas a ella  \\


interface IProveedoresDao {

    /**
     * Guarda un objeto Proveedores en la base de datos.
     * @param proveedores objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($proveedores);
    /**
     * Modifica un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($proveedores);
    /**
     * Elimina un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($proveedores);
    /**
     * Busca un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($proveedores);
    /**
     * Lista todos los objetos Proveedores en la base de datos.
     * @return Array<Proveedores> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!