$(document).ready(function(){
    setTimeout(function() {
        $(".fade-message").fadeOut();
    }, 2000);

    $(".customer-phone").text(function(i, text) {
        text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
        return text;
    });

    // $('#phone').keyup(function(){
    //     $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
    // });
});

