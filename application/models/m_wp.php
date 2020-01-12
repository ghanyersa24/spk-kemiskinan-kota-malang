<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_wp extends CI_Model
{
    public function getIndividu()
    {
        $this->db->join('perorangan pr', 'pr.IdEkonomi = sr.IdEkonomi', 'left');
        $this->db->where('sr.IdJenisPenerima', "1"); 
        $this->db->select('sr.id_survey, pr.*');
        return $this->db->get('survey sr')->result_array();
    }
}
