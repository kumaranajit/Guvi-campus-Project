$( "#login-form" ).submit(function(event) {
    event.preventDefault();
    var data = {
        name: $('#name').val(),
        password1: $('#password1').val(),
    }

    $.ajax({
        url: 'php_script/login.php',
        type: 'POST',
        data: data,
        success: function(response) {
            if(response.status == 200){
                alert(response.message);
                window.location.href='profile.php';
            }
            else{
                alert(response.message);
                window.location.href='index.html';
            }
        }
    });
});