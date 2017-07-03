
$(window).load(function () {
    var altura = 1680;
    var banMedido = 0;

    var alturaElemento = $('#contadores').height();
    var posicionElemento = $('#contadores').offset().top;


    var ubicacion = posicionElemento - alturaElemento -200;

    $(window).scroll(function () {
        //console.log($('#page-top').scrollTop());

        if ($(document).scrollTop() > ubicacion && banMedido == 0) {
            console.log("inicia contador");
            var demo1 = {score: 0},
                scoreDisplay1 = document.getElementById("scoreDisplay1");
//create a tween that changes the value of the score property of the demo object from 0 to 100 over the course of 20 seconds.
            var tween = TweenLite.to(demo1, 10, {score: 4898, onUpdate: showScore1});

//each time the tween updates this function will be called.
            function showScore1() {
                //scoreDisplay.innerHTML = demo.score.toFixed(2);
                //console.log(demo.score.toFixed(2));
                $("#scoreDisplay1").html(demo1.score.toFixed(0));
            }

            var demo2 = {score: 0},
                scoreDisplay2 = document.getElementById("scoreDisplay2");
//create a tween that changes the value of the score property of the demo object from 0 to 100 over the course of 20 seconds.
            var tween = TweenLite.to(demo2, 10, {score: 546, onUpdate: showScore2});

//each time the tween updates this function will be called.
            function showScore2() {
                $("#scoreDisplay2").html(demo2.score.toFixed(0));
            }

            var demo3 = {score: 0},
                scoreDisplay3 = document.getElementById("scoreDisplay3");
//create a tween that changes the value of the score property of the demo object from 0 to 100 over the course of 20 seconds.
            var tween = TweenLite.to(demo3, 10, {score: 100, onUpdate: showScore3});

//each time the tween updates this function will be called.
            function showScore3() {
                $("#scoreDisplay3").html(demo3.score.toFixed(0) + '%');
            }

            banMedido = 1;
        }

    });

});
$(document).ready(function(){
    $( "#telefono" ).keypress(function() {
        return isNumberKey(event);
    });

    $( "#enviarFormulario" ).click(function() {
        enviaCorreo();
    });
/*
    $(document).scroll(function () {
        console.log("scroll de ventana: "+ $(document).scrollTop()+" posicion elemento: "+ $('#contadores').offset().top+" altura elemento: "+$('#contadores').height());
    });
*/
});

function enviaCorreo(){
    $("#frmcontacto").submit(function(e){
        e.preventDefault();
    });

    var nombreaux = nombre.value;
    var telefonoaux = telefono.value;
    var correoaux = correo.value;
    var ciudadaux = ciudad.value;
    var comentariosaux = comentarios.value;

    if(validacion("validacontacto")){
        if(validarEmail(correoaux)){
            if(validarTelefono(telefonoaux)) {
                $.ajax({
                    type: "POST",
                    url: "enviar-correo.php",
                    data: {
                        nombreval: nombreaux,
                        telefonoval: telefonoaux,
                        correoval: correoaux,
                        ciudadval: ciudadaux,
                        comentariosval: comentariosaux
                    },
                    success: function (respuesta) {

                        $('#mensajeEnviado').modal('show');
                        timer = setTimeout("ocultaModal('#mensajeEnviado')", 3000);
                        $('#ventSolicita').modal('hide');
                        //alert("Your email has been successfully sent");
                        limpiaFormulario('frmcontacto');

                    }
                });
            }
            else{
                //alert("Error phone number");
                $('#errorFormulario').find('.modal-body #mensajeError').text('NÃºmero telefÃ³nico invÃ¡lido');
                $('#errorFormulario').modal('show');
                timer = setTimeout("ocultaModal('#errorFormulario')", 2000);
            }
        }else{
            //alert("Error email");
            $('#errorFormulario').find('.modal-body #mensajeError').text('Correo invÃ¡lido');
            $('#errorFormulario').modal('show');
            timer = setTimeout("ocultaModal('#errorFormulario')", 2000);
        }
    }else{
        //alert("Missing fields");
        $('#errorFormulario').find('.modal-body #mensajeError').text('Campos vacios');
        //$('#errorFormulario').find('.modal-body #mensajeError').val('Missing fields'); //agrega valor a un input
        $('#errorFormulario').modal('show');
        timer = setTimeout("ocultaModal('#errorFormulario')", 2000);
    }
}

function ocultaModal(nombreModal){
    $(nombreModal).modal('hide');
}

function validarEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)){
        return false;
    }else{
        return true;
    }
}

function validarTelefono(tel){
    expr=/^([0-9]+){10}$/;
    if( !expr.test(tel)) {
        return false;
    }
    else{
        return true;
    }
}

function validacion(clase) {
    var total = $('.'+ clase).length;
    var conteo = 0;
    var flag = 1;
    var preflag = 1;

    $('.'+ clase).each(function() {
        conteo++;
        var id = $(this).attr("id");
        var valor = $(this).val();

        if(valor == ""){
            flag = 0;
            $(this).addClass('alerta');
        }
    });

    if(flag == 0) {
        return false;
    } else {
        return true;
    }
}

function limpiaFormulario(id){
    document.getElementById(id).reset();
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


