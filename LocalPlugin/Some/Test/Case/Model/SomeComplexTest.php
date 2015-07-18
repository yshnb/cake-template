<?php
App::uses('SomeComplex', 'Model');


class SomeComplexTest extends CakeTestCase {

    public function setUp() {
        parent::setUp();

		// mock pattern
		$this->SomeComplex = $this->getMockBuilder('SomeComplex')
			->disableOriginalConstructor()
			->setMethods(array('log')) // mocking this method only
			->getMock();
    }

    public function tearDown() {
        unset($this->SomeComplex);

        parent::setUp();
    }

	public function testSampleFunc() {
		$this->SomeComplex->expects($this->once())->method('log')
			->with($this->isType('string'), $this->isType('string'), $this->isType('array'));
			
		$this->SomeComplex->sampleFunc("hoge");
	}
}
