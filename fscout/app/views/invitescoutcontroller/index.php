<? require_once DIR_PATH_APP . '/views/header.php' ?>
<!--
<?= var_dump($this->ResultPlayerId["ITEMS"]) ?> -->

<div class = "menu">
    <div class="myprofile">
        <input type="Button" name="MyProfile" onclick="location.href = '<?= MAIN_PREFIX ?>/lkscout/'" value="My profile"/>
    </div>

    <div class="mynews">
        <input type="Button" name="MyNews" onclick="location.href = '<?= MAIN_PREFIX ?>/mynewsscout/'" value="My News"/>
    </div>

    <div class="invite">
        <input type="Button" name="Invite" onclick="location.href = '<?= MAIN_PREFIX ?>/invitescout/'" value="Invite"/>
    </div>
</div>




<div class = "main">
    <?
    //var_dump($this);
    if (count($this->arResult["ITEMS"]) > 0):
        ?>
        <? foreach ($this->arResult["ITEMS"] as $product): ?>



            <div class="inviteblock" >
                <div class="photoblock">
                    <? foreach ($this->ResultPlayerId["ITEMS"] as $playerid): ?>
                        <? if ($product["id_player"] == $playerid["id_player"]) : ?>
                            <img src='<?= MAIN_PREFIX ?>/upload/<?= $playerid["avatar_img"] ?>' width="170px" height="200px"/>
                        <? endif ?>
                    <? endforeach; ?>
                </div>
                <div class="textblock">
                    <div class="texttext">
                        <? foreach ($this->ResultPlayerId["ITEMS"] as $playerid): ?>
                            <? if ($product["id_player"] == $playerid["id_player"]) : ?>
                                Приглашения для:  <?= $playerid["name_player"] ?>&nbsp;<?= $playerid["surname_player"] ?>
                            <? endif ?>
                        <? endforeach; ?>
                    </div>
                    <div class="texttext">
                        Место встречи: <?= $product["place_meet"] ?>

                    </div>
                    <div class="texttext">
                        Дата встречи: <?= $product["date_meet"] ?>
                    </div>
                     <div class="textdescription">
                        Дополнительно: <?= $product["description"] ?>
                    </div>
                </div>

            </div>  



        <? endforeach; ?>
    <? else: ?>
        <div class="alert alert-danger error_danger"  role="alert">
            Нет приглашений!
        </div>
    <? endif ?>
</div>

<? require_once DIR_PATH_APP . '/views/footer.php' ?>