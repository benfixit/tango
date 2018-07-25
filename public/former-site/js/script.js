/**
 * Created by emeka on 2/8/18.
 */

$(document).ready(function () {
    $("form[name='drop-line-form']").validate({
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
                url: $("#drop-line-form").attr("action"),
                data: $("#drop-line-form").serialize(),
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
                        $("#drop-line-form")[0].reset();
                    }).find(".modal-footer .btn-primary").removeClass("btn-primary").addClass(btnType);
                }
            });
        }
    });

    var prepMessage = function (message, color, fontIcon, heading) {
        return "<h3 class='text-center' style='color: " + color + ";'><span class='fa " + fontIcon + "'></span>&nbsp;" + heading + " </h3><hr><p class='text-center' style='color: " + color + ";'>" + message + "</p>";
    };


    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $('#toTop').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });


    $('.auto-slideshow').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow"></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
