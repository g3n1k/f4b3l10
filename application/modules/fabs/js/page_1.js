$(document).ready(function(){

});

function scrap_url(){
    var _p = { url: $('#url').val() };
    var _url = base_url() + 'fabs/api/scrap';
    // console.log(_p);
    $('#btn_send').val('Loading ...');
    $.post(_url, _p, function(d){
        //console.log(d.status, d.message);
        alert(d.status +"\r\n"+d.message);
        $('#url').val('');
        $('#btn_send').val('Send!');
    }, 'json');
}