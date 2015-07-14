<?php

/**
 * MyRedisFixture
 *
 */
class MyRedisFixture extends CakeTestFixture {
    public $useTable = true;
    public $useDbConfig = 'test_redis';
    public $fullDebug = false;
    public $model = 'MyRedis';

    public function create($db) {
        foreach($this->records as $key => $value) {
            $db->query('set', array($key, $value), $this->model);
        }
    }
    public function drop($db) {
        foreach($this->records as $key => $value) {
            $db->query('delete', array($key), $this->model);
        }
    }
    public function init() {
    }
    public function insert($db) {
    }
    public function truncate($db) {
    }

    public $records = array(
        'key' => 'value',
        'pv' => 1,
        'test' => 'data',
    );
}
