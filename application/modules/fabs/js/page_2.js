$(document).ready(function(){

    var _url = base_url()+"fabs/api/table";

	dataTable = $('#table-list').DataTable({  
		"processing":true,
		"serverSide":true,
		"order":[],  
		"ajax":{  
			url: _url,
			type:"POST",
			error: function(jqXHR, ajaxOptions, thrownError) {
				console.log(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
			}
		},
		"dom": "lBfrtip",
		"buttons": ['excel', 'csv', 'colvis'],
		"lengthMenu":[ [10,25,50,-1],[10,25,50, "All"] ],
		"columnDefs":[  
			{  
				"targets":[0,2],  
				"orderable":false,  
			}  
		],  
	});

});

function load_image(_url){

    $('#image-modal').attr('src', _url);
    $("#myModal").modal()
}
