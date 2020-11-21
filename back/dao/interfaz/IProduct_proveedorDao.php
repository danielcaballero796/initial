<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\


interface IProduct_proveedorDao {

    /**
     * Guarda un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($product_proveedor);
    /**
     * Modifica un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($product_proveedor);
    /**
     * Elimina un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($product_proveedor);
    /**
     * Busca un objeto Product_proveedor en la base de datos.
     * @param product_proveedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($product_proveedor);
    /**
     * Lista todos los objetos Product_proveedor en la base de datos.
     * @return Array<Product_proveedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That`s all folks!