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
            $_img = '<a href="'.$row->image.'"><img src="'.$row->image.'" style="max-height:100px"/></a>';
            $_url = '<b>'.$row->title.'</b>';
            $sub_array[] = $_img.'<br />'.$_url;
            $sub_array[] = $row->price;
            
            $_a = '<a href="'.$row->url.'" class="btn btn-sm btn-info"><icon class="fa fa-eye"></icon></a>';
            $_a .= '<button onclick="load_image(\''.$row->image.'\');false;" class="btn btn-sm btn-info"><icon class="fa fa-eye"></icon></button>';
            $_a .= '<button type="checkbox" class="btn btn-info btn-sm" onclick="show_data('.$row->id.');"><i class="fa fa-edit"></button>';

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
    function getprice($id, $template = ''){

        
    }
}
	