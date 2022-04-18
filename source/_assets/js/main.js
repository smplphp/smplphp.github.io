window.docsearch = require('docsearch.js');

let bodymovin = require('lottie-web');

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-lottie]')
            .forEach(element => {
                let animation = element.dataset.lottie;
                bodymovin.loadAnimation({
                    wrapper: element,
                    animType: 'svg',
                    loop: true,
                    path: '/assets/svg/' + animation + '.json',
                });
            });
});