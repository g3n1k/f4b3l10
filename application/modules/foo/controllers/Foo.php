<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foo extends MX_Controller {
	
	public function __construct(){
	
        parent::__construct();
        
        $this->masterpage->setMasterPage(get_option('template') );
	}
	
	public function index($page = 1){
		
		$data = ['word'=>"hello world ". getenv('POSTGRES_USER')];
		
        $this->masterpage->addContentPage('foo_index', 'contentmain', $data);
	
		$this->masterpage->show( );
	}

}
