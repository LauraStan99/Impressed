<?php

class cartFull extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $this->view->render('cartFull');
    }
}
?>