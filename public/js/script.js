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

    $("form[name='newsletter-form']").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function(form) {
            waitingDialog.show("Sending...");
            var formObj = $('#newsletter-form');
            $.ajax({
                type: 'POST',
                url: formObj.attr("action"),
                data: formObj.serialize(),
                success: function (response) {
                    waitingDialog.hide();
                    var message = "";
                    var btnType = "";
                    if(parseInt(response.status) === 1){
                        btnType = "btn-success";
                        message = prepMessage(response.message, "#009900", "fa-check", "Success");
                    }else{
                        btnType = "btn-danger";
                        message = prepMessage(response.message, "#d9534f", "fa-exclamation-triangle", "Error");
                    }
                    bootbox.alert(message, function () {
                        waitingDialog.hide();
                        formObj[0].reset();
                    }).find(".modal-footer .btn-primary").removeClass("btn-primary").addClass(btnType);
                }
            });
        }
    });

    $("form[name='join-the-team']").validate({
        rules: {
            name: {
                required: true
            },
            type: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            reason: {
                required: true
            }
        },
        messages: {
            name: { required: "Please enter your full name" },
            type: { required: "Please select an employment type" },
            reason: { required: "Please state the reason why you want to join us" },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            }
        },
        submitHandler: function(form) {
            waitingDialog.show("Sending...");
            var formObj = $('#join-the-team');
            console.log(formObj.serialize());
            $.ajax({
                type: 'POST',
                url: formObj.attr("action"),
                data: formObj.serialize(),
                success: function (response) {
                    waitingDialog.hide();
                    var message = "";
                    var btnType = "";
                    if(parseInt(response.status) === 1){
                        btnType = "btn-success";
                        message = prepMessage(response.message, "#009900", "fa-check", "Success");
                    }else{
                        btnType = "btn-danger";
                        message = prepMessage(response.message, "#d9534f", "fa-exclamation-triangle", "Error");
                    }
                    bootbox.alert(message, function () {
                        waitingDialog.hide();
                        formObj[0].reset();
                    }).find(".modal-footer .btn-primary").removeClass("btn-primary").addClass(btnType);
                }
            });
        }
    });

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

    var container = $('.head-container');
    var nav = $('.fixed-top');
    var mobileWidth = 768;

    if($(window).width() > mobileWidth){
        $('.page-jumbo').css("top", nav.outerHeight());
    }

    $(document).scroll(function(){
        var scrollTop = $(document).scrollTop();
        if(scrollTop >= container.outerHeight()){
            nav.css("background-color", "#000000");
        } else {
            nav.css("background-color", "transparent");
        }
    });

});
