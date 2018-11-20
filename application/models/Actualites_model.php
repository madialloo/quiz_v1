<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualites_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

    // get a specific info    
    public function get_actualite($act_id){
        $this->db->where('ACT_ID',$act_id);
        $result = $this->db->get('T_ACTUALITES_ACT',1);
        return $result;
    }
    // fetch all the users from T_COMPTE_CPT & send result to controller : 
    public function get_actualites(){
        $this->db->select();
        // $this->db->where('CPT_TYPE',$cpt_type);
        $this->db->from('T_ACTUALITES_ACT');
        $result = $this->db->get();
        return $result;
    }
}