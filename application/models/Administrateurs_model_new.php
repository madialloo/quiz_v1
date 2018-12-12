<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function validateCompte($cpt_pseudo,$cpt_motdepasse){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $this->db->where('CPT_MOTDEPASSE',$cpt_motdepasse);
        $result = $this->db->get('T_COMPTE_CPT',1);
        
        return $result;
    }
    // get a 'administrateur' info    
    public function get_Auser($cpt_pseudo){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $result = $this->db->get('T_COMPTE_CPT',1);
        return $result;
    }
    // fetch all the users from T_COMPTE_CPT & send result to controller : 
    public function get_Ausers($cpt_type){
        $this->db->select();
        $this->db->where('CPT_TYPE',$cpt_type);
        $this->db->from('T_COMPTE_CPT');
        $result = $this->db->get();
        return $result;
    }
    // create a new 'administrateur'
    public function insert_user($data){
        $this->db->insert('T_COMPTE_CPT',$data);
        $user_id = $this->db->insert_id();
        return $user_id;
    }
    /******************************* UPDATE METHODS  ******************************************/
    // updates an Admin user
    public function update_Auser($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM){

        $query = $this->db->query("UPDATE T_COMPTE_CPT SET 
                                    CPT_MOTDEPASSE='".$CPT_MOTDEPASSE."',
                                    CPT_NOM='".$CPT_NOM."',
                                    CPT_PRENOM='".$CPT_PRENOM."' 
                                    WHERE CPT_PSEUDO = '".$CPT_PSEUDO."';");
        // return or not ???????
        $this->db->where('CPT_PSEUDO',$CPT_PSEUDO);
        $update = $this->db->get('T_COMPTE_CPT',1);
        return $update;
    }
}