<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fabs extends MX_Controller {
	
	public function __construct(){
	
        parent::__construct();
        
        $this->masterpage->setMasterPage(get_option('template') );
	}
	
	public function index($_page = 'page_1'){
		$this->$_page();
	}
    
    public function page_1(){

        $data['include_script'] = inc_script(
			array(
				"application/modules/fabs/js/page_1.js"
			)
		);

        $data['title'] = 'Please input Fabelio product url';
    
        $this->masterpage->addContentPage('page_one', 'contentmain', $data);
	
		$this->masterpage->show( );
    }

    public function page_2(){
    
        $data['include_script'] = inc_script(
			array(
				"includes/datatables/jquery.dataTables.min.js",
				"includes/datatables/dataTables.bootstrap.min.js",
				"includes/datatables/dataTables.bootstrap.min.css",
				"https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap.min.js",
				"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js",
				"https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js",
                "application/modules/fabs/js/page_2.js"
            )
        );
        
        $data['title'] = 'Fabelio URL List';

        $this->masterpage->addContentPage('page_two', 'contentmain', $data);
	
		$this->masterpage->show( );
    }

    public function page_3($url_id = false, $date=null){

        $data['include_script'] = inc_script(
			array(
				"includes/highcharts/highcharts.js",
				"includes/highcharts/highcharts-3d.js",
				"includes/highcharts/exporting.js",
				"includes/highcharts/export-data.js",
                "application/modules/fabs/js/highcharts_opt_default.js",
                "includes/datepicker/bootstrap-datepicker.js",
				"includes/datepicker/locales/bootstrap-datepicker.id.js",
                
                "application/modules/fabs/js/page_3.js"
            )
        );
    
        $data['title'] = 'Fabelio Price History';
        
        $data['url_id'] = $url_id ? $url_id : '';

        $data['date']   = $date ? $date : date('Y-m-d');

        $this->masterpage->addContentPage('page_three', 'contentmain', $data);
	
		$this->masterpage->show( );
    }

    public function test(){
        
        $this->load->helper('scrap');

        $_ = fabelio();

        dump($_);
    }
}
