<?php


class NewsController extends Controller
{
public function __construct() {
        parent::__construct();
        
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
    
    
    
    
}
