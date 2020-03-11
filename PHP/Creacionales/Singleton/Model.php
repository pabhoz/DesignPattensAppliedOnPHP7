<?php

/**
 * Description of Model
 *
 * @author pabhoz
 *
 */
class Model {
    
    //definimos el atributo db como privado y estático para aplicar singleton en el
    private static $db;
    protected static $table;

    private static function getConnection(){
     //al momento de una nueva conexión verificamos si ya no tenemos una establecida
     if(!isset(self::$db)){
        //si no existe una conexión establecida entonces instanciamos una.
        self::$db = new Database(_DB_TYPE,_DB_HOST,_DB_NAME,_DB_USER,_DB_PASS);
     }
    }
    
    public function getRelationship($t){
        self::getConnection();
        return self::$db->getRelationship($t);
    }


    public static function setTable($table){
        self::$table = $table;
    }
            
    public static function getAll(){
        self::getConnection();
        $sql = "SELECT * FROM ".static::$table.";";
        return $results = self::$db->select($sql);
    }

    public static function where($field, $value){
        self::getConnection();
        $sql = "SELECT * FROM ".static::$table." WHERE ".$field." = :".$field;
        $results = self::$db->select($sql, array(":".$field=>$value) );
        return $results;
    }

    public static function getById($id){
            //asignacion y llamado del método estático where
            $whereReturn = self::where("id",$id);
            $data = array_shift($whereReturn);        
            $result = self::instanciate($data);
            return $result;
    }
    
    public static function getBy($field,$data,$all = false, $instanced = true){
            //asignacion y llamado del método estático where
            $whereReturn = self::where($field,$data);
            
            $data = (!$all) ? array_shift($whereReturn) : $whereReturn; 
            if(!$all){
                if($instanced){
                        $data = self::instanciate($data);
                }                
            }else{
               if($instanced){
                    foreach ($data as $key => $element) {
                        $data[$key] = self::instanciate($element);
                    }
                }
            }

            return $data;
    }
    
}