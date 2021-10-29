<? require_once DIR_PATH_APP . '/views/header.php' ?>

 <div class ="leftside">
            <div class="sign1">
                <div class ="logotop">
                     <img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" alt="logo">
                 </div>
                       <div class = "NAME">
                        SPORTSMAN
                        </div>
                        <input type="Button" name="CreateAccount" onclick="location.href='<?=MAIN_PREFIX?>/reg/' " value="Create account"/>
            </div>
        </div>

        <div class ="rightside">
                <div class="sign">
                       <div class ="logotop">
                            <img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" alt="logo">
                        </div>
                        <div class = "NAME">
                         SCOUT
                        </div>
                        <input type="Button" name="CreateAccount" onclick="location.href='<?=MAIN_PREFIX?>/regscout/' " value="Create account"/>
                </div>
        </div>

<? require_once DIR_PATH_APP . '/views/footer.php' ?>


