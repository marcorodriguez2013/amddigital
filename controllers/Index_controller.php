<?php

class Index_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render($this, 'index', NOMBRE_EMPRESA, 'index');
    }

    public function login() {
        $this->view->render($this, 'login', NOMBRE_EMPRESA, 'login');
    }

}
