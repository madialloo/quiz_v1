<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matchs_model extends CI_Model {
    
    public function __construct(){
        parent::__construct();
    }

    // get a specific info    
    public function get_match($mat_code){
        $result = $this->db->query("SELECT QTN_LIBELLE,REP_LIBELLE
                                    FROM T_QUESTION_QTN
                                    JOIN T_REPONSE_REP ON T_REPONSE_REP.QTN_ID = T_QUESTION_QTN.QTN_ID
                                    LEFT JOIN T_QUIZ_QUIZ ON T_QUESTION_QTN.QUIZ_ID + T_QUIZ_QUIZ.QUIZ_ID
                                    LEFT JOIN T_MATCH_MAT ON T_QUIZ_QUIZ.QUIZ_ID = T_MATCH_MAT.QUIZ_ID
                                    WHERE MAT_CODE = 'MAT123IF';
                                    ");
        // return the query_result
        return $result;
    }
    // get a specific info    
    public function get_matchOne($mat_code){
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