<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
    public function validateCompte($cpt_pseudo,$cpt_motdepasse){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $this->db->where('CPT_MOTDEPASSE',$cpt_motdepasse);
        $result = $this->db->get('t_compte_cpt',1);
        
        return $result;
    }
    // create a new 'formateur'
    public function insert_user($data){
        $this->db->insert('t_compte_cpt',$data);
        $user_id = $this->db->insert_id();
        return $user_id;
    }
    
    public function get_Auser($cpt_pseudo){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $result = $this->db->get('T_COMPTE_CPT',1);
        return $result;
    }
    // fetch all the users from T_COMPTE_CPT & send result to controller : 
    public function get_Ausers($cpt_type){
        // $result = $this->db->query("SELECT * FROM T_COMPTE_CPT;");
        $this->db->select();
        $this->db->where('CPT_TYPE',$cpt_type);
        $this->db->from('t_compte_cpt');
        $result = $this->db->get();
        return $result;
    }
}