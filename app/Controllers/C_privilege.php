<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of C_privilege
 *
 * @author Victorien
 */
class C_privilege extends BaseController {
    public function index(){
        echo view('pages/v_privilege');
    }
}
