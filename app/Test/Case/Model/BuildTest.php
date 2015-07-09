<?php
App::uses('Build', 'Model');


class BuildTest extends CakeTestCase {

    public function setUp() {
        parent::setUp();
        $this->Build = ClassRegistry::init('Build');
    }

    public function tearDown() {
        unset($this->Build);

        parent::setUp();
    }

    public function testFirst() {
        $this->assertEquals(true, true);
        //$this->assertEquals(true, false);
    }

    public function testSecond() {
        $this->assertEquals(true, true);
    }
}
