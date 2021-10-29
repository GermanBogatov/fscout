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
        <div class = "inputsection" >
            <input type ="FirstName" name="FirstName" id="FirstName" required="true" value=""placeholder="First Name"/>
            <input type ="SecondName" name="SecondName" id="SecondName" required="true" value=""placeholder="Second Name"/>
            <input type ="Phone" name="Phone" id="Phone" required="true" value=""placeholder="Phone"/>
            <input type ="Email" name="Email" id="Email" required="true" value=""placeholder="E-mail"/>
            <input type ="Password" name="Password" id="Password" required="true" value=""placeholder="Password"/>
            <input type ="Password" name="ConfirmPassword" id="ConfirmPassword" required="true" value=""placeholder="Confirm Password"/>
            <br><input type="checkbox" name="option1" value="a1" required="true">Согласие на обработку персональных данных<Br>
        </div>   
        <input type="submit" class = "submit" name="CreateAccount" onclick="" value="Create Account">
    </form>
</div>
<? require_once DIR_PATH_APP . '/views/footer.php' ?>




