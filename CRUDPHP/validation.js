$(document).ready(function () {
    // Initialize validation
    $("#crudAppForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 6 // Minimum length for name
            },
            email: {
                required: true,
                email: true // Valid email format
            },
            contact: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            }
        },
        messages: {
            name: {
                required: "Please enter your full name.",
                minlength: "Your name must be at least 6 characters long."
            },
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address."
            },
            contact: {
                required: "Please enter your phone number.",
                digits: "Please enter only digits.",
                minlength: "Your phone number must be 10 digits long.",
                maxlength: "Your phone number must be 10 digits long.",
            }
        },
        highlight: function (element) {
            $(element).addClass("error"); // Add error class to invalid fields
            $(element).addClass("c1"); // Add error class to invalid fields

        },
        unhighlight: function (element) {
            $(element).removeClass("error"); // Remove error class from valid fields
            $(element).removeClass("c1"); // Remove error class from valid fields
        },
        errorPlacement: function (error, element) {
            error.addClass("error"); // Add error class directly to the error message
            error.insertAfter(element); // Place error message directly after the input field
        }

    });
});
