<?php
use Libs\User as User;
class invitesportsmanController extends Controller {
    public function __construct() {
        parent::__construct();
         $this->view->setTitle("Мои видео");
        
    }
    
      public function index() {
         
       //  $_SESSION["USER_ID"];
          $data = array(
                "id_player"=>$_SESSION["USER_ID"]
             
            );
            
       
        if( $products = $this->model->getListPlayerInvite($data)){  
            $this->view->arResult["ITEMS"] = $products;
           
        }else{
            $this->view->arResult["ITEMS"] = array();
            //var_dump($this);
        }
        if( $playerid = $this->model->getListScoutInvite('scout')){  
          
            $this->view->ResultPlayerId["ITEMS"] = $playerid;
        }else{
            var_dump($playerid);
            $this->view->ResultPlayerId["ITEMS"] = array();
        }
       // $users = $this->model->getListPlayerId();
//        if( $users = $this->model->getListPlayerId($data)){  
//            $this->view->arResultSCOUT["ITEMS"] = $users;
//           
//        }else{
//            $this->view->arResultSCOUT["ITEMS"] = array();
//            //var_dump($this);
//        }
//        
        
        parent::index();
    }
}


