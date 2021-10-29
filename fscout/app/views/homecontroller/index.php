<? require_once DIR_PATH_APP . '/views/header.php' ?>

<div class = "menu">
    
</div>

<div class = "main">
   
    <? 
    //var_dump($this);
    if ( count($this->arResult["ITEMS"])>0):?>
    <? foreach ($this->arResult["ITEMS"] as $product):?>
    <div class ="videoblock1"  >
        <div class = "video1">
<?=strlen($product["news_img"]) > 0 ? "<img src='".MAIN_PREFIX."/upload/{$product["news_img"]}' width='600px' height='400px'/>": ""?>
        
        </div>

        <div class="photouser">
                    <form id="idphoto" class="idphoto" action = "" method="POST">
                        <input type ="hidden" name="idphoto" value="<?= $product["id_scout"] ?>" placeholder="Birthday"/>
                    <a  name="viewphoto" value="<?= $product["id_scout"] ?>" href="<?= MAIN_PREFIX ?>/scoutview/"><img src='<?= MAIN_PREFIX ?>/upload/<?= $product["avatar_img"] ?>' width="50px" height="50px"  /></a>
                    </form>
                        
                    </div>
        
        <div class = "textvideo1">
<?=$product["description"]?>
        </div>
    </div>  
    <br>
 <? endforeach;?>
<?else:?>
<div class="alert alert-danger error_danger"  role="alert">
                     Новости от скаутов отсутсвуют!
                    </div>
<?endif?>



</div>
<? require_once DIR_PATH_APP . '/views/footer.php' ?>