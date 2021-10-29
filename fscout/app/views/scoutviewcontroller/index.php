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
                        <form id="edit_photo_scout" class=""  action = "" method="POST">
                            <div class="photoblock">
                                <img src='<?= MAIN_PREFIX ?>/upload/<?= $product["avatar_img"] ?>' width="170px" height="200px"/>

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
                                <input type ="FirstName" name="FirstName" value="<?= $product["name_scout"] ?>"placeholder="First Name"/>
                                <input type ="SecondName" name="SecondName" value="<?= $product["surname_scout"] ?>"placeholder="Second Name"/>
                            </div>
                            <div class="secondblock">
                                <input type ="Phone" name="Phone" value="<?= $product["phone_scout"] ?>"placeholder="Phone"/>
                                <input type ="Email" name="Email" value="<?= $product["email_scout"] ?>"placeholder="E-mail"/>
                            </div>
                            <div class="fifthblock">
                               <input type ="Gender" name="Gender" value="<?= $product["gender_scout"] ?>" readonly="" placeholder="Gender"/>
                                <input type ="Passport" name="Passport" value="<?= $product["passport_scout"] ?>"placeholder="Passport"/>
                            </div>
                            <div class="sixthblock">
                                <input type ="Company" name="Company" value="<?= $product["name_company"] ?>"placeholder="Company"/>
                            </div>
                            <div class="tenblock">
                                <input type ="Addresscompany" name="Addresscompany" value="<?= $product["address_company"] ?>"placeholder="Address company"/>
                            </div>
                            <div class="fourthblock">
                                <input type ="Country" name="Country" value="<?= $product["id_country"] ?>"placeholder="Country"/>
                                <input type ="City" name="City" value="<?= $product["city_company"] ?>"placeholder="City"/>
                                <input type ="State" name="State" value="<?= $product["state_company"] ?>"placeholder="State"/>
                            </div>
                            <div class="thirdblock">

                                <input type ="Zipcode" name="Zipcode" value="<?= $product["zipcode_company"] ?>"placeholder="Zipcode"/>

                                <input type ="VATnumber" name="VATnumber" value="<?= $product["vat_number"] ?>"placeholder="VAT number"/>
                            </div>
                            
                        </form>
                        
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