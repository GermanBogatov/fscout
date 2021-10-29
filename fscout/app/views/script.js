$(document).ready(function () {


})
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function openDialogLogin() {


    $.ajax({
        url: window.BASE_DIR_AJAX + "/loginForm.php",
        dataType: "html",
        success: function (html) {
            $('body').append(html);
            let modalObj = new bootstrap.Modal(document.getElementById('login_form'));
            $('#login_form').on('hide.bs.modal', function (event) {
                $(this).remove();
            })
            $('#login_form').submit(function (event) {
                globalLogin(event);
            })
            modalObj.show();

        }
    })




}

function globalLogin(event) {
    event.preventDefault();
    let form = $(event.target);
    let form_data = form.serializeArray();
//console.log(form_data);
//return false;
    $.ajax({
        url: "/bogatov/fscout/reg/login/",
        type: "POST",
        data: form_data,
        dataType: "json",
        beforeSend: function () {
            form.find('input').each(function (i, e) {
                $(e).attr('disabled', 'disabled');
            });
            form.find('.alert-danger').addClass("d-none");
            form.find('button[type="submit"]').hide();
            form.find('.loader12').removeClass("d-none");
        },
        success: function (json) {
            if ((json.error = "player") || (json.error = "scout") ) {
                location.href = '/bogatov/fscout/lksportsman/';
            }else {
                form.find('.alert-danger').removeClass('d-none').html(json.error);
                form.find('input').each(function (i, e) {
                    $(e).removeAttr('disabled');
                });
                form.find('button[type="submit"]').show();
                form.find('.loader12').addClass("d-none");

            }
//if( json.error != '' ){
//    form.find('.alert-danger').removeClass('d-none').html(json.error);
//form.find('input').each(function ( i, e) {
//                $(e).removeAttr('disabled');
//            });
//            form.find('button[type="submit"]').show();
//        form.find('.loader12').addClass("d-none");
//        
//       // 
//}else{
//    location.href = '/bogatov/fscout/lksportsman/';
//    
//    //location.reload();
//}
//вот здесь сделать так, чтобы при нажатии кнопки был переход в личный кабинет, а если ничего нету, чтобы не переходило
            //location.href = '/bogatov/fscout/lksportsman/';
        }
    })
}




