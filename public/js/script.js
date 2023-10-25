$(document).ready(function() {

     // Show password
     $('#flexCheckDefault').click(function() {
        if($(this).is(':checked')){
            $('#password').attr('type', 'text');
        }else{
            $('#password').attr('type', 'password');
        }
     })
     // End show password

    // Alert duration
    window.setTimeout(function() {
        $('.alert').fadeTo(300, 0).slideUp(300, function() {
            $(this).remove();
        })
    }, 3000)
    // End alert

})