<?php


class Build extends AppModel {
    public $useTable = false;

    public function test_function($param_string) {
        print "Hello World!!" . $param_string . "\n";
    }
}
