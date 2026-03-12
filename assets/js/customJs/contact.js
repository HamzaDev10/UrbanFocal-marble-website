$("#contact-form").submit(function (e) {
    e.preventDefault();
    $("#sendBtn .btn-text").hide();
    $("#sendBtn .spinner-border").show();
    $("#sendBtn").prop("disabled", true);

    $.ajax({
        type: "POST",
        url: "send.php",
        data: $(this).serialize(),

        success: function (response) {

            $("#form-message").stop(true, true).html(
                '<div style="background-color:#155724;color:#d4edda;border:1px solid #c3e6cb;padding:10px;margin-bottom:15px;border-radius:5px;">'
                + response + '</div>'
            ).fadeIn();

            setTimeout(function () {
                $("#form-message").fadeOut('slow', function () {
                    $(this).html('').show();
                });
            }, 2000);

            $("#contact-form")[0].reset();
        },

        error: function () {

            $("#form-message").stop(true, true).html(
                '<div style="color:#721c24;background-color:#f8d7da;border:1px solid #f5c6cb;padding:10px;margin-bottom:15px;border-radius:5px;">'
                + "Error sending message. Please try again." + '</div>'
            ).fadeIn();

            setTimeout(function () {
                $("#form-message").fadeOut('slow', function () {
                    $(this).html('').show();
                });
            }, 2000);
        },

        complete: function () {
            // Hide loader
            $("#sendBtn .spinner-border").hide();
            $("#sendBtn .btn-text").show();
            $("#sendBtn").prop("disabled", false);
        }
    });

});