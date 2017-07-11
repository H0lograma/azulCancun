/**
 * Created by Luis on 07/07/2017.
 */
$(window).load(function () {
    var altura = 1900;
    var banMedido = 0;

    var alturaElemento = $('#contadores').height();
    var posicionElemento = $('#contadores').offset().top;


    var ubicacion = posicionElemento - alturaElemento -400; //-200

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