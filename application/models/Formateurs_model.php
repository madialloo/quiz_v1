<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formateurs_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }
    public function validateCompte($cpt_pseudo,$cpt_motdepasse){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $this->db->where('CPT_MOTDEPASSE',$cpt_motdepasse);
        $result = $this->db->get('T_COMPTE_CPT',1);
        
        return $result;
    }
    // create a new 'formateur'
    public function insert_user($data){
        $this->db->insert('T_COMPTE_CPT',$data);
        $user_id = $this->db->insert_id();
        return $user_id;
    }
    // get a 'formateur' info        
    public function get_Fuser($cpt_pseudo){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $result = $this->db->get('T_COMPTE_CPT',1);
        return $result;
    }
    // fetch all the users from T_COMPTE_CPT & send result to controller : 
    public function get_Fusers($cpt_type){
        // $result = $this->db->query("SELECT * FROM T_COMPTE_CPT;");
        $this->db->select();
        $this->db->where('CPT_TYPE',$cpt_type);
        $this->db->from('T_COMPTE_CPT');
        $result = $this->db->get();
        return $result;
    }
    /******************************* UPDATE METHODS  ******************************************/
    // updates an formateur user
    public function update_Fuser($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM){
            print_r($CPT_PSEUDO);
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