<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Categoria.php');
require_once realpath('../dao/interfaz/ICategoriaDao.php');

class CategoriaFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Categoria a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcateg_nom
   * @param categ_nom
   */
  public static function insert( $idcateg_nom,  $categ_nom){
      $categoria = new Categoria();
      $categoria->setIdcateg_nom($idcateg_nom); 
      $categoria->setCateg_nom($categ_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $rtn = $categoriaDao->insert($categoria);
     $categoriaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Categoria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcateg_nom
   * @return El objeto en base de datos o Null
   */
  public static function select($idcateg_nom){
      $categoria = new Categoria();
      $categoria->setIdcateg_nom($idcateg_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $result = $categoriaDao->select($categoria);
     $categoriaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Categoria  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcateg_nom
   * @param categ_nom
   */
  public static function update($idcateg_nom, $categ_nom){
      $categoria = self::select($idcateg_nom);
      $categoria->setCateg_nom($categ_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $categoriaDao->update($categoria);
     $categoriaDao->close();
  }

  /**
   * Elimina un objeto Categoria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcateg_nom
   */
  public static function delete($idcateg_nom){
      $categoria = new Categoria();
      $categoria->setIdcateg_nom($idcateg_nom); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $categoriaDao->delete($categoria);
     $categoriaDao->close();
  }

  /**
   * Lista todos los objetos Categoria de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Categoria en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $result = $categoriaDao->listAll();
     $categoriaDao->close();
     return $result;
  }


}
//That`s all folks!