<?php

class regModel extends Model {

    public function __construct() {
        parent::_construct();
    }

    public function registration($data) {
        $sth = $this->db->prepare("INSERT player(password_player, name_player, email_player, surname_player, phone_player, academy_player,id_country,address_player,city_player,state_player,index_player,birthday_player,gender_player,height_player, weight_player,strong_leg_player, role, avatar_img) " . "VALUES(:password_player, :name_player, :email_player, :surname_player, :phone_player, :academy_player, :id_country, :address_player, :city_player, :state_player, :index_player, :birthday_player, :gender_player, :height_player, :weight_player, :strong_leg_player, :role, :avatar_img) ");
        $sth->execute($data);
       // var_dump($sth -> errorInfo ( ) );
        if ($sth->rowCount() > 0) {
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }

    
    
    
    
    public function EmailExist($Email) {
        $sth = $this->db->prepare("SELECT id_player FROM player WHERE email_player = :Email");
        $sth->execute(array(":Email" => $Email));
//var_dump($sth -> errorInfo ( ) );
        if ($sth->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    public function registrationScout($data) {
        $sth = $this->db->prepare("INSERT scout(password_scout, name_scout, email_scout, surname_scout, phone_scout, name_company,id_country,address_company,city_company,state_company,zipcode_company,gender_scout,vat_number,passport_scout,role,avatar_img) " . "VALUES( :password_scout, :name_scout, :email_scout, :surname_scout, :phone_scout, :name_company,:id_country,:address_company,:city_company,:state_company,:zipcode_company,:gender_scout,:vat_number,:passport_scout,:role,:avatar_img) ");
        $sth->execute($data);
       // var_dump($sth -> errorInfo ( ) );
        if ($sth->rowCount() > 0) {
            return $this->db->lastInsertId();
        } else {
            return false;
        }
    }
    
    
     public function EmailExistScout($Email) {
        $sth = $this->db->prepare("SELECT id_scout FROM scout WHERE email_scout = :Email");
        $sth->execute(array(":Email" => $Email));
//var_dump($sth -> errorInfo ( ) );
        if ($sth->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function authorization($data) {
        $sth = $this->db->prepare("SELECT password_player, id_player, name_player, email_player, surname_player, phone_player, academy_player,id_country,address_player,city_player,state_player,index_player,birthday_player,gender_player,height_player, weight_player,strong_leg_player,role,avatar_img FROM player WHERE email_player = :Email AND password_player = :Password");
        $sth ->execute(array(":Email"=> $data["EMAIL"],":Password"=>md5($data["PASSWORD"])));
    // var_dump($sth -> errorInfo ( ) );
        if($res = $sth->fetch(PDO::FETCH_ASSOC)){
          //  var_dump($res -> errorInfo ( ) );
            return $res;
            
        }else{
            return false;
        }
    }
        
    public function authorizationscout($data) {
        $sth = $this->db->prepare("SELECT password_scout, id_scout, name_scout, email_scout, surname_scout, phone_scout, name_company,id_country,address_company,city_company,state_company,zipcode_company,gender_scout,vat_number,passport_scout,role,avatar_img FROM scout WHERE email_scout = :Email AND password_scout = :Password");
        $sth ->execute(array(":Email"=> $data["EMAIL"],":Password"=>md5($data["PASSWORD"])));
    // var_dump($sth -> errorInfo ( ) );
        if($res = $sth->fetch(PDO::FETCH_ASSOC)){
            return $res;
        }else{
            return false;
        }
    }
    
}