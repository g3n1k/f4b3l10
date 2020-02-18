$(document).ready(function(){

    var id = $('#url_id').val();

    load_chart(id);
});

function load_chart(id){

    var _url = base_url() + 'fabs/api/getprice/'+id;

    $.get(_url, function(k){
        
        var hc = $.extend({}, highcharts_opt_default, k);
        
        Highcharts.chart('chart_price', hc);
    
    }, 'json');
}