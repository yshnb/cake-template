<?php
App::uses('AppController', 'Controller');

class FirstController extends AppController {

	public $uses = array('First', 'MyRedis');
    public $components = ['Paginator', 'Session'];
    public $helper = ['Mustache'];

	public function index() {
        $this->layout = "first_layout";
        $this->title = "first application";

        $first = $this->First->getAllData();

        $this->MyRedis->set('key', 'value');
        $this->MyRedis->get('key');
        $this->MyRedis->incr('pv');
        $pv = $this->MyRedis->get('pv');

        $this->set(compact("first", "pv"));
	}

	public function templ() {
        //$this->autorender = false;
        $this->layout = "";

        $params = array(
            'title' => 'title',
            'text' => 'Text',
        );
        $this->set(compact('params'));
	}
}
