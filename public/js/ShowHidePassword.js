$(document).ready(function () {
    $(".toggle-password").click(function () {
    var passwordInput = $($(this).siblings(".password-input"));
    var icon = $(this);
    if (passwordInput.attr("type") == "password") {
    passwordInput.attr("type", "text");
    icon.removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
    passwordInput.attr("type", "password");
    icon.removeClass("fa-eye-slash").addClass("fa-eye");
    }
    });
})