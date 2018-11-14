// Aangevraagde domeinen array
var domeinen = [];

// function aanvraag() {
//     var domeinnaam = document.getElementById('Search').value;
//
//     $('#aanvraagcheck:checked').each(function () {
//         var domeinnaamExt = domeinnaam + "." + this.value;
//         var domeinnaamExtAanv = domeinnaam + "." + this.value + " (Aanvraag) \n";
//         var n = domeinen.includes(domeinnaamExtAanv.toString());
//         var n = n.toString();
//         if (n = "false") {
//             domeinen.push(domeinnaamExtAanv);
//         }
//         $("#domeinen").append('<div id=' + domeinnaamExt + '><a href="#domeinnaam" class="glyphicon glyphicon-minus-sign close-div" style="color:red" id=' + domeinnaamExt + '></a><span>' + '  ' + domeinnaamExtAanv + '</span><br>');
//         $('#domeinnaamarea').text(domeinen.toString());
//     });
//
// }


$(document).ready(function () { //jQuery begin
    $('.aanvraagbutton').live('click', function () { //Als op aanvraag knop wordt geklikt
        var domeinnaam = document.getElementById('Search').value; // Domeinnaam definieren
        var ext = $(this).data('ext'); // Extensie definieren
        var domeinnaamExt = domeinnaam + "." + ext; // Domeinnaam + Extensie
        var domeinnaamExtAanv = domeinnaam + "." + ext + " (Aanvraag)"; // Domeinnaam + Extensie + (Aanvraag)
        var n = domeinen.includes(domeinnaamExtAanv.toString()); //Check of domein al in array zit
        var n = n.toString(); // Check naar string(true/false)
        if (n === "false") {
            domeinen.push(domeinnaamExtAanv); //Toevoegen aan array
            $("#domeinen").append('<div id=' + domeinnaamExt + '><a href="#domeinnaam" class="glyphicon glyphicon-minus-sign close-div" style="color:red" id=' + domeinnaamExt + '></a><span>' + '  ' + domeinnaamExtAanv + '</span><br>'); //Domein met verwijderknop toevoegen aan div domeinen
            $('#domeinnaamarea').text(domeinen.toString());
        }
    });

    $('.verhuis').live('click', function () {
        var domeinnaam = document.getElementById('Search').value;
        var ext = $(this).data('ext');
        var domeinnaamExt = domeinnaam + "." + ext;
        swal({
            title: 'Verhuiscode ' + domeinnaamExt,
            html: 'Vul hier de verhuiscode voor het domein <b>' + domeinnaamExt + '</b> in. <br><br>',
            input: 'text',
            type: 'question',
            showCancelButton: true,
            confirmButtonText: 'Bevestigen',
            cancelButtonText: 'Annuleren',
            showLoaderOnConfirm: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger m-l-10',
            allowOutsideClick: false
        }).then(function (verhuiscode) {
            var domeinnaamExtVerh = domeinnaam + "." + ext + " (Verhuizen)(Verhuiscode:" + verhuiscode + ")";
            var n = domeinen.includes(domeinnaamExtVerh.toString());
            var n = n.toString();
            if (n === "false") {
                domeinen.push(domeinnaamExtVerh);
                $("#domeinen").append('<div id=' + domeinnaamExt + '><a href="#domeinnaam" class="glyphicon glyphicon-minus-sign close-div" style="color:red" id=' + domeinnaamExt + '></a><span>' + '  ' + domeinnaamExtVerh + '</span><br>');
                $('#domeinnaamarea').text(domeinen.toString());
            }
        });
    });

    $('.close-div').live('click', function () {
        var search_term = $(this).attr("id");
        for (var i = domeinen.length - 1; i >= 0; i--) {
            if (domeinen[i].includes(search_term)) {
                domeinen.splice(i, 1);
                // break;       //<-- Uncomment  if only the first term has to be removed
            }
        }
        $('#domeinnaamarea').text(domeinen.toString());
        // $('#domeinnaamarea').val(val.replace(domeinnaamm + "(Aanvraag)", ""));
        $(this).parent().remove();
    });

    var loading;
    var results;
    loading = document.getElementById('loading');
    results = document.getElementById('results');

    $('#submit').click(function () {
        $.post("aanvraag.php", aangevraagd);
    });


    $('#Submit').click(function () {
        if ($('#Search').val() == "") {
            alert('please enter your domain');
            return false;
        }
        results.style.display = 'none';
        $('#results').html('');
        loading.style.display = 'inline';
        $.post('process.php?domain=' + escape($('#Search').val()), {}, function (response) {
            results.style.display = 'block';
            $('#results').html(unescape(response));
            loading.style.display = 'none';
        });
        return false;
    });
})
;

