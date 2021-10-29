<?php

use Libs\User as User;
use Libs\Files;

class myvideosportsmanController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->setTitle("My Video");
    }

     public function index() {
         
       //  $_SESSION["USER_ID"];
          $data = array(
                "id_player"=>$_SESSION["USER_ID"],
            );
            
        if( $products = $this->model->getListPlayer($data)){  
            $this->view->arResult["ITEMS"] = $products;
           
        }else{
            $this->view->arResult["ITEMS"] = array();
            //var_dump($this);
        }
        parent::index();
    }
    
    
    public function addVideo() {
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

        if (isset($_FILES["video_img"])) {
            $data["video_img"] = Files::uploadFileVideo($_FILES["video_img"], get_class($this));
        }


        if (count($error) == 0) {
            $addData = array(
                "id_player" => $_SESSION["USER_ID"],
                "video_img" => $data["video_img"],
                "description" => $data["description"],
                "avatar_img" => $_SESSION["USER_AVATAR"]
            );
            // var_dump($addData);
            if ($id = $this->model->addVideo($addData)) {
             
                echo json_encode(array("error" => false));
                   
            } else {
                echo json_encode(array("error" => true));
            }
        } else {
            echo json_encode(array("errors" => $error));
        }
    }

}
