<?php
use Libs\User;
class View{
    
    private $title = "Пустой заголовок";
    public function render( $path, $file_name = 'index',$add_files = true ){
        if (file_exists(__DIR__.'/../views/'.$path.'/'.$file_name.'.php')){
            
            if($add_files){
                
                if(file_exists(__DIR__.'/../views/'.$path.'/style.css')){
                    $this->addcss = TEMPLATE_PATH.'/'.$path.'/style.css';
                }
                
                if(file_exists(__DIR__.'/../views/'.$path.'/script.js')){
                    $this->addjs = TEMPLATE_PATH.'/'.$path.'/script.js';
                }
            }
            require __DIR__.'/../views/'.$path.'/'.$file_name.'.php';
        }
        else{
            App::showError("Template by $path does not exist");
        }
    }
   // public function addHeader(){
   //     if (file_exists(__DIR__.'/../views/header.php')){
   //         require __DIR__.'/../views/header.php';
   //     }
   // }
  //  public function addFooter(){
  //      if (file_exists(__DIR__.'/../views/footer.php')){
  //          require __DIR__.'/../views/footer.php';
  //      }
  //  }
    
    public function setTitle($title){
        $this->title=$title;
    }
    public function getTitle(){
        return $this->title;
    }
}

