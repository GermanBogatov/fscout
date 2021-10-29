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



<div class = "main">
    <?
    //var_dump($this);
    if (count($this->arResult["ITEMS"]) > 0):
        ?>
        <? foreach ($this->arResult["ITEMS"] as $product): ?>

            <div class="Worksheet" >
                <div class="leftblock" >
                    <form id="edit_photo" class=""  action = "" method="POST">
                        <div class="photoblock">
                            <img src='<?= MAIN_PREFIX ?>/upload/<?= $product["avatar_img"] ?>' width="170px" height="200px"/>

                        </div>

                    </form>
                </div> 





                <div class="rightblock" >

                    <div class="pass_error alert alert-danger d-none " role="alert">
                        Пароли не совпадают!
                    </div>
                    <div class="server_error alert alert-danger d-none " role="alert">

                    </div>

                    <div class = "firstblock">
                        <input type ="FirstName" name="FirstName" value="<?= $product["name_player"] ?>" readonly="" placeholder="First Name"/>
                        <input type ="SecondName" name="SecondName" value="<?= $product["surname_player"] ?>" readonly="" placeholder="Second Name"/>
                    </div>
                    <div class="secondblock">
                        <input type ="Phone" name="Phone" value="<?= $product["phone_player"] ?>" readonly="" placeholder="Phone"/>
                        <input type ="Email" name="Email" value="<?= $product["email_player"] ?>" readonly="" placeholder="E-mail"/>
                    </div>
                    <div class="thirdblock">
                        <input type ="Country" name="Birthday" value="<?= $product["birthday_player"] ?>" readonly="" placeholder="Birthday"/>
                        <input type ="Country" name="Country" value="<?= $product["id_country"] ?>" readonly="" placeholder="Country"/>
                    </div>
                    <div class="fourthblock">
                        <input type ="City" name="City" value="<?= $product["city_player"] ?>" readonly="" placeholder="City"/>
                        <input type ="State" name="State" value="<?= $product["state_player"] ?>" readonly="" placeholder="State"/>
                    </div>
                    <div class="fifthblock">

                        <input type ="Gender" name="Gender" value="<?= $product["gender_player"] ?>" readonly="" placeholder="Gender"/>
                        <input type ="Height" name="Height" value="<?= $product["height_player"] ?>" readonly="" placeholder="Height"/>
                        <input type ="Weight" name="Weight" value="<?= $product["weight_player"] ?>" readonly="" placeholder="Weight"/>
                        <input type ="Strongleg" name="Strongleg" value="<?= $product["strong_leg_player"] ?>" readonly="" placeholder="Strongleg"/>


                    </div>
                    <div class="sixthoneblock">
                        <input type ="Address" name="Address" value="<?= $product["address_player"] ?>" readonly="" placeholder="Address"/>
                        <input type ="Strongleg" name="Index" value="<?= $product["index_player"] ?>" readonly="" placeholder="index"/>
                    </div>
                    <div class="sixthblock">  
                        <input type ="Academy" name="Academy" value="<?= $product["academy_player"] ?>" readonly="" placeholder="Academy"/>
                    </div>
                    <? if (Libs\User::isLoginScout()): ?>
                        <div class="buttonblock">
                            <input type="Submit" class="Submit" name="Savechanges" value="Отправить приглашение" data-bs-toggle="modal" data-bs-target="#exampleModal"/>
                        </div>
                    <? endif ?>
                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="invitation_form"  action = "" method="POST">

                                    <div class="modal-body">
                                        <div class="alert alert-danger error_danger" style="display: none;" role="alert">
                                            Произошла ошибка!!!ssss
                                        </div>
                                        <div class="mx-auto">
                                            <div class="form-group">
                                                <input type ="hidden" name="Email" value="<?= $product["email_player"] ?>" readonly="" placeholder="E-mail"/>

                                                <label class="anons">Дата встречи</label>
                                                <input type="date" class="form-control" name="date" value="" >
                                                <label class="anons">Место встречи</label>
                                                <input type="text" class="form-control" name="meet" value="" >
                                            </div>
                                            <label class="anons">Описание</label>
                                            <textarea name="description" class="form-control" value="" rows="3"></textarea>

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


                </div>
            </div>


        </div>

    <? endforeach; ?>
<? else: ?>
    <div class="alert alert-danger error_danger"  role="alert">
        ошибка!
    </div>
<? endif ?>



<? require_once DIR_PATH_APP . '/views/footer.php' ?>