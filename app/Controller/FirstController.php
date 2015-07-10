<?php
App::uses('AppController', 'Controller');

class FirstController extends AppController {

	public $uses = array('First');

	public function index() {
        $this->layout = "first_layout";
        $this->title = "first application";

        $data = $this->First->getAllData();
        $this->set(compact("data"));
	}
}
