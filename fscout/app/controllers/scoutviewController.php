<?php

class scoutviewController extends Controller {
    public function __construct() {
        parent::__construct();
        $this->view->setTitle("Просмотр пользователя");
        
    }
    
    
         public function index() {
         //var_dump($_SESSION["USER_VIEW_ID"]);
       //  $_SESSION["USER_ID"];
          $data = array(
                "id_scout"=>$_SESSION["USER_SCOUT_VIEW_ID"],
            );
            
        if( $products = $this->model->getDataListScout($data)){  
            $this->view->arResult["ITEMS"] = $products;
            //var_dump($this->view->arResult["ITEMS"]);
        }else{
            $this->view->arResult["ITEMS"] = array();
            //var_dump($this);
        }
        parent::index();
    }
    
        
}
