$(function (){
    'use strict';
    $('#videoFile').change(ev => {
        $(ev.target).closest('form').trigger('submit');
    })
})



$(function (){
    'use strict';
    $('#brandFile').change(ev => {
        $(ev.target).closest('form').trigger('submit');
    })
})