<? require_once DIR_PATH_APP . '/views/header.php' ?>



<? if (Libs\User::isLoginPlayer()): ?>


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
        <div class="Worksheet" >
            <div class="leftblock" >
                <form id="edit_photo" class=""  action = "" method="POST">
                    <div class="photoblock">
                        <img src='<?= MAIN_PREFIX ?>/upload/<?= $_SESSION["USER_AVATAR"] ?>' width="170px" height="200px"/>

                    </div>
                    <div class="buttonblock">
                        <input type="file" class="uploadphoto" name="avatar"  >

                        <input type="Submit" class="Submit" name="Savechanges" value="photo"/>
                    </div>
                </form>
            </div> 





            <div class="rightblock" >
                <form id="edit_form"  action = "" method="POST">
                    <div class="pass_error alert alert-danger d-none " role="alert">
                        Пароли не совпадают!
                    </div>
                    <div class="server_error alert alert-danger d-none " role="alert">

                    </div>
                    
                    <div class = "firstblock">
                        
                        <input type ="FirstName" name="FirstName" value="<?= $_SESSION["USER_NAME"] ?>" placeholder="First Name"/>
                        <input type ="SecondName" name="SecondName" value="<?= $_SESSION["USER_SNAME"] ?> "placeholder="Second Name"/>
                    </div>
                    <div class="secondblock">
                        <input type ="Phone" name="Phone" value="<?= $_SESSION["USER_PHONE"] ?>" placeholder="Phone"/>
                        <input type ="Email" name="Email" value="<?= $_SESSION["USER_EMAIL"] ?>" placeholder="E-mail"/>
                    </div>
                    <div class="thirdblock">
                        <input type ="date" name="Birthday" value="<?= $_SESSION["USER_BIRTHDAY"] ?>" placeholder="Birthday"/>
                        <input type ="Country" name="Country" value="<?= $_SESSION["USER_COUNTRY"] ?>" placeholder="Country"/>
                    </div>
                    <div class="fourthblock">
                        <input type ="City" name="City" value="<?= $_SESSION["USER_CITY"] ?>" placeholder="City"/>
                        <input type ="State" name="State" value="<?= $_SESSION["USER_STATE"] ?>" placeholder="State"/>
                    </div>
                    <div class="fifthblock">
                        
                        <select type ="Gender" name="Gender" >
                            <option value="" >Gender</option>
                           
                            <option value="Man" <?= $_SESSION["USER_v1"] ?> >Man</option>
                            <option value="Woman" <?= $_SESSION["USER_v2"] ?>  >Woman</option>
                          
                        </select>
                        <input type ="Height" name="Height" value="<?= $_SESSION["USER_HEIGHT"] ?>" placeholder="Height"/>
                        <input type ="Weight" name="Weight" value="<?= $_SESSION["USER_WEIGHT"] ?>" placeholder="Weight"/>
                        <select type ="Strongleg" name="Strongleg" >
                            <option value="" >Leg</option>
                           
                            <option value="Left" <?= $_SESSION["USER_t1"] ?> >Left</option>
                            <option value="Right" <?= $_SESSION["USER_t2"] ?>  >Right</option>
                          
                        </select>
                        
                    </div>
                    <div class="sixthoneblock">
                        <input type ="Address" name="Address" value="<?= $_SESSION["USER_ADDRESS"] ?>" placeholder="Address"/>
                        <input type ="Strongleg" name="Index" value="<?= $_SESSION["USER_INDEX"] ?>" placeholder="index"/>
                    </div>
                    <div class="sixthblock">  
                        <input type ="Academy" name="Academy" value="<?= $_SESSION["USER_ACADEMY"] ?>" placeholder="Academy"/>
                    </div>
                    <div class="buttonblock">
                        <input type="Submit" class="Submit" name="Savechanges" value="Save changes"/>
                    </div>
                </form>

                <form id="password_form" action="" method="post">
                    <div class="seventhblock">
                        <input type ="Password" name="Password" value="" placeholder="Create new password"/>
                        <input type ="Password" name="Confirmpassword" value="" placeholder="Confirm new password"/>
                    </div>
                    <div class="buttonblock">
                        <input type="Submit" class="Submit" name="Savechanges" value="Update password"/>
                    </div>

                </form>

            </div>
        </div>

    <? else: ?>


        <? if (Libs\User::isLoginScout()): ?>
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



            <div class = "main">
                <div class="Worksheet" >
                    <div class="leftblock" >
                        <form id="edit_photo_scout" class=""  action = "" method="POST">
                            <div class="photoblock">
                                <img src='<?= MAIN_PREFIX ?>/upload/<?= $_SESSION["USER_AVATAR"] ?>' width="170px" height="200px"/>

                            </div>
                            <div class="buttonblock">
                                <input type="file" class="uploadphoto" name="avatar"  >

                                <input type="Submit" class="Submit" name="Savechanges" value="photo"/>
                            </div>
                        </form>

                    </div>  
                    <div class ="rightblock">
                        <form id="edit_form_scout"  action = "" method="POST">
                            <div class="pass_error alert alert-danger d-none " role="alert">
                                Пароли не совпадают!
                            </div>
                            <div class="server_error alert alert-danger d-none " role="alert">

                            </div>
                            <div class = "firstblock">
                                <input type ="FirstName" name="FirstName" value="<?= $_SESSION["USER_NAME"] ?>"placeholder="First Name"/>
                                <input type ="SecondName" name="SecondName" value="<?= $_SESSION["USER_SNAME"] ?>"placeholder="Second Name"/>
                            </div>
                            <div class="secondblock">
                                <input type ="Phone" name="Phone" value="<?= $_SESSION["USER_PHONE"] ?>"placeholder="Phone"/>
                                <input type ="Email" name="Email" value="<?= $_SESSION["USER_EMAIL"] ?>"placeholder="E-mail"/>
                            </div>
                            <div class="fifthblock">
                                <select type ="Gender" name="Gender" >
                            <option value="" >Gender</option>
                           
                            <option value="Man" <?= $_SESSION["USER_v1"] ?> >Man</option>
                            <option value="Woman" <?= $_SESSION["USER_v2"] ?>  >Woman</option>
                          
                        </select>
                                <input type ="Passport" name="Passport" value="<?= $_SESSION["USER_PASSPORT"] ?>"placeholder="Passport"/>
                            </div>
                            <div class="sixthblock">
                                <input type ="Company" name="Company" value="<?= $_SESSION["USER_COMPANY"] ?>"placeholder="Company"/>
                            </div>
                            <div class="tenblock">
                                <input type ="Addresscompany" name="Addresscompany" value="<?= $_SESSION["USER_ADDRESS"] ?>"placeholder="Address company"/>
                            </div>
                            <div class="fourthblock">
                                <input type ="Country" name="Country" value="<?= $_SESSION["USER_COUNTRY"] ?>"placeholder="Country"/>
                                <input type ="City" name="City" value="<?= $_SESSION["USER_CITY"] ?>"placeholder="City"/>
                                <input type ="State" name="State" value="<?= $_SESSION["USER_STATE"] ?>"placeholder="State"/>
                            </div>
                            <div class="thirdblock">

                                <input type ="Zipcode" name="Zipcode" value="<?= $_SESSION["USER_INDEX"] ?>"placeholder="Zipcode"/>

                                <input type ="VATnumber" name="VATnumber" value="<?= $_SESSION["USER_VAT"] ?>"placeholder="VAT number"/>
                            </div>
                            <div class="buttonblock">
                                <input type="Submit" class="Submit" name="Savechanges" value="Save changes"/>
                            </div>
                        </form>
                        <form id="password_form_scout" action="" method="post">
                            <div class="seventhblock">
                                <input type ="Password" name="Password" value=""placeholder="Password"/>
                                <input type ="Confirmpassword" name="Confirmpassword" value=""placeholder="Confirm password"/>
                            </div>
                            <div class="buttonblock">
                                <input type="Submit" class="Submit" name="Savechanges" value="Update password"/>
                            </div>
                        </form>
                    </div>

                </div>
                </div>
            <? endif ?>
        <? endif ?>
        <? require_once DIR_PATH_APP . '/views/footer.php' ?>