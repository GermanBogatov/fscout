<?php

class myvideosportsmanModel extends Model {

    public function __construct() {
        parent::_construct();
    }

   
    
        public function addVideo( $data ) {
        $sth = $this->db->prepare(
                "INSERT INTO player_videos (video_img,description,id_player,avatar_img) " . " VALUE ( :video_img, :description, :id_player, :avatar_img);"
                );
        $sth->execute($data);
   // var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $this->db->lastInsertId();
        }else{
            return false;
        }
    }
    
     public function getListPlayer($data ) {
        
        
         
         $sth = $this->db->prepare( "SELECT * FROM player_videos WHERE id_player = :id_player");
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