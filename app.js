$(document).ready(function () {
    $('#coord').hide();
    $('#dispo').hide();
    $('#valider').hide();
});

$('#oui').click( function () {
    $('#coord').show();
    $('#dispo').show();
    $('#valider').show();
    $('#bool').hide();
});

$('#non').click( function (){
    $('#valider').show();
    $('#bool').hide();
});