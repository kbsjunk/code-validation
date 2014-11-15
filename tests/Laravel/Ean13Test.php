<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/Ean13Test.php');

use Validator;
use TestCase;
use IsoCodes\Tests\Ean13Test as BaseTest;

class Ean13Test extends BaseTestCase {

	protected $validation;

	/**
     * getValidEan13: data Provider
     *
     * @return array
     */
	public function getValidEan13()
	{
		$test = new BaseTest;
		return $test->getValidEan13();
	}
	/**
     * getInvalidEan13: data Provider
     *
     * @return array
     */
	public function getInvalidEan13()
	{
		$test = new BaseTest;
		return $test->getInvalidEan13();
	}
	/**
     * testValidEan13
     *
     * @param mixed $ean13
     *
     * @dataProvider getValidEan13
     *
     * return void
     */
	public function testValidEan13($ean13=false)
	{
		$this->assertTrue($this->getValidatorInstance('ean13', 'ean13', $ean13));
	}
	/**
     * testInvalidEan13
     *
     * @param mixed $ean13
     *
     * @dataProvider getInvalidEan13
     *
     * return void
     */
	public function testInvalidEan13($ean13=false)
	{
		$this->assertFalse($this->getValidatorInstance('ean13', 'ean13', $ean13));
	}

}