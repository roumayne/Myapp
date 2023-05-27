/**
 * script pour la vérification de l'enregistrement des utilisateurs
 */

$("#register-user").click(function () {
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var password_confirm = $("#password-confirm").val();
    var passwordLength = password.length;
    var agreeTerms = $("#agreeTerms");

    if (firstname != "") {
    } else {
        $("#firstname").addClass("is-invalid");
    }
});
