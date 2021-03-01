$(document).ready(function() {
    $('#frmSign').on("submit", function (e) {
        var dataString = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "controler/controler.php",
            data: dataString,
            success: function () {
                //alert("OK" + " " + txtFirstname.value);
                $("#txtRegisterSuccess").removeClass("hidden");
            }
        });
        e.preventDefault();
    });
});