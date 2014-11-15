<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/BbanTest.php');

use Validator;
use TestCase;
use IsoCodes\Tests\BbanTest as BaseTest;

class BbanTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidBban: data Provider
     *
     * @return array
     */
	public function getValidBban()
	{
		$test = new BaseTest;
		return $test->getValidBbans();
	}
	/**
     * getInvalidBban: data Provider
     *
     * @return array
     */
	public function getInvalidBban()
	{
		$test = new BaseTest;
		return $test->getInvalidBbans();
	}
	/**
     * testValidBban
     *
     * @param mixed $bban
     *
     * @dataProvider getValidBban
     *
     * return void
     */
	public function testValidBban($bban=false)
	{
		$this->assertTrue($this->getValidatorInstance('bban', 'bban', $bban));
	}
	/**
     * testInvalidBban
     *
     * @param mixed $bban
     *
     * @dataProvider getInvalidBban
     *
     * return void
     */
	public function testInvalidBban($bban=false)
	{
		$this->assertFalse($this->getValidatorInstance('bban', 'bban', $bban));
	}

}