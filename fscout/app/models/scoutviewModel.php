<?php

class scoutviewModel extends Model {

    public function __construct() {
        parent::_construct();
    }

   
    
     public function getDataListScout($data ) {
        
        
         
         $sth = $this->db->prepare( "SELECT * FROM scout WHERE id_scout = :id_scout");
       //var_dump($sth->errorInfo());
         $sth->execute( $data );
        //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
        
    }
    
      public function invitation($data) {
        $sth = $this->db->prepare("INSERT invitation (id_player, id_scout, date_meet, place_meet, description) " . "VALUES(:id_player, :id_scout, :date_meet, :place_meet, :description) ");
        $sth->execute($data);
       // var_dump($sth -> errorInfo ( ) );
        if ($sth->rowCount() > 0) {
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }  
    
}