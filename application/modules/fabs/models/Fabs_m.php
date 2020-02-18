<?php
class fabs_m extends GW_Model {

    function __construct(){

        parent::__construct();
    }

    function get_prices($id, $date){

        $this->db->select("*, to_char(time, 'HH') jam");

        $this->db->from('_price');

        $this->db->where('id',$id);
        
        $this->db->where("time::date = '$date'", NULL, false);

        $this->db->order_by('time', 'asc');

        $query = $this->db->get();

        return $query->result();

    }

}
