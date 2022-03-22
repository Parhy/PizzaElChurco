		$(document).ready(function() {
    //alert('ready');

    $('#inputname, #inputlastanme').on('keyup', function(event) {
        $(this).val(function(i, v){
            return v.replace(/[a-zA-z]/, function(c){
               return c.toUpperCase();
            })
        })
    });
});