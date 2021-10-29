<?php

class mynewsscoutModel extends Model {

    public function __construct() {
        parent::_construct();
    }

   
    
        public function addNews( $data ) {
        $sth = $this->db->prepare(
                "INSERT INTO scout_news (news_img,description,id_scout,avatar_img) " . " VALUE ( :news_img, :description, :id_scout, :avatar_img);"
                );
        $sth->execute($data);
    //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $this->db->lastInsertId();
        }else{
            return false;
        }
    }
    
     public function getListScout($data ) {
        
        
         
         $sth = $this->db->prepare( "SELECT * FROM scout_news WHERE id_scout = :id_scout");
       //var_dump($sth->errorInfo());
         $sth->execute( $data );
        //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
        
    }
    
       
    
}