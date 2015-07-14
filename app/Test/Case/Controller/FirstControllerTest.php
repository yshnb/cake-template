<?php
App::uses('FirstController', 'Controller');

class FirstControllerTest extends ControllerTestCase {

    public $fixtures = array('app.first');

    public function setUp() {
        parent::setUp();
    }

    public function testIndexVars() {
        $result = $this->testAction('/', array('method' => 'get', 'return' => 'vars'));
        $this->assertEquals(3, count($result['first']));
        $this->assertEquals(1, count($result['pv']));
        //debug($result);
    }

    public function testIndexViews() {
        $result = $this->testAction('/', array('method' => 'get', 'return' => 'contents'));
        //debug($result);
    }

    public function testTemplView() {
        $expected = "<h2>title</h2>\n<div>\nText\n</div>\n";
        $result = $this->testAction('/templ', array('method' => 'get', 'return' => 'contents'));
        $this->assertEquals($result, $expected);
    }
}
