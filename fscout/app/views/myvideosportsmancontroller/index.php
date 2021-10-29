<? require_once DIR_PATH_APP . '/views/header.php' ?>

<div class = "menu">
    <div class="myprofile">
        <input type="Button" name="MyProfile" onclick="location.href = '<?= MAIN_PREFIX ?>/lksportsman/'" value="My profile"/>
    </div>

    <div class="myvideo">
        <input type="Button" name="MyVideo" onclick="location.href = '<?= MAIN_PREFIX ?>/myvideosportsman/'" value="My Video"/>
    </div>

    <div class="invite">
        <input type="Button" name="Invite" onclick="location.href = '<?= MAIN_PREFIX ?>/invitesportsman/'" value="Invite"/>
    </div>
</div>




<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Добавить видео
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
                            <label class="anons">Добавить видео</label>
                            <input type="file" class="form-control" name="video_img"  >
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
                <input type ="hidden" name="idphoto" value="<?= $product["id_player"] ?>" placeholder="Birthday"/>
                <div class="photouser">
<a href="<?= MAIN_PREFIX ?>/sportsmanview/"><img src='<?= MAIN_PREFIX ?>/upload/<?= $_SESSION["USER_AVATAR"] ?>' width="50px" height="50px"  /></a>
                        
                        
                    </div>
                <div class = "textvideo1">
                    
                    
                    <?= $product["description"] ?>
                </div>
            </div>   

        <? endforeach; ?>
    <? else: ?>
        <div class="alert alert-danger error_danger"  role="alert">
            Нет видео!
        </div>
    <? endif ?>



</div>



<? require_once DIR_PATH_APP . '/views/footer.php' ?>