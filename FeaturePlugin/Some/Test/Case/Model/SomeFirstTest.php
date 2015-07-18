<?php
App::uses('SomeFirst', 'Model');


class SomeFirstTest extends CakeTestCase {

    public $fixtures = array(
        'app.some_first'
    );

    public function setUp() {
        parent::setUp();
        $this->SomeFirst = ClassRegistry::init('SomeFirst');
    }

    public function tearDown() {
        unset($this->SomeFirst);

        parent::setUp();
    }

    public function testGetAllData() {
        $data = $this->SomeFirst->getAllData();
        $this->assertEquals(3, count($data));
    }

    public function testGetUniq() {
        $data = $this->SomeFirst->getUniq(1);
        $this->assertEquals(1, count($data));
        $this->assertEquals(1, $data['SomeFirst']['id']);
    }
}
