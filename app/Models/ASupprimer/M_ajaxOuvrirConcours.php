<?php

class M_AjaxOuvrirConcours extends \CodeIgniter\Model 
{
    public function insert_user()
    {    
        $data = array(
            'nomConcours' => $this->input->post('nomConcours'),
            'dateOuverture' => $this->input->post('dateOuvertureConcours'),
            'dateCloture' => $this->input->post('dateClotureConcours'),
            'dateResultat' => $this->input->post('dateClotureConcours'),
            'dateResultat' => $this->input->post('dateOuvertureResultats')
            );

        return $this->db->insert('concours', $data);
    }   
}
?>
