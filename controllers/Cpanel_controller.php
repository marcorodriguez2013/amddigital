<?php

class Cpanel_controller extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function Home() {
        $this->view->render($this, 'home', NOMBRE_EMPRESA, 'home');
    }

    public function Login() {
        $this->view->render($this, 'login', NOMBRE_EMPRESA, 'login');
    }

}
