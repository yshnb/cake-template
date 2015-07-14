<?php
App::uses('MyRedis', 'Model');


class MyRedisTest extends CakeTestCase {

    public $fixtures = array(
        'app.myredis'
    );

    public function setUp() {
        parent::setUp();
        $this->MyRedis = ClassRegistry::init('MyRedis');
    }

    public function tearDown() {
        $this->MyRedis->delete('key');
        $this->MyRedis->delete('pv');
        unset($this->MyRedis);

        parent::setUp();
    }

    public function testGet() {
        $data = $this->MyRedis->get('key');
        $this->assertEquals(1, count($data));
        $this->assertEquals('value', $data);

        $data = $this->MyRedis->get('pv');
        $this->assertEquals(1, count($data));
        $this->assertEquals(1, $data);

        $data = $this->MyRedis->get('test');
    }
}
