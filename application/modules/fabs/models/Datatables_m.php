<?php
class Datatables_m extends GW_Model {
    
    // ini contoh
    var $p = array(
        'table' => "users",
        'column_select' => array("id", "first_name", "last_name", "image"),
        'column_order'  => array(null, "first_name", "last_name", null, null), //null tidak di order
        'default_order'  => 'id', # default untuk sorting
        //'column_search' => array("first_name", "last_name")
        // 'table_join' => array(
            // 0 table, 1 column on, 2 method left right inner
            // array("mdl_user_data d", "d.nik=k.nik", "left")
        //    ),
        // 'where_in'  => array('column'=>array($value1, $value2))
        // 'group_by'   => array('a.nik', 'b.abc');
    );

    function __construct(){

        parent::__construct();
    }

    function set($p = array()){ 

        foreach($p as $var=>$val) $this->p[$var] = $val;

        if(isset($p['search_value'])) unset($this->p['search_value']);

        if(!isset($p['column_search'])) $this->p['column_search'] = $this->p['column_search'];
    }

    function make_query(){

        $this->db->select($this->p['column_select']);  
        
        $this->db->from($this->p['table']);

        
        if(isset($this->p['table_join'])){

            foreach($this->p['table_join'] as $i=>$_ja) {

                if( !isset($_ja[2]) ) $this->db->join($_ja[0], $_ja[1], 'left');

                else $this->db->join($_ja[0], $_ja[1], $_ja[2]);
            } 
        }
    
        if(isset($this->p['where'])) $this->db->where($this->p['where']);

        if(isset($_POST["search"]["value"])){  

            $_s = $this->input->post('search');
            
            $str = array();
            
            foreach($this->p['column_search'] as $clm) $str[] = ' lower('.$clm . ") LIKE '%".$_s["value"]."%'  ESCAPE '!' "; 

            $this->db->where('('.implode(' OR ', $str).') ');
        }

        if(isset($this->p['where_in'])) foreach($this->p['where_in'] as $_col=>$_array) $this->db->where_in($_col, $_array);

        if(isset($this->p['group_by'])) foreach($this->p['group_by'] as $_group_by) $this->db->group_by($_group_by);

        if(isset($_POST["order"])) {
            
            $_ord = $this->input->post('order');

            $this->db->order_by($this->p['column_order'][$_ord['0']['column']], $_ord['0']['dir']);  
        }

        else {

            if(!is_array($this->p['default_order'])) $this->db->order_by($this->p['default_order'], 'ASC');  

            else $this->db->order_by($this->p['default_order'][0], $this->p['default_order'][1]);  
        }

    }  
    
    function make_datatables(){  

        $this->make_query();  
        
        if(isset($_POST["length"]) && $_POST["length"] != -1){

            $this->db->limit($this->input->post('length'), $this->input->post('start'));  
         }
        
        $query = $this->db->get();  

        debug($this->db->last_query(), 'datatables select');
        
        return $query->result();  
    }  
    
    function get_filtered_data(){  
        
        $this->make_query();  
        
        $query = $this->db->get();  
        
        return $query->num_rows();  
    }       
    
    function get_all_data()  
    {  
        $this->db->select("*");  
        
        $this->db->from($this->p['table']);

        if(isset($this->p['table_join'])){

            foreach($this->p['table_join'] as $i=>$_ja) {

                if( !isset($_ja[2]) ) $this->db->join($_ja[0], $_ja[1]);

                else $this->db->join($_ja[0], $_ja[1], $_ja[2]);
            } 
        }

    
        if(isset($this->p['where'])) $this->db->where($this->p['where']);
        
        if(isset($this->p['group_by'])) foreach($this->p['group_by'] as $_group_by) $this->db->group_by($_group_by);

        $query = $this->db->get();
        
        return count($query->result());  
    }
}