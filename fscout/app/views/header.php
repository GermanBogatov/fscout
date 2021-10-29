<!doctype html>
<html>

    <head>
        <script>
            window.BASE_DIR_AJAX = "<?= BASE_DIR_AJAX ?>";
        </script>

        <title>
            <?= $this->getTitle(); ?>
        </title>
        <meta charset="UTF-8"/>
        
        <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(75517987, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/75517987" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
        
        <meta name="google-site-verification" content="XNPBZDnic0zn6ItVcxUrCoQ2rGOY8jPJtTzcGwaCzjw" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
        <link href="<?= TEMPLATE_PATH ?>/style.css?<?= rand() ?>" rel="stylesheet"/>
        <link href="<?= MAIN_PREFIX ?>/app/css/preloader12.css?<?= rand() ?>" rel="stylesheet"/>


        <script src="<?= TEMPLATE_PATH ?>/script.js?<?= rand() ?>"></script>

        <? if (isset($this->addjs)): ?>
            <script type ="text/javascript" src="<?= $this->addjs ?>?<?= rand() ?>"></script>
        <? endif ?>
        <? if (isset($this->addcss)): ?>
            <link rel="stylesheet" href="<?= $this->addcss ?>?<?= rand() ?>">
        <? endif ?>

    </head>

    <body>









        

        <div class = "header">
            <? if (Libs\User::isLoginPlayer()): ?>
            <div class = "leftlogo" >
                <a href="<?= MAIN_PREFIX ?>/lksportsman/"><img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" width="60px" height="60px" /></a>
            </div>
             <? else: ?>
         <? if (Libs\User::isLoginScout()): ?>
            <div class = "leftlogo" >
                <a href="<?= MAIN_PREFIX ?>/lksportsman/"><img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" width="60px" height="60px" /></a>
            </div>
            <? else: ?>
            <div class = "leftlogo" >
                <a href="<?= MAIN_PREFIX ?>/"><img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" width="60px" height="60px" /></a>
            </div>
            <? endif ?>
            <? endif ?>
<? if (Libs\User::isLoginPlayer()): ?>
            <div class ="headermenu">
                <div class = "buttonHOME">
                    <input type="Button" name="btnHOME" onclick="location.href = '<?= MAIN_PREFIX ?>/home/'" value="NEWS" />

                </div>
                <div class ="line">

                </div>
                <div class="buttonVIDEO">

                    <input type="Button" name="btnVIDEO"  onclick="location.href = '<?= MAIN_PREFIX ?>/video/'" value="VIDEO" />

                </div>
            </div>

            <div class = "rightmenu">
                <div class = "userblock">
                    <div class="photouser">

                        <img src='<?= MAIN_PREFIX ?>/upload/<?= $_SESSION["USER_AVATAR"] ?>' width="36px" height="36px" />
                        
                    </div>
                    <div class="nameuser">
<?= Libs\User::getName() ?>
                    </div>
                </div>
                
                <div class = "dropdown">
                    <button onclick="myFunction()" class="dropbtn" name="dropbtn"></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="<?= MAIN_PREFIX ?>/lksportsman/">My profile</a>
                        <a href="<?= MAIN_PREFIX ?>/myvideosportsman/">My Video</a>
                        <a href="<?= MAIN_PREFIX ?>/invitesportsman/">Invite</a>
                        <a href="<?= MAIN_PREFIX ?>/reg/logout/" >Exit</a>
                    </div>
                </div>
                
                
            </div>
             <? else: ?>
           
            
         <? if (Libs\User::isLoginScout()): ?>
            <div class ="headermenu">
                <div class = "buttonHOME">
                    <input type="Button" name="btnHOME" onclick="location.href = '<?= MAIN_PREFIX ?>/home/'" value="HOME" />

                </div>
                <div class ="line">

                </div>
                <div class="buttonVIDEO">

                    <input type="Button" name="btnVIDEO"  onclick="location.href = '<?= MAIN_PREFIX ?>/video/'" value="VIDEO" />

                </div>
            </div>

            <div class = "rightmenu">
                <div class = "userblock">
                    <div class="photouser">
<img src='<?= MAIN_PREFIX ?>/upload/<?= $_SESSION["USER_AVATAR"] ?>' width="36px" height="36px" />
                    </div>
                    <div class="nameuser">
<?= Libs\User::getName() ?>
                    </div>
                </div>
                <div class = "dropdown">
                    <button onclick="myFunction()" class="dropbtn" name="dropbtn"></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="<?= MAIN_PREFIX ?>/lksportsman/">My profile</a>
                        <a href="<?= MAIN_PREFIX ?>/mynewsscout/">My NEWS</a>
                        <a href="<?= MAIN_PREFIX ?>/invitescout/">Invite</a>
                        <a href="<?= MAIN_PREFIX ?>/reg/logout/" >Exit</a>
                    </div>
                </div>
            </div>
             <? else: ?>
            <div class = "rightmenu">
                <input type="Button" onclick="location.href = '<?= MAIN_PREFIX ?>/regselection/'" value="Log in" />
                <input type="Button" href="javascript:;" onclick="openDialogLogin()" value="Sign up" />
            </div>
            <? endif ?>
            <? endif ?> 
        </div>

        
   