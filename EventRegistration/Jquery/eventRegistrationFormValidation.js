$(document).ready(function () {
    console.log("hi;")
        // Custom validation method to check if the date is not in the past
        
        $.validator.addMethod("dateNotPast", function (value, element) {
            var today = new Date();
            var selectedDate = new Date(value);
            return this.optional(element) || selectedDate >= today;
        }, "Please select a date that is today or in the future.");
        
        $("#eventRegistrationForm").validate({
            errorClass: "error", // Custom class for error messages
            validClass: "valid", // Custom class for valid fields
            rules: {
                name: {
                    required: true,
                    minlength: 6 // Minimum length for name
                },
                email: {
                    required: true,
                    email: true // Valid email format
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                event: {
                    required: true,
                    minlength: 2
                },
                date: {
                    required: true,
                    dateNotPast: true
                },
                eventtype:{
                    required:true,
                },
                eventtime: {
                    required: true,
                },
                request: {
                    maxlength: 256
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
                phone: {
                    required: "Please enter your phone number.",
                    digits: "Please enter only digits.",
                    minlength: "Your phone number must be of 10 digits without +91",
                    maxlength: "Your phone number must be of 10 digits without +91",
                },
                event: {
                    required: "Please enter the event name.",
                    minlength: "Event name must be at least 2 characters long."
                },
                date: {
                    required: "Please select a date.",
                    dateNotPast: "Please select a date that is today or in the future."
                },
                eventtime: {
                    required: "Please select an event time."
                },
                request: {
                    maxlength: "Comments must be no more than 256 characters long."
                }
            },
            highlight: function (element) {
                $(element).addClass("c1");
                $(element).addClass("error"); // Add error class to invalid fields
            },
            unhighlight: function (element) {
                $(element).addClass("c1");
                $(element).removeClass("error"); // Remove error class from valid fields
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element); // Place error message directly after the input field
            }
        });

});
