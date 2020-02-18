$(document).ready(function(){
    
    load_chart();
    	
    $('.date').datepicker({
        todayBtn: "linked",
        format: 'yyyy-mm-dd',
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true
	});
});

function load_chart(){

    var id = $('#url_id').val();

    var date = $('#inp_date').val();
    
    var _url = base_url() + 'fabs/api/getprice/'+id+'/'+date;

    var new_url = base_url()+'fabs/page_3/'+id+'/'+date;

    window.history.pushState("object or string", "price "+date, new_url);
    
    var chart = new Highcharts.chart('chart_price', {});

    chart.showLoading();

    $.get(_url, function(k){
        
        var hc = $.extend({}, highcharts_opt_default, k);
        
        chart = new Highcharts.chart('chart_price', hc);

        chart.hideLoading();

        
    
    }, 'json');
}