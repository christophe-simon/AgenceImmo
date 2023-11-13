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
import 'slick-carousel'
import 'slick-carousel/slick/slick.css'
import 'slick-carousel/slick/slick-theme.css'

$('[data-slider]').slick({
    dots: true,
    arrows: true
  })

jQuery(function() {
    $('select').select2();
});

let contactButton = $('#contactButton')
contactButton.on('click', e => {
    e.preventDefault();
    $('#contactForm').slideDown();
    contactButton.slideUp();
})

// Suppression des éléments
document.querySelectorAll('[data-delete]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault()
        fetch(a.getAttribute('href'), {
            method: 'DELETE',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({'_token': a.dataset.token})
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                a.parentNode.parentNode.removeChild(a.parentNode)
            } else {
                alert(data.error)
            }
        })
        .catch(e => alert(e))
    })
})