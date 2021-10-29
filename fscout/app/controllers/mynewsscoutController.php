<?php
use Libs\User as User;
use Libs\Files ;
class mynewsscoutController extends Controller {
    public function __construct() {
        parent::__construct();
         $this->view->setTitle("Мои новости");
        
    }
    
    
     public function index() {
         
         $_SESSION["USER_ID"];
          $data = array(
                "id_scout"=>$_SESSION["USER_ID"],
            );
            
        if( $products = $this->model->getListScout($data)){  
            $this->view->arResult["ITEMS"] = $products;
        }else{
            $this->view->arResult["ITEMS"] = array();
        }
        parent::index();
    }
    
    
    
     public function addNews() {
        $data = array();
        $error = array();
        if (count($_POST) > 0) {
            foreach ($_POST as $key => $rd) {
                $data[htmlspecialchars($key)] = htmlspecialchars($rd);
            }
        }
        if (strlen($data['description']) < 1) {
            $error["name"] = "short";
        }
       
        if (isset($_FILES["news_img"])) {
            $data["news_img"] = Files::uploadFile($_FILES["news_img"], get_class($this));
        }
        
        
        if (count($error) == 0) {
            $addData = array(
"id_scout"=>$_SESSION["USER_ID"],
                "news_img" => $data["news_img"],
                "description" => $data["description"],
                "avatar_img" => $_SESSION["USER_AVATAR"]
            );
            if ($id = $this->model->addNews( $addData )){
                
                echo json_encode(array("error" => false));
            }else{
                echo json_encode(array("error" => true));
            }
        } else {
            echo json_encode(array("errors" => $error));
        }
    }
    
    
    
}
