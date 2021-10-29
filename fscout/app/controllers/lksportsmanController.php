<?php
use Libs\User as User;
use Libs\Files ;
class lksportsmanController extends Controller {
    public function __construct() {
        parent::__construct();
         $this->view->setTitle("Личный кабинет");
        
    }
   
    
    
    public function addphotoPlayer() {
        $datas = array();
        $error = array();
        if (count($_POST) > 0) {
            foreach ($_POST as $key => $rd) {
                $datas[htmlspecialchars($key)] = htmlspecialchars($rd);
            }
        }
       
        if (isset($_FILES["avatar"])) {
            $datas["avatar_img"] = Files::uploadFile($_FILES["avatar"], get_class($this));
        }
        
        
        if (count($error) == 0) {
            $data = array(
                "id_player"=>$_SESSION["USER_ID"],
                "password_player" =>$_SESSION["USER_PASSWORD"],
                "name_player" =>$_SESSION["USER_NAME"],
                "email_player" =>$_SESSION["USER_EMAIL"],
                "surname_player" =>$_SESSION["USER_SNAME"],
                "phone_player" =>$_SESSION["USER_PHONE"],
                "academy_player" =>$_SESSION["USER_ACADEMY"],
                "id_country" =>$_SESSION["USER_COUNTRY"],
                "address_player" =>$_SESSION["USER_ADDRESS"],
                "city_player" =>$_SESSION["USER_CITY"],
                "state_player" =>$_SESSION["USER_STATE"],
                "index_player" =>$_SESSION["USER_INDEX"],
                "birthday_player" =>$_SESSION["USER_BIRTHDAY"],
                "gender_player" =>$_SESSION["USER_GENDER"],
                "height_player" =>$_SESSION["USER_HEIGHT"],
                "weight_player" =>$_SESSION["USER_WEIGHT"],
                "strong_leg_player" => $_SESSION["USER_STRONG_LEG"],
                "role" =>"3",
                "avatar_img" =>$datas["avatar_img"]
            );
               $dataimg = array(
                   "id_player"=>$_SESSION["USER_ID"],
                "avatar_img" =>$datas["avatar_img"]    
            );
            
            
            if ($id = $this->model->addphotoPlayer( $data )){
                $idimg = $this->model->updatephotoPlayer( $dataimg );
                User::login($data);
                echo json_encode(array("error" => ""));
            }else{
                echo json_encode(array("error" => true));
            }
        } else {
            echo json_encode(array("errors" => $error));
        }
    }
    
    
    
    public function addphotoScout() {
        $datas = array();
        $error = array();
        if (count($_POST) > 0) {
            foreach ($_POST as $key => $rd) {
                $datas[htmlspecialchars($key)] = htmlspecialchars($rd);
            }
        }
       
        if (isset($_FILES["avatar"])) {
            $datas["avatar_img"] = Files::uploadFile($_FILES["avatar"], get_class($this));
        }
        
        
        if (count($error) == 0) {
            $data = array(
                "id_scout"=>$_SESSION["USER_ID"],
                "password_scout" =>$_SESSION["USER_PASSWORD"],
                "name_scout" =>$_SESSION["USER_NAME"],
                "email_scout" =>$_SESSION["USER_EMAIL"],
                "surname_scout" =>$_SESSION["USER_SNAME"],
                "phone_scout" =>$_SESSION["USER_PHONE"],
                "name_company" =>$_SESSION["USER_COMPANY"],
                "id_country" =>$_SESSION["USER_COUNTRY"],
                "address_company" =>$_SESSION["USER_ADDRESS"],
                "city_company" =>$_SESSION["USER_CITY"],
                "state_company" =>$_SESSION["USER_STATE"],
                "zipcode_company" =>$_SESSION["USER_INDEX"],
                "gender_scout" =>$_SESSION["USER_GENDER"],
                "vat_number" =>$_SESSION["USER_VAT"],
                "passport_scout" =>$_SESSION["USER_PASSPORT"],
                "role"=>"4",
                "avatar_img" =>$datas["avatar_img"]
                
            );
            if ($id = $this->model->addPhotoScout( $data )){
                User::loginscout($data);
                echo json_encode(array("error" => ""));
            }else{
                echo json_encode(array("error" => true));
            }
        } else {
            echo json_encode(array("errors" => $error));
        }
    }
    
    
    
    
    
      public function editPlayer() {
          
          
        $FirstName = htmlspecialchars($_POST['FirstName']);
        $Email = htmlspecialchars($_POST['Email']);
        $SecondName = htmlspecialchars($_POST['SecondName']);
        $Phone = htmlspecialchars($_POST['Phone']);
        //$Password = htmlspecialchars($_POST['Password']);
        //$ConfirmPassword = htmlspecialchars($_POST['Confirmpassword']);
        $Birthday = htmlspecialchars($_POST['Birthday']);
        $Country = htmlspecialchars($_POST['Country']);
        $City = htmlspecialchars($_POST['City']);
        $State = htmlspecialchars($_POST['State']);
        $Gender = htmlspecialchars($_POST['Gender']);
        $Height = htmlspecialchars($_POST['Height']);
        $Weight = htmlspecialchars($_POST['Weight']);
        $Strongleg = htmlspecialchars($_POST['Strongleg']);
        $Academy = htmlspecialchars($_POST['Academy']);
        $Address = htmlspecialchars($_POST['Address']);
        $Index = htmlspecialchars($_POST['Index']);
       
        
         
        
        //Сделать свои поверки на регистрацию!!!
        if ( !empty($FirstName) || !empty($Email) || !empty($SecondName) || !empty($Phone)  ){
           
           // var_dump($datas["avatar_img"]);
            
           

            $data = array(
                "id_player"=>$_SESSION["USER_ID"],
                "password_player" =>$_SESSION["USER_PASSWORD"], 
                "name_player" =>$FirstName,
                "email_player" =>$Email,
                "surname_player" =>$SecondName,
                "phone_player" =>$Phone,
                "academy_player" =>$Academy,
                "id_country" =>$Country,
                "address_player" =>$Address,
                "city_player" =>$City,
                "state_player" =>$State,
                "index_player" =>$Index,
                "birthday_player" =>$Birthday,
                "gender_player" =>$Gender,
                "height_player" =>$Height,
                "weight_player" =>$Weight,
                "strong_leg_player" =>$Strongleg,
                "role" =>"3",
                "avatar_img" =>$_SESSION["USER_AVATAR"]
                
            );
            
            
            
            
            //var_dump($data);
          if ( $id = $this->model->editPlayer( $data )){
            //$data['id_player']=$id;
               User::login($data);
                echo json_encode(array("error" => ""));
               //var_dump("Privetiki_pistaletiki false");
            }else{
                //почему то сюда не попаддает, когда данные остаются неизменными
                echo json_encode(array("error" =>"Вы не изменили данные!"));  
                
            }
            
            
        } else {
           echo json_encode(array("error" =>"Заполните все поля!"));
        }
    }
    
    
    
    
     public function updatePasswordPlayer() {

        
        $Password = htmlspecialchars($_POST['Password']);
        $ConfirmPassword = htmlspecialchars($_POST['Confirmpassword']);
      
       
        
        
        
        //Сделать свои поверки на регистрацию!!!
      if ( !empty($Password) || !empty($ConfirmPassword)  ){
        if($Password == $ConfirmPassword){  
                
                
           

            $data = array(
                "id_player"=>$_SESSION["USER_ID"],
                "password_player" =>md5($Password),
                "name_player" =>$_SESSION["USER_NAME"],
                "email_player" =>$_SESSION["USER_EMAIL"],
                "surname_player" =>$_SESSION["USER_SNAME"],
                "phone_player" =>$_SESSION["USER_PHONE"],
                "academy_player" =>$_SESSION["USER_ACADEMY"],
                "id_country" =>$_SESSION["USER_COUNTRY"],
                "address_player" =>$_SESSION["USER_ADDRESS"],
                "city_player" =>$_SESSION["USER_CITY"],
                "state_player" =>$_SESSION["USER_STATE"],
                "index_player" =>$_SESSION["USER_INDEX"],
                "birthday_player" =>$_SESSION["USER_BIRTHDAY"],
                "gender_player" =>$_SESSION["USER_GENDER"],
                "height_player" =>$_SESSION["USER_HEIGHT"],
                "weight_player" =>$_SESSION["USER_WEIGHT"],
                "strong_leg_player" => $_SESSION["USER_STRONG_LEG"],
                "role" =>"3",
                "avatar_img" =>$_SESSION["USER_AVATAR"]
                
            );
            //var_dump($data);
          if ( $id = $this->model->editPasswordPlayer( $data )){
            //  $data['id_player']=$id;
               User::login($data);
                echo json_encode(array("error" => ""));
               //var_dump("Privetiki_pistaletiki false");
            }else{
                 echo json_encode(array("error" =>"вы ввели старый пароль, придумайте новый!"));  
      
                //echo json_encode(array("error" =>"Вы не изменили данные!"));  
               // echo json_encode(array("error" => true));
               // var_dump("Privetiki_pistaletiki");
               // User::login($data);
            }
            
        
        } else {
           echo json_encode(array("error" =>"Пароли не совпадают!")); 
        }
    }else{
        echo json_encode(array("error" =>"Заполните все поля!"));
    }
     }
    
    
     
     
     
     
     
     public function editScout() {

        $FirstName = htmlspecialchars($_POST['FirstName']);
        $Email = htmlspecialchars($_POST['Email']);
        $SecondName = htmlspecialchars($_POST['SecondName']);
        $Phone = htmlspecialchars($_POST['Phone']);
        
        $Company = htmlspecialchars($_POST['Company']);
        $Address = htmlspecialchars($_POST['Addresscompany']);
        $City = htmlspecialchars($_POST['City']);
        $State = htmlspecialchars($_POST['State']);
        $Zipcode = htmlspecialchars($_POST['Zipcode']);
        $Country = htmlspecialchars($_POST['Country']);
        $VATnumber = htmlspecialchars($_POST['VATnumber']);
       $Gender = htmlspecialchars($_POST['Gender']);
        $Passport = htmlspecialchars($_POST['Passport']);
        
        
        //Сделать свои поверки на регистрацию!!!
        if ( !empty($FirstName) || !empty($Email) || !empty($SecondName) || !empty($Phone)  ){
            
                
                
           

            $data = array(
                "id_scout"=>$_SESSION["USER_ID"],
                "password_scout" => $_SESSION["USER_PASSWORD"], 
                "name_scout" =>$FirstName,
                "email_scout" =>$Email,
                "surname_scout" =>$SecondName,
                "phone_scout" => $Phone,
                "name_company" =>$Company,
                "id_country" =>$Country,
                "address_company" =>$Address,
                "city_company" =>$City,
                "state_company" =>$State,
                "zipcode_company" =>$Zipcode,
                "gender_scout" =>$Gender,
                "vat_number" =>$VATnumber,
                "passport_scout" =>$Passport,
                "role"=>"4",
                "avatar_img" =>$_SESSION["USER_AVATAR"]
            );
            //var_dump($data);
          if ( $id = $this->model->editScout( $data )){
            //  $data['id_player']=$id;
               User::loginscout($data);
                echo json_encode(array("error" => ""));
               //var_dump("Privetiki_pistaletiki false");
            }else{
                echo json_encode(array("error" =>"Вы не изменили данные!"));  
                //echo json_encode(array("error" => true));
                //var_dump("Privetiki_pistaletiki");
                //User::loginscout($data);
            }
            
            
        } else {
           echo json_encode(array("error" =>"Заполните все поля!"));
        }
    }
    
    
    
    
     public function updatePasswordScout() {

        
        $Password = htmlspecialchars($_POST['Password']);
        $ConfirmPassword = htmlspecialchars($_POST['Confirmpassword']);
      
       
        
        
        
        //Сделать свои поверки на регистрацию!!!
      if ( !empty($Password) || !empty($ConfirmPassword)  ){
        if($Password == $ConfirmPassword){  
                
                
           

            $data = array(
                "id_scout"=>$_SESSION["USER_ID"],
                "password_scout" =>md5($Password),
                "name_scout" =>$_SESSION["USER_NAME"],
                "email_scout" =>$_SESSION["USER_EMAIL"],
                "surname_scout" =>$_SESSION["USER_SNAME"],
                "phone_scout" =>$_SESSION["USER_PHONE"],
                "name_company" =>$_SESSION["USER_COMPANY"],
                "id_country" =>$_SESSION["USER_COUNTRY"],
                "address_company" =>$_SESSION["USER_ADDRESS"],
                "city_company" =>$_SESSION["USER_CITY"],
                "state_company" =>$_SESSION["USER_STATE"],
                "zipcode_company" =>$_SESSION["USER_INDEX"],
                "gender_scout" =>$_SESSION["USER_GENDER"],
                "vat_number" =>$_SESSION["USER_VAT"],
                "passport_scout" =>$_SESSION["USER_PASSPORT"],
                "role"=>"4",
                "avatar_img" =>$_SESSION["USER_AVATAR"]
            );
            //var_dump($data);
          if ( $id = $this->model->editPasswordScout( $data )){
            //  $data['id_player']=$id;
               User::loginscout($data);
                echo json_encode(array("error" => ""));
            }else{
                 echo json_encode(array("error" =>"вы ввели старый пароль, придумайте новый!"));  
            }
            
        
        } else {
           echo json_encode(array("error" =>"Пароли не совпадают!")); 
        }
    }else{
        echo json_encode(array("error" =>"Заполните все поля!"));
    }
     }
     
   
     
   
     
     
     
}
