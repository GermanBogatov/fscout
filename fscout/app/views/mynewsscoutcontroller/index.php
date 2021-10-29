<? require_once DIR_PATH_APP . '/views/header.php' ?>

<div class = "menu">
    <div class="myprofile">
        <input type="Button" name="MyProfile" onclick="location.href = '<?= MAIN_PREFIX ?>/lksportsman/'" value="My profile"/>
    </div>

    <div class="mynews">
        <input type="Button" name="MyNews" onclick="location.href = '<?= MAIN_PREFIX ?>/mynewsscout/'" value="My News"/>
    </div>

    <div class="invite">
        <input type="Button" name="Invite" onclick="location.href = '<?= MAIN_PREFIX ?>/invitescout/'" value="Invite"/>
    </div>
</div>






<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Добавить новость
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        
        
        <form id="form_new_product" name="form_new_product" method="post" action="">
      <div class="modal-body">
                    <div class="alert alert-danger error_danger" style="display: none;" role="alert">
                        Произошла ошибка!!!ssss
                    </div>
                    <div class="mx-auto">


                        
                        
                         <div class="form-group">
                             <label class="anons">Картинка анонса</label>
                            <input type="file" class="form-control" name="news_img"  >
                        </div>
                        <label class="anons">Описание</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                        
                       
                        
                        

                    </div>
                </div>
        
        
        
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add news</button>
      </div>
             </form>
    </div>
  </div>
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
                     Нет продуктов по вашему запросу!
                    </div>
<?endif?>



</div>
<? require_once DIR_PATH_APP . '/views/footer.php' ?>