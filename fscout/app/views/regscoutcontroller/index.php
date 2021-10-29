<? require_once DIR_PATH_APP . '/views/header.php' ?>


<div class ="leftside">
    <img src="<?= TEMPLATE_PATH ?>/photo/logogo.svg" alt="logo">
</div>


<div class ="rightside">


    <form id="reg_form" class="registration" action = "" method="POST">

        <div class="pass_error alert alert-danger d-none " role="alert">
            Пароли не совпадают!
        </div>
        <div class="server_error alert alert-danger d-none " role="alert">

        </div>     


        <div class = "inputsectionScout">
            <div class = "Scoutinformation" >
                Scout information:
            </div>
            <input type ="FirstName" name="FirstName" value=""placeholder="First Name"/>
            <input type ="SecondName" name="SecondName" value=""placeholder="Second Name"/>
            <input type ="Phone" name="Phone" value=""placeholder="Phone"/>
            <input type ="Email" name="Email" value=""placeholder="E-mail"/>
            <input type ="Password" name="Password" value=""placeholder="Password"/>
            <input type ="Password" name="ConfirmPassword" value=""placeholder="Confirm Password"/>
        </div>  

        <div class = "inputsectionOrganization">
            <div class = "Organizationinformation" >
                Organization information:
            </div>
            <input type ="NameOrganization" name="NameOrganization" value=""placeholder="Name organization"/>
            <input type ="Address" name="Address" value=""placeholder="Address"/>
            <input type ="City" name="City" value=""placeholder="City"/>
            <input type ="StateProvince" name="StateProvince" value=""placeholder="State/Province"/>
            <input type ="Zipcode" name="Zipcode" value=""placeholder="Zip code"/>
            <input type ="Country" name="Country" value=""placeholder="Country"/>
            <input type ="VATnumber" name="VATnumber" value=""placeholder="VAT number"/>
<br><input type="checkbox" name="option1" value="a1" required="true">Согласие на обработку персональных данных<Br>
        </div>


       <input type="submit" class = "submit" name="CreateAccount" onclick="" value="Create Account">
    </form>
</div>


<? require_once DIR_PATH_APP . '/views/footer.php' ?>




