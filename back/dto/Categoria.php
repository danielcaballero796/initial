<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\


class Categoria {

  private $idcateg_nom;
  private $categ_nom;

    /**
     * Constructor de Categoria
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idcateg_nom
     * @return idcateg_nom
     */
  public function getIdcateg_nom(){
      return $this->idcateg_nom;
  }

    /**
     * Modifica el valor correspondiente a idcateg_nom
     * @param idcateg_nom
     */
  public function setIdcateg_nom($idcateg_nom){
      $this->idcateg_nom = $idcateg_nom;
  }
    /**
     * Devuelve el valor correspondiente a categ_nom
     * @return categ_nom
     */
  public function getCateg_nom(){
      return $this->categ_nom;
  }

    /**
     * Modifica el valor correspondiente a categ_nom
     * @param categ_nom
     */
  public function setCateg_nom($categ_nom){
      $this->categ_nom = $categ_nom;
  }


}
//That`s all folks!