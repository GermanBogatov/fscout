<? require_once DIR_PATH_APP . '/views/header.php' ?>


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
                 <div class="Worksheet" >
                    <div class="leftblock" >
                        <div class="photoblock">
   
                        </div>
                        
                    </div>  
                 <div class ="rightblock">
                      <div class = "firstblock">
                        <input type ="FirstName" name="FirstName" value="<?= $_SESSION["USER_ROLE"] ?>"placeholder="First Name"/>
                        <input type ="SecondName" name="SecondName" value="<?= $_SESSION["USER_SNAME"] ?>"placeholder="Second Name"/>
                      </div>
                      <div class="secondblock">
                        <input type ="Phone" name="Phone" value="<?= $_SESSION["USER_PHONE"] ?>"placeholder="Phone"/>
                        <input type ="Email" name="Email" value="<?= $_SESSION["USER_EMAIL"] ?>"placeholder="E-mail"/>
                      </div>
                      <div class="fifthblock">
                        <input type ="Gender" name="Gender" value="<?= $_SESSION["USER_GENDER"] ?>"placeholder="Gender"/>
                        <input type ="Passport" name="Passport" value="<?= $_SESSION["USER_PASSPORT"] ?>"placeholder="Passport"/>
                      </div>
                      <div class="sixthblock">
                        <input type ="Company" name="Company" value="<?= $_SESSION["USER_COMPANY"] ?>"placeholder="Company"/>
                      </div>
                      <div class="tenblock">
                        <input type ="Addresscompany" name="Addresscompany" value="<?= $_SESSION["USER_ADDRESS"] ?>"placeholder="Address company"/>
                      </div>
                      <div class="fourthblock">
                        <input type ="City" name="City" value="<?= $_SESSION["USER_CITY"] ?>"placeholder="City"/>
                        <input type ="State" name="State" value="<?= $_SESSION["USER_STATE"] ?>"placeholder="State"/>
                      </div>
                      <div class="thirdblock">
                        <input type ="Zipcode" name="Zipcode" value="<?= $_SESSION["USER_INDEX"] ?>"placeholder="Zipcode"/>
                        <input type ="VATnumber" name="VATnumber" value="<?= $_SESSION["USER_VAT"] ?>"placeholder="VAT number"/>
                      </div>
                      
                      
                      
                      <div class="seventhblock">
                        <input type ="Password" name="Password" value=""placeholder="Password"/>
                        <input type ="Confirmpassword" name="Confirmpassword" value=""placeholder="Confirm password"/>
                      </div>
                      <div class="buttonblock">
                        <input type="Button" name="Savechanges" value="Save changes"/>
                      </div>
                 </div>

            </div>
                 
    <? require_once DIR_PATH_APP . '/views/footer.php' ?>