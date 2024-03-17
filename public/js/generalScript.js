$(document).ready(function(){
    // this script is for hide and show password from forms
    $(".password-icon").on("click", function() {
        const password = $('#password');
        const eye = $('.password-icon');
        password.attr('type', password.attr('type') === 'password' ? 'text' : 'password');
        eye.attr('name', eye.attr('name') === 'eye-off-sharp' ? 'eye' : 'eye-off-sharp');
    });
});

