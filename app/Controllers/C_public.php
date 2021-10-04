<?php
namespace App\Controllers;
class C_public extends BaseController {
    public function index() {
        echo view('pages/v_public');
    }
}
?>