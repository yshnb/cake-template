<?php
App::uses('First', 'Model');


class FirstTest extends CakeTestCase {

    public $fixtures = array(
        'app.first'
    );

    public function setUp() {
        parent::setUp();
        $this->First = ClassRegistry::init('First');
    }

    public function tearDown() {
        unset($this->First);

        parent::setUp();
    }

    public function testGetAllData() {
        $this->assertEquals(3, $this->First->getAllData());
    }
}
