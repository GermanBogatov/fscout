<?php

class invitesportsmanModel extends Model {

    public function __construct() {
        parent::_construct();
    }

   
    
        public function getListPlayerInvite($data ) {
        
        
         
         $sth = $this->db->prepare( "SELECT * FROM invitation WHERE id_player = :id_player");
       //var_dump($sth->errorInfo());
         $sth->execute( $data );
        //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
        
    }
    
      public function getListScoutInvite($table, $order = "id_scout", $select = "*", $filter = " 1=1 " ) {
        
         if (is_array($select)){
            $select = implode(", ", $select);
        }
         
         $sth = $this->db->prepare( "SELECT ".$select." FROM ".$table." WHERE ".$filter ."ORDER BY ".$order);
        $sth->execute( array() );
        //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
        
    }
    
}