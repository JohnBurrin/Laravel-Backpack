// must be first
window.$ = window.jQuery = global.$ = global.jQuery = require('jquery');

// must be second
require('./bootstrap');

jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
