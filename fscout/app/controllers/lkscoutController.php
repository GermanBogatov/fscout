<?php
use Libs\User as User;
class lkscoutController extends Controller {
    public function __construct() {
        parent::__construct();
         $this->view->setTitle("Личный кабинет");
        
    }
    
    
      public function editPlayer() {

        $FirstName = htmlspecialchars($_POST['FirstName']);
        $Email = htmlspecialchars($_POST['Email']);
        $SecondName = htmlspecialchars($_POST['SecondName']);
        $Phone = htmlspecialchars($_POST['Phone']);
        $Password = htmlspecialchars($_POST['Password']);
        $ConfirmPassword = htmlspecialchars($_POST['Confirmpassword']);
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
        if ($Password == $ConfirmPassword) {
            
                
                
           

            $data = array(
                "id_player"=>$_SESSION["USER_ID"],
                "password_player" => md5($Password),
                "name_player" => $FirstName,
                "email_player" => $Email,
                "surname_player" => $SecondName,
                "phone_player" => $Phone,
                "academy_player" => $Academy,
                "id_country" => "$Country",
                "address_player" => $Address,
                "city_player" => $City,
                "state_player" => $State,
                "index_player" => $Index,
                "birthday_player" => $Birthday,
                "gender_player" => $Gender,
                "height_player" => $Height,
                "weight_player" => $Weight,
                "strong_leg_player" => $Strongleg
            );
            //var_dump($data);
          if ( $this->model->editPlayer( $data )){
               User::login($data);
                echo json_encode(array("error" => ""));
               // var_dump("Privetiki_pistaletiki false");
            }else{
                echo json_encode(array("error" => true));
                var_dump("Privetiki_pistaletiki");
                User::login($data);
            }
            
            
        } else {
            echo json_encode(array("error" => "Пароли не совпадают!"));
        }
    }
    
    
    
//     public function edit() {
//          $data = array(
//              'id'=> htmlspecialchars($_POST["id"]),
//            'name' => htmlspecialchars($_POST["section_name"]),
//            'code' => htmlspecialchars($_POST["section_code"]),
//            'parent_id' => htmlspecialchars($_POST["parent_section"]) == 0 ? null : htmlspecialchars($_POST["parent_section"]),
//             'depth_level'=>is_null ($_POST["depth_level"])? 0 : htmlspecialchars($_POST["depth_level"])
//            );
//        
//        if(strlen($data['name'])>= 2 && strlen($data['code']) >= 2 && $data['id']>0 ){
//            if ( $this->model->edit( $data )){
//                echo json_encode(array("error" => false));
//            }else{
//                echo json_encode(array("error" => true));
//            }
//        }else{
//            echo json_encode(array("error" => true));
//        }
//    }
    
}
