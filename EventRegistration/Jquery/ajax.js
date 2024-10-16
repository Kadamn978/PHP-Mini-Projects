$(document).ready(function () {
    // Saving the form Data to DataBase
    $("#submit").on('click', function (e) { //e is fpr event 
        e.preventDefault();

        // Collection va;ues from the form field
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var eventtype = $("#eventtype").val();
        var event = $("#event").val();
        var date = $("#date").val();
        var eventtime = $("#eventtime").val();
        var request = $("#request").val();

        $.ajax({
            url: "/PHP/CRUD_Operation.php", //file path where php code is written
            type: "POST",
            data: {
                custname: name,
                custemail: email,
                custphone: phone,
                etype: eventtype,
                ename: event,
                edate: date,
                etime: eventtime,
                req: request,

            },
            success: function (data) {
                if (data == 1) {
                    // loadtable();

                }
                else {

                }
            }

        });

    });

});