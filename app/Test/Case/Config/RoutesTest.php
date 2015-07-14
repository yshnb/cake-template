<?php

class RoutesTest extends CakeTestCase {

    public function routesUrl() {
        return [
            ['First', '/', ['controller' => 'first', 'action' => 'index']],
            ['Second', '/second', ['controller' => 'second', 'action' => 'index']],
            ['template test', '/templ', ['controller' => 'first', 'action' => 'templ']],
        ];
    }

    /**
     *  @dataProvider routesUrl
     */
    public function testFirst($name, $string, $array) {
        $this->assertEquals($string, Router::url($array), $name);
    }

    /**
     *  @dataProvider routesUrl
     */
    public function testFirstReversLookup($name, $string, $array) {
        $default = ['controller' => '', 'action' => '', 'pass' => [], 'named' => [], 'plugin' => null];
        $this->assertEquals(array_merge($default, $array), Router::parse($string), $name);
    }
}
