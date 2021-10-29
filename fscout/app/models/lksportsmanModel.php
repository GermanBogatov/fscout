<?php

class lksportsmanModel extends Model {

    public function __construct() {
        parent::_construct();
    }

   
     public function addphotoPlayer( $data ) {
       $sth = $this->db->prepare("UPDATE player SET password_player = :password_player, name_player = :name_player, email_player =:email_player, surname_player= :surname_player, phone_player=:phone_player, academy_player = :academy_player, id_country =:id_country, address_player= :address_player, city_player=:city_player, state_player =:state_player, index_player= :index_player, birthday_player=:birthday_player, gender_player = :gender_player, height_player =:height_player, weight_player= :weight_player, strong_leg_player=:strong_leg_player, role=:role, avatar_img=:avatar_img " . " WHERE id_player = :id_player; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function editPlayer ( $data ){
        $sth = $this->db->prepare("UPDATE player SET password_player = :password_player, name_player = :name_player, email_player =:email_player, surname_player= :surname_player, phone_player=:phone_player, academy_player = :academy_player, id_country =:id_country, address_player= :address_player, city_player=:city_player, state_player =:state_player, index_player= :index_player, birthday_player=:birthday_player, gender_player = :gender_player, height_player =:height_player, weight_player= :weight_player, strong_leg_player=:strong_leg_player, role=:role, avatar_img=:avatar_img " . " WHERE id_player = :id_player; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
public function editPasswordPlayer ( $data ){
        $sth = $this->db->prepare("UPDATE player SET password_player = :password_player, name_player = :name_player, email_player =:email_player, surname_player= :surname_player, phone_player=:phone_player, academy_player = :academy_player, id_country =:id_country, address_player= :address_player, city_player=:city_player, state_player =:state_player, index_player= :index_player, birthday_player=:birthday_player, gender_player = :gender_player, height_player =:height_player, weight_player= :weight_player, strong_leg_player=:strong_leg_player, role=:role, avatar_img=:avatar_img " . " WHERE id_player = :id_player; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
      
     public function editScout ( $data ){
        $sth = $this->db->prepare("UPDATE scout SET password_scout = :password_scout, name_scout = :name_scout, email_scout =:email_scout, surname_scout= :surname_scout, phone_scout=:phone_scout, name_company = :name_company, id_country =:id_country, address_company= :address_company, city_company=:city_company, state_company =:state_company, zipcode_company= :zipcode_company, gender_scout=:gender_scout, vat_number = :vat_number, passport_scout =:passport_scout, role=:role, avatar_img=:avatar_img " . " WHERE id_scout = :id_scout; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function editPasswordScout ( $data ){
        $sth = $this->db->prepare("UPDATE scout SET password_scout = :password_scout, name_scout = :name_scout, email_scout =:email_scout, surname_scout= :surname_scout, phone_scout=:phone_scout, name_company = :name_company, id_country =:id_country, address_company= :address_company, city_company=:city_company, state_company =:state_company, zipcode_company= :zipcode_company, gender_scout=:gender_scout, vat_number = :vat_number, passport_scout =:passport_scout, role=:role, avatar_img=:avatar_img " . " WHERE id_scout = :id_scout; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
       public function addPhotoScout ( $data ){
        $sth = $this->db->prepare("UPDATE scout SET password_scout = :password_scout, name_scout = :name_scout, email_scout =:email_scout, surname_scout= :surname_scout, phone_scout=:phone_scout, name_company = :name_company, id_country =:id_country, address_company= :address_company, city_company=:city_company, state_company =:state_company, zipcode_company= :zipcode_company, gender_scout=:gender_scout, vat_number = :vat_number, passport_scout =:passport_scout, role=:role, avatar_img=:avatar_img " . " WHERE id_scout = :id_scout; ");
        $sth->execute($data);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
  public function updatephotoPlayer ( $dataimg ){
        $sth = $this->db->prepare("UPDATE player_videos SET avatar_img=:avatar_img " . " WHERE id_player = :id_player; ");
        $sth->execute($dataimg);
       //var_dump($sth->errorInfo());
        if ($sth->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }
    }
}

