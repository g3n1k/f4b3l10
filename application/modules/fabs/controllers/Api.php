<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('foo/foo_m');
    }

    // first scrap
    function scrap(){

        $url = $this->input->post('url');

        $_status = ['status'=>'failed', 'message'=>'url tidak valid / data telah ada'];
       
        if($url){
            
            $this->load->helper('scrap');
            
            $_ = fabelio($url);

            // ["title"] => string(16) "Meja Kerja Pelle"
            // ["price"] => int(424150)
            // ["image"] => string(122) "https://m2fabelio.imgix.net/catalog/product/cache/image/265x265/beff4985b56e3afdbeabfc89641a4582/p/e/pelle_office_desk.jpg"
            // ["url"] => string(44) "https://fabelio.com/ip/meja-kerja-pelle.html"
            // ["id"] => string(5) "28073"
            // ["time"] => string(19) "2020-02-16 20:41:10"

            // apakah sudah ada di table
            

            $_url_data = array(
                'id'    => $_['id'],
                'title' => $_['title'],
                'url'   => $_['url'],
                'time'  => $_['time'],
                'price' => $_['price'],
            );

            $_price_data = array(
                'id'    => $_['id'],
                'time'  => $_['time'],
                'price' => $_['price']
            );

            $_img_data = array(
                'id'    => $_['id'],
                'image' => $_['image']
            );


            $id_in_db = @$this->foo_m->__select('_url', 'id', ['id'=>$_['id']], false)->id;
            
            // insert
            if(!$id_in_db) {
                $this->foo_m->__insert('_url', $_url_data);
                $this->foo_m->__insert('_price', $_price_data);
                $this->foo_m->__insert('_img', $_img_data);                                   
            }
            
            $_status = ['status'=>'success', 'message'=>'berhasil mengambil data'];
        }

        header('Content-Type: application/json');
        echo json_encode($_status);
    }

    // update price all
    function update(){

        $_urls = $this->foo_m->__select('_url', 'url', []);

        $this->load->helper('scrap');

        $c = 0;

        foreach($_urls as $v=>$_u){
            
            $_ = fabelio($_u->url);

            $_price_data = array(
                'id'    => $_['id'],
                'time'  => $_['time'],
                'price' => $_['price']
            );

            $this->foo_m->__insert('_price', $_price_data);

            $c++;
        }

        echo 'success update '.$c.' data';  
    }

    // get all list
    function table(){
        
        $p = array(
            'table' => "_url k",
            'column_select' => "k.id, k.url, k.title, k.time, k.price, i.image",
            'column_search'	=> array('k.title'),
            'column_order' => array("k.id", "k.title", "k.time"),
            'default_order' => array('k.time', 'desc'),
            //'where' => $_w,
            'table_join' => array(
                // 0 table, 1 column on, 2 method left-right inner
                array("_img i", "i.id=k.id", "left")
            )
        );

        $this->load->model('datatables_m');

        $this->datatables_m->set($p);
        
        $_ = $this->datatables_m->make_datatables();

        $data = array(); 

        $c = $this->input->post('start');
        
        foreach($_ as $row) {  
            $sub_array = array();
            
            $sub_array[] = ++$c;
            $_url = '<b>'.$row->title.'</b>';
            $_img = '<a href="'.$row->image.'"><img src="'.$row->image.'" style="max-height:100px"/></a>';
            $sub_array[] = $_url;
            $sub_array[] = $_img;
            $sub_array[] = number_format($row->price);
            
            $_a = '<a href="'.$row->url.'" class="btn btn-sm btn-primary"><icon class="fa fa-home"></icon></a> ';
            $_a .= '<button onclick="load_image(\''.$row->image.'\');false;" class="btn btn-sm btn-success"><icon class="fa fa-eye"></icon></button> ';
            $_a .= '<a class="btn btn-info btn-sm" href="'.base_url().'fabs/page_3/'.$row->id.'"><i class="fa fa-edit"></button> ';

            $sub_array[] = $_a;
            
            $data[] = $sub_array;  
        }
        
        $output = array(  
            "draw"            => intval($this->input->post("draw")),  
            "recordsTotal"    => $this->datatables_m->get_all_data(),  
            "recordsFiltered" => $this->datatables_m->get_filtered_data(),  
            "data"            => $data  
        );

        header('Content-Type: application/json');

        echo json_encode($output);
    }

    // get single product history price set templating
    function getprice($id = false, $date = false){

       $_url = $this->foo_m->__select('_url', '*', ['id'=>$id], false); 

       if(!$date) $date = date('Y-m-d'); 

       $this->load->model('fabs_m');
       
       $_prices = $this->fabs_m->get_prices($id, $date);

       // MULAI isi disini
		$data['title'] = $_url->title;
		
        $data['subtitle'] = $date;
        
        // list hours
        $hours = [];

        for ($i = 0; $i<24; $i++) $hours[] = $i;

        $data['xaxis_categories'] = json_encode($hours);

        $_data = [];

        foreach($_prices as $_ps=>$_p) $_data[] = (int) $_p->price;

        $_series = []; 

        $_series[] = array('name'=>$_url->title,  'data'=> $_data, 'type' => 'spline');

        $data['series'] = json_encode($_series);

        debug($_prices);

        $this->load->view('chart_axis', $data);
    }
}
	