<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    class Comptes extends CI_Model{
    
    public function validateCompte($cpt_pseudo,$cpt_motdepasse){
        $this->db->where('CPT_PSEUDO',$cpt_pseudo);
        $this->db->where('CPT_MOTDEPASSE',$cpt_motdepasse);
        $result = $this->db->get('T_COMPTE_CPT',1);

        return $result;
    }
    // create a new 'formateur'
    public function createFormateur($data){
        $this->db->insert('T_COMPTE_CPT',$data);
        $formateur_id = $this->db->insert_id();

        return $formateur_id;
    }
    // create a new 'administrateur'
    public function createAdministrateur($data){
        $this->db->insert('T_COMPTE_CPT',$data);
        $administrateur_id = $this->db->insert_id();

        return $administrateur_id;
    }
}