/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import $ from 'jquery';
import 'select2/dist/css/select2.min.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import 'select2';

$(document).ready(function() {
    $('select').select2();
});

let contactButton = $('#contactButton')
contactButton.click(e => {
    e.preventDefault();
    $('#contactForm').slideDown();
    contactButton.slideUp();
})