var domeinnaam = null;
var domeinlist = '';
var provider = null;
console.log('reached');

function validate() {
    if ($('#testdomein').val() !== '') {
        $('#status').html('');
        if ($('#extentie').val() !== null) {
            $('#loading').show();
            var temp = $('#testdomein').val();
            temp = temp.split('.')[0];
            var domein = temp.replace(/\s/g, "") + '.' + $('#extentie').val();
            if (domeinnaam === domein) {
                $('#loading').hide();
                alert('Voer een nieuw domeinnaam in.');
            }
            else {
                domeinnaam = domein;
                $.ajax({
                    type: "GET",
                    url: "/domeincheck.php",
                    data: 'domein=' + domein
                }).done(function (data) {
                    $('#loading').hide();
                    $('#status').html(data);
                });
            }
        }
        else {
            alert('kies een extentie!');
        }
    }
    else {
        alert('voer een domeinnaam in!');

    }
}

function gebruikdomein() {
    if (domeinnaam !== '' && domeinnaam !== null) {
        $("#gebruik").attr("disabled", "disabled");
        if (domeinlist !== '') {
            domeinlist += ', \r\n' + domeinnaam + ' ("Aanvraag")';
            $('#domeinnaam').val(domeinlist);
            $('#aanvraag').val('aanvraag');

        }
        else {
            domeinlist = domeinnaam + ' ("Aanvraag")';
            $('#domeinnaam').val(domeinlist);
            $('#aanvraag').val('aanvraag');
        }
    }
}

function verhuisdomein() {
    if (document.getElementById('provider').value !== null && document.getElementById('provider').value !== '') {
        provider = document.getElementById('provider').value;
        if (domeinnaam !== '' && domeinnaam !== null) {
            $("#gebruik").attr("disabled", "disabled");
            if (domeinlist !== '') {
                domeinlist += ', \r\n' + domeinnaam + ' (verhuizing) ' + '(provider: ' + provider + ')';
                $('#domeinnaam').val(domeinlist);
                $('#verhuizing').val('verhuizing');
            }
            else {
                domeinlist = domeinnaam + ' (verhuizing) ' + '(provider: ' + provider + ')';
                $('#domeinnaam').val(domeinlist);
                console.log(domeinlist);
                $('#verhuizing').val('verhuizing');
            }
        }
    }
    else {
        alert('Vul de huidige provider in.')
    }
}

function toggleEmail(value) {
    if (value === 'geen') {
        $('#grootte').text('Geen');
        $('#mailpakket-2').toggleClass('disabled', true);
        $('#hostmail').prop('disabled', true);
        $('#hostmail').toggleClass('disabled', true);
        $('#hostmail').prop("checked", false)
        $('#mpak1').prop("checked", true)
    }
    else if (value === 'pakket1') {
        $('#grootte').text('600 MB');
        $('#mailpakket-2').toggleClass('disabled', false);
        $('#hostmail').prop('disabled', false);
        $('#hostmail').toggleClass('disabled', false);
    }
    else if (value === 'pakket2') {
        $('#grootte').text('1 GB');
        $('#mailpakket-2').toggleClass('disabled', false);
        $('#hostmail').prop('disabled', false);
        $('#hostmail').toggleClass('disabled', false);
    }
    else if (value === 'pakket3') {
        $('#grootte').text('2,5 GB');
        $('#mailpakket-2').toggleClass('disabled', false);
        $('#hostmail').prop('disabled', false);
        $('#hostmail').toggleClass('disabled', false);
    }
    else if (value === 'pakket4') {
        $('#grootte').text('n.t.b.');
        $('#mailpakket-2').toggleClass('disabled', false);
        $('#hostmail').prop('disabled', false);
        $('#hostmail').toggleClass('disabled', false);
    }
}

function validateForm() {
    var error = '';
    var domein = document.forms["bestelling"]["domeinnaam"].value;
    if (domein == null || domein == "") {
        error += 'U moet eerst een domein toevoegen.\n';
    }
    var vn = document.forms["bestelling"]["voornaam"].value;
    if (vn == null || vn == "") {
        error += 'Voornaam is verplicht\n';
    }
    var an = document.forms["bestelling"]["achternaam"].value;
    if (an == null || an == "") {
        error += 'Achternaam is verplicht\n';
    }
    var adr = document.forms["bestelling"]["adres"].value;
    if (adr == null || adr == "") {
        error += 'Adres is verplicht\n';
    }
    var pc = document.forms["bestelling"]["postcode"].value;
    if (pc == null || pc == "") {
        error += 'Postcode is verplicht\n';
    }
    var wp = document.forms["bestelling"]["woonplaats"].value;
    if (wp == null || wp == "") {
        error += 'Woonplaats is verplicht\n';
    }
    var tf = document.forms["bestelling"]["telefoon"].value;
    if (tf == null || tf == "") {
        error += 'Telefoon is verplicht\n';
    }
    var vw = document.forms["bestelling"]["voorwaarden"].value;
    if (vw == null || vw == false) {
        error += 'U moet eerst akkoord gaan met de Algemene Voorwaarden.';
    }

    if (error != '') {
        alert(error);
        return false;
    }
}

function togglemailbox(value) {
    if (value !== 'geen') {
        $('#mailbox').show();
    }
    else {
        $('#mailbox').hide();
    }
}
