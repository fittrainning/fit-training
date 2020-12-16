$(document).ready(function() {
    $('#ecc1').hide();
    $('#ecc2').hide();
    $('#ecc3').hide();

    $('.ec1').on('click', function() {
        $('#ecc1').slideToggle(100);
        $('#ecc2').hide();
        $('#ecc3').hide();
    });

    $('.ec2').on('click', function() {
        $('#ecc2').slideToggle(100);
        $('#ecc1').hide();
        $('#ecc3').hide();
    });

    $('.ec3').on('click', function() {
        $('#ecc3').slideToggle(100);
        $('#ecc2').hide();
        $('#ecc1').hide();
    });

    $.ajax({
        url: '/estadisticas/all',
        method: 'POST',
        dat: $('#form1').serialize()
    }).done(function(res) {
        alert(res);
    });
});