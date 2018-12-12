<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matchs_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

    // get a specific info    
    public function get_match($mat_code){
        $this->db->where('MAT_CODE',$mat_code);
        $result = $this->db->get('T_MATCH_MAT',1);
        return $result;
    }
    // fetch all the users from T_COMPTE_CPT & send result to controller : 
    public function get_matchs(){
        $this->db->select();
        // $this->db->where('MAT_CODE',$mat_code);
        $this->db->from('T_MATCH_MAT');
        $result = $this->db->get();
        return $result;
    }
}