<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\

require_once realpath('../facade/GlobalController.php');
require_once realpath('../dao/interfaz/IFactoryDao.php');
require_once realpath('../dto/Registros.php');
require_once realpath('../dao/interfaz/IRegistrosDao.php');
require_once realpath('../dto/Cliente.php');

class RegistrosFacade {

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
   * Crea un objeto Registros a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idReg
   * @param fecha_reg
   * @param tem_reg
   * @param sintomas_reg
   * @param cliente_idcliente
   */
  public static function insert( $idReg,  $fecha_reg,  $tem_reg,  $sintomas_reg,  $cliente_idcliente){
      $registros = new Registros();
      $registros->setIdReg($idReg); 
      $registros->setFecha_reg($fecha_reg); 
      $registros->setTem_reg($tem_reg); 
      $registros->setSintomas_reg($sintomas_reg); 
      $registros->setCliente_idcliente($cliente_idcliente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $registrosDao =$FactoryDao->getregistrosDao(self::getDataBaseDefault());
     $rtn = $registrosDao->insert($registros);
     $registrosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Registros de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idReg
   * @return El objeto en base de datos o Null
   */
  public static function select($idReg){
      $registros = new Registros();
      $registros->setIdReg($idReg); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $registrosDao =$FactoryDao->getregistrosDao(self::getDataBaseDefault());
     $result = $registrosDao->select($registros);
     $registrosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Registros  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idReg
   * @param fecha_reg
   * @param tem_reg
   * @param sintomas_reg
   * @param cliente_idcliente
   */
  public static function update($idReg, $fecha_reg, $tem_reg, $sintomas_reg, $cliente_idcliente){
      $registros = self::select($idReg);
      $registros->setFecha_reg($fecha_reg); 
      $registros->setTem_reg($tem_reg); 
      $registros->setSintomas_reg($sintomas_reg); 
      $registros->setCliente_idcliente($cliente_idcliente); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $registrosDao =$FactoryDao->getregistrosDao(self::getDataBaseDefault());
     $registrosDao->update($registros);
     $registrosDao->close();
  }

  /**
   * Elimina un objeto Registros de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idReg
   */
  public static function delete($idReg){
      $registros = new Registros();
      $registros->setIdReg($idReg); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $registrosDao =$FactoryDao->getregistrosDao(self::getDataBaseDefault());
     $registrosDao->delete($registros);
     $registrosDao->close();
  }

  /**
   * Lista todos los objetos Registros de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Registros en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $registrosDao =$FactoryDao->getregistrosDao(self::getDataBaseDefault());
     $result = $registrosDao->listAll();
     $registrosDao->close();
     return $result;
  }


}
//That`s all folks!