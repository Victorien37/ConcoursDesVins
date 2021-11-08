<?php

class C_AjaxOuvrirConcours {

    public function index() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomConcours', 'NomConcours', 'required');
        $this->form_validation->set_rules('dateOuvertureConcours', 'DateOuvertureConcours', 'required');
        $this->form_validation->set_rules('dateClotureConcours', 'DateClotureConcours', 'required');
        $this->form_validation->set_rules('etatConcours', 'EtatConcours', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('v_insertionFail', $data);
        } else {
            $this->load->model('M_ajaxOuvrirConcours');
            $this->Users_model->M_ajaxOuvrirConcours();
            $this->load->view('your_success_view');
        }
    }

}

?>