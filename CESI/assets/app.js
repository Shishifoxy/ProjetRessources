/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';


// CONNERIE DE DIMITRI
$("#dim_button").on("click", function() {
    let value = $("#dim_input").val();
    if (value === "dimxpas")
    {
        $("#dim_secret").removeClass("hidden");
        setInterval( function() {
            $("#dim_secret").addClass("hidden");
        }, 3000);
    }
    $("#coucou").on("click", function() {
$("#coucou").removeClass("show");
$("#coucou").addClass("hidden");
    })
    console.log('Hello Webpack Encore! Edit me in assets/app.js');
})