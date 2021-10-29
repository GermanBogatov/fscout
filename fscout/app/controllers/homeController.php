<?php
use Libs\User as User;
use Libs\Files ;
class homeController extends Controller {
    public function __construct() {
        parent::__construct();
         $this->view->setTitle("HOME");
        
    }
    
    
     public function index() {
        if( $products = $this->model->getList('scout_news')){  
            $this->view->arResult["ITEMS"] = $products;
        }else{
            $this->view->arResult["ITEMS"] = array();
        }
        parent::index();
    }
    
    
    
      public function viewphoto() {
       $data = array();
        $error = array();
     
        if (count($_POST) > 0) {
            foreach ($_POST as $key => $rd) {
                $data[htmlspecialchars($key)] = htmlspecialchars($rd);
            }
        }
        if (strlen($data['idphoto']) < 1) {
            $error["name"] = "short";
        }
        //var_dump($data['idphoto']);
        $_SESSION["USER_SCOUT_VIEW_ID"] = $data['idphoto'];
        echo json_encode(array("error" => ""));
    }
    
    
}
