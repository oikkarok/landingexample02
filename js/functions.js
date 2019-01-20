function validate() {
    var email = $("#inlineFormInput").val();
    var button = $("#ok").prop('checked');
    $.post('../controller/validate_form.php', {email: email, button: button}, function (dati) {
        if (!dati['email'] || !dati['button']) {

            if (!dati['email']) {
                $('#inlineFormInput').css('background', '#A00');
                var alert = '<div class="alert alert-danger"><strong>Erore!</strong><br>Inserisci email</div>';
            } else
                $('#inlineFormInput').css('background', '#fff');

            if (!dati['button'])
                var alert = '<div class="alert alert-danger"><strong>Erore!</strong><br>Devi accettare la privacy</div>';
            else
                $('#ok').css('background', '#fff');

            $('#ghost').html(alert);
            $('#ghost').show();
        } else {
            var alert = '<div class="alert alert-success"><strong>Grazie!</strong><br>Iscrizione effettuata</div>';
            $('#ok').css('background', '#fff');
            $('#inlineFormInput').css('background', '#fff');
            $('#ghost').html(alert);
            $('#ghost').show();
        }
    }, 'json');
}

function retrieve(){
    $.post('../controller/get_json.php', function(risposta){
        var woman = risposta['woman'];
        var man = risposta['man'];
        $('#woman').html(woman);
        $('#man').html(man);
    }, 'json');
}