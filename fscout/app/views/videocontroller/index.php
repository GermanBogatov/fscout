<? require_once DIR_PATH_APP . '/views/header.php' ?>

<div class = "menu">
   
</div>







<div class = "main">
    
    <?
    //var_dump($this);
    if (count($this->arResult["ITEMS"]) > 0):
        ?>
    <? foreach ($this->arResult["ITEMS"] as $product): ?>
            <div class ="videoblock1"  >

                <div class = "video1" >
                    <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="384"
                        height="216"
                        data-setup="{}"
                        >
        <?= strlen($product["video_img"]) > 0 ? "<source src='" . MAIN_PREFIX . "/upload/{$product["video_img"]}'/>" : "" ?>
                        <source src="MY_VIDEO.webm" type="video/webm" />                 
                    </video>

                </div>
                
                <div class="photouser">
                    <form id="idphoto" class="idphoto" action = "" method="POST">
                        <input type ="hidden" name="idphoto" value="<?= $product["id_player"] ?>" placeholder="Birthday"/>
                    <a  name="viewphoto" value="<?= $product["id_player"] ?>" href="<?= MAIN_PREFIX ?>/sportsmanview/"><img src='<?= MAIN_PREFIX ?>/upload/<?= $product["avatar_img"] ?>' width="50px" height="50px"  /></a>
                    </form>
                        
                    </div>
                <div class = "textvideo1">
                    
                    
                    <?= $product["description"] ?>
                </div>
            </div>   

        <? endforeach; ?>
<? else: ?>
        <div class="alert alert-danger error_danger"  role="alert">
            Нет продуктов по вашему запросу!
        </div>
<? endif ?>



</div>



<? require_once DIR_PATH_APP . '/views/footer.php' ?>