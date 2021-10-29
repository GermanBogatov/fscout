<?php

class sportsmanviewController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->view->setTitle("Просмотр пользователя");
        
    }
    
    
         public function index() {
         //var_dump($_SESSION["USER_VIEW_ID"]);
       //  $_SESSION["USER_ID"];
          $data = array(
                "id_player"=>$_SESSION["USER_VIEW_ID"],
            );
            
        if( $products = $this->model->getDataListPlayer($data)){  
            $this->view->arResult["ITEMS"] = $products;
            //var_dump($this->view->arResult["ITEMS"]);
        }else{
            $this->view->arResult["ITEMS"] = array();
            //var_dump($this);
        }
        parent::index();
    }
    
        public function invitation() {
            
            $subject = "Просмотр";
            $message = "Вас позвали на просмотр, зайдите на сайт и узнайте подробности!";
            
            $to=htmlspecialchars($_POST['Email']);
            //var_dump($to);
        $Date = htmlspecialchars($_POST['date']);
        $Meet = htmlspecialchars($_POST['meet']);
        $Description = htmlspecialchars($_POST['description']);
  

            $data = array(
                "id_player" => $_SESSION["USER_VIEW_ID"],
                "id_scout" => $_SESSION["USER_ID"],
                "date_meet" => $Date,
                "place_meet" => $Meet,
                "description" => $Description
                
            );

            if ($id = $this->model->invitation($data)) {
                
                echo json_encode(array("error" => ""));
                mail($to, $subject, $message);
            } else {
                echo json_encode(array("error" => "произошла ошибочка!"));
            }
        
    }
}
