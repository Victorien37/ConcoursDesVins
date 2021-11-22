<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers\Jury;
use App\Controllers\BaseController;

/**
 * Description of C_consulterNotes
 *
 * @author Victorien
 */
class C_consulterNotesJury extends BaseController {
    public function index() {
        echo view('pages/Jury/v_consulterNotesJury');
    }
}