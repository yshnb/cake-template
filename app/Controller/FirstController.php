<?php
App::uses('AppController', 'Controller');

class FirstController extends AppController {

	//public $uses = array('First', 'MyRedis');
	public $uses = array('First');

	public function index() {
        $this->layout = "first_layout";
        $this->title = "first application";

        $data = $this->First->getAllData();

        //$this->MyRedis->set('key', 'value');
        //$this->MyRedis->get('key');
        //$this->MyRedis->incr('pv');
        //$pv = $this->MyRedis->get('pv');

        //$this->set(compact("data", "pv"));
        $this->set(compact("data"));
	}
}
