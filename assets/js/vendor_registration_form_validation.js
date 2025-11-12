$(document).ready(function () {
    //
    // ADMIN REGISTRATION FORM
    //
    $("#vendorRegisterForm").validate({
        rules: {
            firstname: { required: true, minlength: 2, maxlength: 100 },
            lastname: { required: true, minlength: 2, maxlength: 100 },
            email: { required: true, email: true },
            password: { required: true, minlength: 6 },
            password_confirmation: { required: true, equalTo: "#password" },
            phoneno: { required: true, digits: true, minlength: 10 },
            revenue: { required: true, regex: /^\d+(\.\d+)?$/ },
            noofemployees: { required: true, digits: true, min: 1},
            panno: { required: true, regex: /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/},
            gstno: { required: true, minlength:8},
            'categories[]': { required: true }
        },
        messages: {
            firstname: { required: "Please enter your first name" },
            lastname: { required: "Please enter your last name" },
            email: { required: "Please enter your email", email: "Enter a valid email" },
            password: { required: "Please provide a password", minlength: "At least 6 characters" },
            password_confirmation: { required: "Please confirm your password", equalTo: "Passwords must match" },
            contact: { required: "Please enter your contact number", regex: "Enter a valid 10-digit number" },
            revenue: { required: "Please enter revenue", regex: "Enter a valid number (e.g., 50000 or 50000.50)" },
            total_employees: { required: "Please enter total employees", digits: "Only whole numbers allowed", min: "At least 1 employee required" },
            pan_no: { required: "Please enter PAN number", regex: "Enter a valid PAN (e.g., ABCDE1234F)" },
            gst_no: { required: "Please enter GST number", regex: "Enter a valid GST (e.g., 22ABCDE1234F1Z5)" },
            'categories[]': { required: "Please select at least one category" }
        },
        errorClass: "text-danger",
        errorElement: "span"
    });

    // Custom regex validator method
    $.validator.addMethod("regex", function (value, element, regexp) {
        const re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    }, "Invalid format");
});
