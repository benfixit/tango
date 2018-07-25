$(document).ready(function () {
    $("form[name='send-message-form']").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please enter your Name",
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function(form) {
            waitingDialog.show("Sending...");
            $.ajax({
                type: 'POST',
                url: $("#send-message-form").attr("action"),
                data: $("#send-message-form").serialize(),
                success: function (response) {
                    waitingDialog.hide();
                    var message = "";
                    var btnType = "";
                    var data = JSON.parse(response);
                    if(parseInt(data.status) === 1){
                        btnType = "btn-success";
                        message = prepMessage(data.message, "#009900", "fa-check", "Success");
                    }else{
                        btnType = "btn-danger";
                        message = prepMessage(data.message, "#d9534f", "fa-exclamation-triangle", "Error");
                    }
                    bootbox.alert(message, function () {
                        $("#send-message-form")[0].reset();
                    }).find(".modal-footer .btn-primary").removeClass("btn-primary").addClass(btnType);
                }
            });
        }
    });

    var prepMessage = function (message, color, fontIcon, heading) {
        return "<h3 class='text-center' style='color: " + color + ";'><span class='fa " + fontIcon + "'></span>&nbsp;" + heading + " </h3><hr><p class='text-center' style='color: " + color + ";'>" + message + "</p>";
    };
});