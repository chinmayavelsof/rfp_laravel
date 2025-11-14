$(document).ready(function () {
    //
    // ADMIN REGISTRATION FORM
    //
    $("#LoginForm").validate({
        rules: {
            email: { required: true, email: true },
            password: { required: true, minlength: 6, maxlength: 12},
        },
        messages: {
            email: { required: "Please enter your email", email: "Enter a valid email" },
            password: { required: "Please provide a password", minlength: "At least 6 characters", maxlength: "At most 12 character" }
        },
        errorClass: "text-danger",
        errorElement: "span"
    });
});
