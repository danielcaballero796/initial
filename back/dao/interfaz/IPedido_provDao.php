<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tranquilo, yo tampoco entiendo cómo funciona mi código  \\


interface IPedido_provDao {

    /**
     * Guarda un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($pedido_prov);
    /**
     * Modifica un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($pedido_prov);
    /**
     * Elimina un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($pedido_prov);
    /**
     * Busca un objeto Pedido_prov en la base de datos.
     * @param pedido_prov objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($pedido_prov);
    /**
     * Lista todos los objetos Pedido_prov en la base de datos.
     * @return Array<Pedido_prov> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!