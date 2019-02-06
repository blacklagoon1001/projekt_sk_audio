/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});

$(document).ready(function(){
    setTimeout(function(){
        $('.alert').fadeOut("normal", function() {
            $(this).remove();
        });
    }, 2000);

    $('#check_equipment').click(function(e){
        e.preventDefault();
        var start = $( "#start" ).val();
        var end = $( "#end" ).val();

        $.ajax({
            type: "POST",
            data: {
                'start' : start,
                'end' : end,
            },
            //contentType: "application/json; charset=utf-8",
            dataType: "json",
            url: "/projekt/equipment/check_availability",
            success: function(msg) {
                $('#equipment_div').html(msg);
                $('#equipment_div').css('display', 'block');
            }
        });
    });

    $("#add_new_user").validate({

        rules : {
            email : {
                required : true,
                email : true
            },
            password : {
                required : true,
                minlength : 4,
                maxlength : 20
            },
            password2 : {
                required : true,
                minlength : 4,
                maxlength : 20,
                equalTo : '#password'
            },
            name_surname : {
                required : true
            },
            name : {
                required : true
            }
        },

        messages : {

            email : {
                required : 'Proszę podać adres email',
                email : 'Proszę podać prawidłowy adres email'
            },
            password : {
                required : 'Proszę podać hasło',
                minlength : 'Minimalna długość hasła to 4 znaki',
                maxlength : 'Maksymalna długość hasła to 20 znaków'
            },
            password2 : {
                required : 'Proszę podać hasło jeszcze raz',
                minlength : 'Minimalna długość hasła to 4 znaki',
                maxlength : 'Maksymalna długość hasła to 20 znaków',
                equalTo : 'Podane hasła różnią się'
            },
            name_surname : {
                required : 'Proszę podać imię i nazwisko'
            },
            name : {
                required : 'Proszę podać login'
            }
        },

    });

    $("#add_equipment").validate({

        rules : {
            quantity: {
                required: true,
                integer: true,
                greater_than: 0
            },
            name: {
                required: true
            },
            description : {
                required: true
            }
        },

        messages : {

            quantity : {
                required : 'Proszę podać liczbę sztuk',
                intiger : 'Wartość musi być liczbą naturalną',
                greater_than : 'Wartość musi być większa od 0'
            },
            name : {
                required : 'Proszę podać nazwę'
            },
            description : {
                required : 'Proszę podać opis'
            }
        },
    });

    $("#add_new_client").validate({

        rules : {
            name: {
                required: true
            },
            address: {
                required: true
            },
            place: {
                required: true
            },
            postal_code: {
                required: true,
                format : {
                    pattern : /[\d]{2}-[\d]{3}/,
                    message: "Kod pocztowy musi mieć format XX-XXX"
                }
            },
            email : {
                required : true,
                email : true
            },
            phone : {
                required : true
            }
        },

        messages : {

            name : {
                required : 'Proszę podać nazwę'
            },
            address : {
                required : 'Proszę podać adres'
            },
            place : {
                required : 'Proszę podać nazwę miejscowości'
            },
            postal_code : {
                required : 'Proszę podać kod pocztowy'
            },
            email : {
                required : 'Proszę podać adres email',
                email : 'Proszę podać prawidłowy adres email'
            },
            phone : {
                required : 'Proszę podać numer telefonu'
            }
        },
    });

    $("#add_event").validate({

        rules : {
            name: {
                required: true
            },
            datetimepicker6: {
                required: true
            },
            datetimepicker7: {
                required: true
            }
        },

        messages : {

            name : {
                required : 'Proszę podać nazwę wydarzenia'
            },
            datetimepicker6 : {
                required : 'Proszę podać datę rozpoczęcia'
            },
            datetimepicker7 : {
                required : 'Proszę podać datę zakończenia'
            }
        },
    });
});