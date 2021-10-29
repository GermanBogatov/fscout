<?php

use Libs\User as User;

class regController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->setTitle("Регистрация");
    }

    public function registration() {

        $FirstName = htmlspecialchars($_POST['FirstName']);
        $Email = htmlspecialchars($_POST['Email']);
        $SecondName = htmlspecialchars($_POST['SecondName']);
        $Phone = htmlspecialchars($_POST['Phone']);
        $Password = htmlspecialchars($_POST['Password']);
        $ConfirmPassword = htmlspecialchars($_POST['ConfirmPassword']);
        //Сделать свои поверки на регистрацию!!!
        if ($Password == $ConfirmPassword) {
            if ($this->model->EmailExist($Email)) {
                echo json_encode(array("error" => "EMAIL уже существует!"));
                die;
            }

            $data = array(
                "password_player" => md5($Password),
                "name_player" => $FirstName,
                "email_player" => $Email,
                "surname_player" => $SecondName,
                "phone_player" => $Phone,
                "academy_player" => "",
                "id_country" => "",
                "address_player" => "",
                "city_player" => "",
                "state_player" => "",
                "index_player" => "",
                "birthday_player" => "",
                "gender_player" => "",
                "height_player" => "",
                "weight_player" => "",
                "strong_leg_player" => "",
                "role" =>"3",
                "avatar_img" => ""
            );

            if ($id = $this->model->registration($data)) {
                $data['id_player'] = $id;
                //var_dump($data);
                User::login($data);
                echo json_encode(array("error" => ""));
            } else {
                echo json_encode(array("error" => "произошла ошибочка!"));
            }
        } else {
            echo json_encode(array("error" => "Пароли не совпадают!"));
        }
    }
    
    
    
    
    
    
    public function registrationScout() {

        $FirstName = htmlspecialchars($_POST['FirstName']);
        $Email = htmlspecialchars($_POST['Email']);
        $SecondName = htmlspecialchars($_POST['SecondName']);
        $Phone = htmlspecialchars($_POST['Phone']);
        $Password = htmlspecialchars($_POST['Password']);
        $ConfirmPassword = htmlspecialchars($_POST['ConfirmPassword']);
        
        $NameOrganization = htmlspecialchars($_POST['NameOrganization']);
        $Address = htmlspecialchars($_POST['Address']);
        $City = htmlspecialchars($_POST['City']);
        $StateProvince = htmlspecialchars($_POST['StateProvince']);
        $Zipcode = htmlspecialchars($_POST['Zipcode']);
        $Country = htmlspecialchars($_POST['Country']);
        $VATnumber = htmlspecialchars($_POST['VATnumber']);
        //Сделать свои поверки на регистрацию!!!
        if ($Password == $ConfirmPassword) {
            if ($this->model->EmailExistScout($Email)) {
                echo json_encode(array("error" => "EMAIL уже существует!"));
                die;
            }

            $data = array(
                "password_scout" => md5($Password),
                "name_scout" => $FirstName,
                "email_scout" => $Email,
                "surname_scout" => $SecondName,
                "phone_scout" => $Phone,
                "name_company" => "$NameOrganization",
                "id_country" =>$Country,
                "address_company" => "$Address",
                "city_company" => "$City",
                "state_company" => "$StateProvince",
                "zipcode_company" => "$Zipcode",
                "gender_scout" => "",
                "vat_number" => "$VATnumber",
                "passport_scout" => "",
                "role"=>"4",
                "avatar_img"=>""
               
            );

            if ($id = $this->model->registrationScout($data)) {
                $data['id_scout'] = $id;
                //var_dump($data);
                User::loginscout($data);
                echo json_encode(array("error" => ""));
            } else {
                echo json_encode(array("error" => "произошла ошибочка!"));
            }
        } else {
            echo json_encode(array("error" => "Пароли не совпадают!"));
        }
    }
    
    
    
    

    public function login() {
        $data["EMAIL"] = htmlspecialchars($_POST['Email']);
        $data["PASSWORD"] = htmlspecialchars($_POST['Password']);
        
       // var_dump($data);
        sleep(1);
        if ($this->model->EmailExist($data["EMAIL"])) {
            //var_dump($this);
            if ($user = $this->model->authorization($data)) {
                // вот здесь сбой
               //var_dump($user);
                User::login($user);
                
                echo json_encode(array("error" => "player"));
            } else {
                //var_dump($user);
                echo json_encode(array("error" => "Неверный пароль!"));
            }
           
        } else {
            
            
            
            
             if ($this->model->EmailExistScout($data["EMAIL"])) {

            if ($user = $this->model->authorizationscout($data)) {
                // вот здесь сбой
               // var_dump($user);
                User::loginscout($user);
                
                echo json_encode(array("error" => "scout"));
            } else {
                echo json_encode(array("error" => "Неверный пароль!"));
            }
           
        } else {
            
            
            
            
            
         
           echo json_encode(array("error" => "email не существует!"));
           
        }
            
            
            
            //echo json_encode(array("error" => "email не существует!"));
           
        }
    }

    public function logout() {
        User::logout();
        header('Location:' . MAIN_PREFIX . '/');
    }

}
