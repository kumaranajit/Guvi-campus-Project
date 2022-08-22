$( "#register-form" ).submit(function(event) {
    event.preventDefault();
    var data = {
        name: $('#name').val(),
        email: $('#email').val(),
        password1: $('#password1').val(),
        repassword: $('#repassword').val(),
        DOB: $('#DOB').val(),
        age: $('#age').val(),
        contactno: $('#contactno').val(),
        country: $('#country').val(),
        state: $('#state').val(),
        jobrole: $('#jobrole').val(),
        decide: $('#decide').val(),
    }

    $.ajax({
        //decide
        url: 'php_script/register.php',
        //method
        type: 'POST',
        data: data,
        success: function(response) {
            console.log(response);
            if (response.status == 200) {
                alert(response.message);
                window.location.href="index.html";
            }
            else{
                alert(response.message);
                window.location.reload();
            }
        }
    });
});