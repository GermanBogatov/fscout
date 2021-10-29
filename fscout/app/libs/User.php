<?php

namespace Libs;

class User {

    static function login($data) {
        $_SESSION["LOGIN"] = true;
        $_SESSION["USER_ID"] = $data['id_player'];
        $_SESSION["USER_NAME"] = $data['name_player'];
        $_SESSION["USER_EMAIL"] = $data['email_player'];
        $_SESSION["USER_PASSWORD"] = $data['password_player'];
        $_SESSION["USER_SNAME"] = $data['surname_player'];
        $_SESSION["USER_PHONE"] = $data['phone_player'];
        $_SESSION["USER_ACADEMY"] = $data['academy_player'];
        $_SESSION["USER_COUNTRY"] = $data['id_country'];
        $_SESSION["USER_ADDRESS"] = $data['address_player'];
        $_SESSION["USER_CITY"] = $data['city_player'];
        $_SESSION["USER_STATE"] = $data['state_player'];
        $_SESSION["USER_INDEX"] = $data['index_player'];
        $_SESSION["USER_BIRTHDAY"] = $data['birthday_player'];
        $_SESSION["USER_GENDER"] = $data['gender_player'];
        $_SESSION["USER_HEIGHT"] = $data['height_player'];
        $_SESSION["USER_WEIGHT"] = $data['weight_player'];
        $_SESSION["USER_STRONG_LEG"] = $data['strong_leg_player'];
        $_SESSION["USER_ROLE"] = $data['role'];
        $_SESSION["USER_AVATAR"] = $data['avatar_img'];
        
        if ($data['gender_player']=='Man'){
            $v1 = 'selected';
            $_SESSION["USER_v1"]=$v1;
            $_SESSION["USER_v2"]='';
        }elseif($data['gender_player']=='Woman'){
            $v2 = 'selected';
             $_SESSION["USER_v2"]=$v2;
             $_SESSION["USER_v1"]='';
        }else{
            $_SESSION["USER_v1"]='';
            $_SESSION["USER_v2"]='';
        }
        
        if ($data['strong_leg_player']=='Left'){
            $t1 = 'selected';
            $_SESSION["USER_t1"]=$t1;
            $_SESSION["USER_t2"]='';
        }elseif($data['strong_leg_player']=='Right'){
            $t2 = 'selected';
             $_SESSION["USER_t2"]=$t2;
             $_SESSION["USER_t1"]='';
        }else{
            $_SESSION["USER_t1"]='';
            $_SESSION["USER_t2"]='';
        }
    }

    static function loginscout($data) {
        $_SESSION["LOGIN"] = true;
        $_SESSION["USER_ID"] = $data['id_scout'];
        $_SESSION["USER_NAME"] = $data['name_scout'];
        $_SESSION["USER_EMAIL"] = $data['email_scout'];
        $_SESSION["USER_PASSWORD"] = $data['password_scout'];
        $_SESSION["USER_SNAME"] = $data['surname_scout'];
        $_SESSION["USER_PHONE"] = $data['phone_scout'];
        $_SESSION["USER_COMPANY"] = $data['name_company'];
        $_SESSION["USER_COUNTRY"] = $data['id_country'];
        $_SESSION["USER_ADDRESS"] = $data['address_company'];
        $_SESSION["USER_CITY"] = $data['city_company'];
        $_SESSION["USER_STATE"] = $data['state_company'];
        $_SESSION["USER_INDEX"] = $data['zipcode_company'];
        $_SESSION["USER_GENDER"] = $data['gender_scout'];
        $_SESSION["USER_VAT"] = $data['vat_number'];
        $_SESSION["USER_PASSPORT"] = $data['passport_scout'];
        $_SESSION["USER_ROLE"] = $data['role'];
        $_SESSION["USER_AVATAR"] = $data['avatar_img'];
        
        if ($data['gender_scout']=='Man'){
            $v1 = 'selected';
            $_SESSION["USER_v1"]=$v1;
            $_SESSION["USER_v2"]='';
        }elseif($data['gender_scout']=='Woman'){
            $v2 = 'selected';
             $_SESSION["USER_v2"]=$v2;
             $_SESSION["USER_v1"]='';
        }else{
            $_SESSION["USER_v1"]='';
            $_SESSION["USER_v2"]='';
        }
        
    }
 static function loginscoutavatar($data) {
        
        $_SESSION["USER_AVATAR"] = $data['avatar_img'];
        
       
        
    }
    static function isLogin() {
        if (isset($_SESSION["LOGIN"]) && $_SESSION["LOGIN"]) {
            return true;
        } else {
            return false;
        }
    }

//    static function isAdmin(){
//        if(isset($_SESSION["USER_ROLE"]) && $_SESSION["USER_ROLE"] == ADMIN_ROLE){
//            return true;
//        }else{
//            return false;
//        }
//    }

    static function isLoginPlayer() {
        if (isset($_SESSION["LOGIN"]) && $_SESSION["LOGIN"] && isset($_SESSION["USER_ROLE"]) && $_SESSION["USER_ROLE"] == SPORTSMAN_ROLE) {
            return true;
        } else {
            return false;
        }
    }

    static function isLoginScout() {
        if (isset($_SESSION["LOGIN"]) && $_SESSION["LOGIN"] && isset($_SESSION["USER_ROLE"]) && $_SESSION["USER_ROLE"] == SCOUT_ROLE) {
            return true;
        } else {
            return false;
        }
    }

//    static function isAdmin(){
//        if(isset($_SESSION["USER_ROLE"]) && $_SESSION["USER_ROLE"] == ADMIN_ROLE){
//            return true;
//        }else{
//            return false;
//        }
//    }

    static function getID() {
        if (isset($_SESSION["USER_ID"])) {
            return $_SESSION["USER_ID"];
        } else {
            return false;
        }
    }

    static function getEmail() {
        if (isset($_SESSION["USER_EMAIL"])) {
            return $_SESSION["USER_EMAIL"];
        } else {
            return false;
        }
    }

    static function getName() {
        if (isset($_SESSION["USER_NAME"])) {
            return $_SESSION["USER_NAME"];
        } else {
            return false;
        }
    }

    static function getSname() {
        if (isset($_SESSION["USER_SNAME"])) {
            return $_SESSION["USER_SNAME"];
        } else {
            return false;
        }
    }

    static function getPhone() {
        if (isset($_SESSION["USER_PHONE"])) {
            return $_SESSION["USER_PHONE"];
        } else {
            return false;
        }
    }

    static function logout() {
        session_destroy();
    }

}
