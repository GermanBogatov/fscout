$(document).ready(function () {

$('#edit_photo').submit(function (event) {
        event.preventDefault();
       var data = new FormData(this);
       
        $.ajax({
            url: "/bogatov/fscout/lksportsman/addphotoPlayer/",
            data: data,
            processData: false,
            contentType: false,
            dataType: "json",
            type: "POST",
            success: function ( json ) {
                if (json.error.length > 0) {
                    
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    $(".server_error").text(json.error).removeClass("d-none");
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Вы обновили свой пароль</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>обновление пароля прошло успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })

$('#edit_photo_scout').submit(function (event) {
        event.preventDefault();
       var data = new FormData(this);
       
        $.ajax({
            url: "/bogatov/fscout/lksportsman/addphotoScout/",
            data: data,
            processData: false,
            contentType: false,
            dataType: "json",
            type: "POST",
            success: function ( json ) {
                if (json.error.length > 0) {
                    
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    $(".server_error").text(json.error).removeClass("d-none");
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Вы обновили свой пароль</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>обновление пароля прошло успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })

    $('#edit_form').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);
        let form_data = form.serializeArray();
        let data = [];
//console.log(form_data);
//return false;
        for (let item in form_data) {
            data[form_data[item]['name']] = form_data[item]['value'];
        }
        if (data['Password'] != data['Confirmpassword']) {
            $(".pass_error").removeClass("d-none");
            setTimeout(function () {
                $(".pass_error").addClass("d-none");
            }, 2500);
            return false;
        }
        let obj = {};

        Object.assign(obj, data);
//console.log(obj);
        $.ajax({
            url: "/bogatov/fscout/lksportsman/editPlayer/",
            type: "POST",
            data: obj,
            dataType: "json",
            success: function (json) {
                if (json.error.length > 0) {
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Добро пожаловать, ${obj.name}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Данные изменены успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })
    
    
    $('#password_form').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);
        let form_data = form.serializeArray();
        let data = [];
                //alert('ппрроо');
        for (let item in form_data) {
            data[form_data[item]['name']] = form_data[item]['value'];
        }
        if (data['Password'] != data['Confirmpassword']) {
            $(".pass_error").removeClass("d-none");
            setTimeout(function () {
                $(".pass_error").addClass("d-none");
            }, 2500);
            return false;
        }
        let obj = {};

        Object.assign(obj, data);

        $.ajax({
            url: "/bogatov/fscout/lksportsman/updatePasswordPlayer/",
            type: "POST",
            data: obj,
            dataType: "json",
            success: function (json) {
                if (json.error.length > 0) {
                    
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    $(".server_error").text(json.error).removeClass("d-none");
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Вы обновили свой пароль</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>обновление пароля прошло успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })
    
    
   
    
    
    
    
    
    $('#edit_form_scout').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);
        let form_data = form.serializeArray();
        let data = [];
//console.log(form_data);
//return false;
        for (let item in form_data) {
            data[form_data[item]['name']] = form_data[item]['value'];
        }
        if (data['Password'] != data['Confirmpassword']) {
            $(".pass_error").removeClass("d-none");
            setTimeout(function () {
                $(".pass_error").addClass("d-none");
            }, 2500);
            return false;
        }
        let obj = {};

        Object.assign(obj, data);
//console.log(obj);
        $.ajax({
            url: "/bogatov/fscout/lksportsman/editScout/",
            type: "POST",
            data: obj,
            dataType: "json",
            success: function (json) {
                if (json.error.length > 0) {
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Добро пожаловать, ${obj.name}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Данные изменены успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })
    
    
     $('#password_form_scout').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);
        let form_data = form.serializeArray();
        let data = [];
                //alert('ппрроо');
        for (let item in form_data) {
            data[form_data[item]['name']] = form_data[item]['value'];
        }
        if (data['Password'] != data['Confirmpassword']) {
            $(".pass_error").removeClass("d-none");
            setTimeout(function () {
                $(".pass_error").addClass("d-none");
            }, 2500);
            return false;
        }
        let obj = {};

        Object.assign(obj, data);

        $.ajax({
            url: "/bogatov/fscout/lksportsman/updatePasswordScout/",
            type: "POST",
            data: obj,
            dataType: "json",
            success: function (json) {
                if (json.error.length > 0) {
                    
                    $(".server_error").text(json.error).removeClass("d-none");
                } else {
                    $(".server_error").text(json.error).removeClass("d-none");
                    let modal = `
<div class="modal" id = "success_reg" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Вы обновили свой пароль</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>обновление пароля прошло успешно.</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ок</button>
      </div>
    </div>
  </div>
</div>
                   `;
                    $('body').append(modal);
    
                    let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    $('#success_reg').on('hide.bs.modal', function(event){
                        location.reload();
                    })
                    modalObj.show();
                    
                    
                    
                }
            }
        })
    })
    
    
    
})

