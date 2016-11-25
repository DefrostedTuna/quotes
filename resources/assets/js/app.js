
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#root-body',
    data: {
        formInputs: {},
        formErrors: {}
    },
    methods: {
        submitForm(e) {
            var form = e.target;
            this.$http.post(form.action, new FormData(form))
                .then((response) => {
                    this.formInputs = {};
                    this.formErrors = {};
                    grecaptcha.reset();
                    Materialize.toast('Thank you! Your quote has been successfully submitted!', 5000);
                })
                .catch((response) => {
                    this.formErrors = response.body;
                    grecaptcha.reset();
                    Materialize.toast('There were validation errors. Please fix them to continue.', 5000);
                });
        }
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() == 0) {
        $('.nav__full--container').css({
            'box-shadow': 'none',
            '-moz-box-shadow' : 'none',
            '-webkit-box-shadow' : 'none' });
    }
    else {
        $('.nav__full--container').css({
            'box-shadow': '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)',
            '-moz-box-shadow' : '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)',
            '-webkit-box-shadow' : '0 2px 10px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 10px -2px rgba(0,0,0,0.2)' });
    }
});

$(window).on('load scroll', function() {

    var fullHeightContainer = parseInt($('.full-height--container').css('height'));

    if ($(this).scrollTop() >= (fullHeightContainer - 63)) {
        $('.nav__full--container').css({
            'background': '#37474F'
        });
        $('.nav__logo').css({
            'color': 'white'
        });
        $('.nav__links a').css({
            'color': 'white'
        });
    } else {
        $('.nav__full--container').css({
            'background': ''
        });
        $('.nav__logo').css({
            'color': ''
        });
        $('.nav__links a').css({
            'color': ''
        });
    }
});

$('.btn__mobile-nav-toggle').click(function() {
    $('.nav-mobile--container').toggleClass('active');
    $('.nav-mobile--mask').toggleClass('active');
    $('body').toggleClass('inactive');
    $('#root-body').toggleClass('inactive');
});
$('.nav-mobile--mask').click(function() {
    console.log('click');
    $('.nav-mobile--container').removeClass('active');
    $('.nav-mobile--mask').removeClass('active');
    $('body').removeClass('inactive');
    $('#root-body').removeClass('inactive');
});

$(window).on('load', function(){
    $masonryContainer = $('.masonry').masonry({
        itemSelector: '.col',
    });
    $('.quote__card').css({
        opacity: 1
    });
});




