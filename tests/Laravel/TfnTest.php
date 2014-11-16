<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require realpath(dirname(__FILE__).'/../Validator/TfnTest.php');

use Validator;
use TestCase;
use Kitbs\CodeValidation\Tests\Validator\TfnTest as BaseTest;

class TfnTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidTfn: data Provider
     *
     * @return array
     */
	public function getValidTfn()
	{
		$test = new BaseTest;
		return $test->getValidTfn();
	}
	/**
     * getInvalidTfn: data Provider
     *
     * @return array
     */
	public function getInvalidTfn()
	{
		$test = new BaseTest;
		return $test->getInvalidTfn();
	}
	/**
     * testValidTfn
     *
     * @param mixed $tfn
     *
     * @dataProvider getValidTfn
     *
     * return void
     */
	public function testValidTfn($tfn=false)
	{
		$this->assertTrue($this->getValidatorInstance('tfn', 'tfn', $tfn));
	}
	/**
     * testInvalidTfn
     *
     * @param mixed $tfn
     *
     * @dataProvider getInvalidTfn
     *
     * return void
     */
	public function testInvalidTfn($tfn=false)
	{
		$this->assertFalse($this->getValidatorInstance('tfn', 'tfn', $tfn));
	}

}