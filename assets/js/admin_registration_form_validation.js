$(document).ready(function () {
    //
    // ADMIN REGISTRATION FORM
    //
    $("#adminRegisterForm").validate({
        rules: {
            firstname: { required: true, minlength: 2, maxlength: 100 },
            lastname: { required: true, minlength: 2, maxlength: 100 },
            email: { required: true, email: true },
            password: { required: true, minlength: 6 },
            password_confirmation: { required: true, equalTo: "#password" }
        },
        messages: {
            firstname: { required: "Please enter your first name" },
            lastname: { required: "Please enter your last name" },
            email: { required: "Please enter your email", email: "Enter a valid email" },
            password: { required: "Please provide a password", minlength: "At least 6 characters" },
            password_confirmation: { required: "Please confirm your password", equalTo: "Passwords must match" }
        },
        errorClass: "text-danger",
        errorElement: "span"
    });
});
