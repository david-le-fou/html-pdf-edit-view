$(document).ready(function(){
    console.log('test ok')    ;
});

function valide(){
    var code = $("#code_html").val();
    $.ajax({
        url:'ajax.php',
        data: {code:code},
        succes: function(){
            
        }
    })
    $('iframe').attr('src', $('iframe').attr('src')); //recharger iframe
}