// To execute the script only when the whole page is loaded
$(document).ready(function() {
    // Calls the function when the register form is submited
    $('#frmSign').on("submit", function (e) {
        var dataString = $(this).serialize();
        // Sends an asynchronous POST request to index.php
        $.ajax({
            type: "POST",
            url: "index.php?action=register",
            data: dataString,
            success: function () {
                $("#txtRegisterSuccess").removeClass("hidden");
            }
        });
        e.preventDefault();
    });
});