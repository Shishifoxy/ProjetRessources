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
// global.$ = global.jQuery = $;



$("#dim_button").on("click", function() {
    let value = $("#dim_input").val();
    if (value ==="dimxpas")
    {
        console.log(value);
        $("#dim_secret").css("display", "block");
        setInterval( function() {
            $("#dim_secret").css("display", "none");
        }, 3000);
    }
    console.log('Hello Webpack Encore! Edit me in assets/app.js');
})