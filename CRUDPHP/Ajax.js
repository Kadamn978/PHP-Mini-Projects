$(document).ready(function () {
    getAllData();
    console.log("ready!");
});

$("form#crudAppForm").on("submit", function (e) {
    e.preventDefault();
    if ($("#crudAppForm").valid()) { // Check if the form is valid
        var name = $("#name").val();
        var email = $("#email").val();
        var contact = $("#contact").val();
        var editId = $("#editId").val();

        $("#buttonLabel").html("Saving...");
        $("#spinnerLoader").show('fast');

        $.post("crud.php", {
            crudOperation: "saveData",
            name: name,
            email: email,
            contact: contact,
            editId: editId,
        }, function (response) {
            if (response == "saved") {
                $("#buttonLabel").html("Save");
                $("#spinnerLoader").hide('fast');
                $("#myModal").modal('hide');
                $("form#crudAppForm")[0].reset(); // Reset the form
                getAllData();
            }
        });
    }
});

function getAllData() {
    $.post("crud.php", { crudOperation: "getData" }, function (allData) {
        $("#crudData").html(allData);
    });
}

function editData(editId, name, email, contact) {
    $("#editId").val(editId);
    $("#name").val(name);
    $("#email").val(email);
    $("#contact").val(contact);
    $("#myModal").modal('show');
}

function deleteData(deleteId) {
    if (confirm("Are you sure to delete this ?")) {
        $('#deleteSpinner' + deleteId).show('fast');
        $.post("crud.php", { crudOperation: "deleteData", deleteId: deleteId }, function (response) {
            if (response == "deleted") {
                $('#deleteSpinner' + deleteId).hide('fast');
                getAllData();
            }
        });
    }
}