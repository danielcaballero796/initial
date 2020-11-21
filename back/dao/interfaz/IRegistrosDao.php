<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\


interface IRegistrosDao {

    /**
     * Guarda un objeto Registros en la base de datos.
     * @param registros objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($registros);
    /**
     * Modifica un objeto Registros en la base de datos.
     * @param registros objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($registros);
    /**
     * Elimina un objeto Registros en la base de datos.
     * @param registros objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($registros);
    /**
     * Busca un objeto Registros en la base de datos.
     * @param registros objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($registros);
    /**
     * Lista todos los objetos Registros en la base de datos.
     * @return Array<Registros> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!