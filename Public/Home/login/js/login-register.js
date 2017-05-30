/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: #
 * 
 */
function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    });
    $('.error').removeClass('alert alert-danger').html('');

}
function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login with');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

function loginAjax() {
    $('#loginForm').submit();
    /*   Remove this comments when moving to server*/
    /* $.post( "/index.php?c=user&a=loginCheck", function( data ) {
     // window.alert(data);
     if(data == 1){
     window.location.replace("/index.php?p=home&c=index&a=index");
     } else {
     shakeModal2();

     }
     });*/


    /*   Simulate error message from the server   */
    //shakeModal();
}

function registerAjax() {
    $('#registerForm').submit();
    /*   Remove this comments when moving to server*/
    /* $.post( "/index.php?c=user&a=loginCheck", function( data ) {
     // window.alert(data);
     if(data == 1){
     window.location.replace("/index.php?p=home&c=index&a=index");
     } else {
     shakeModal2();

     }
     });*/


    /*   Simulate error message from the server   */
    //shakeModal();
}

function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}

function shakeModal2() {
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("小伙子,用户名密码不正确!");
    $('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}

   