<?php

App::uses('SomeAppModel', 'Model');
class SomeComplex extends SomeAppModel {
    public $useTable = false;

    public function sampleFunc($param_string) {
        $this->log("Hello World!!" . $param_string . "\n", "info",  array('adevents'));
    }
}
