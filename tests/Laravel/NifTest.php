<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/NifTest.php');

use Validator;
use TestCase;
use IsoCodes\Tests\NifTest as BaseTest;

class NifTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidNif: data Provider
     *
     * @return array
     */
	public function getValidNif()
	{
		$test = new BaseTest;
		return $test->getValidNifs();
	}
	/**
     * getInvalidNif: data Provider
     *
     * @return array
     */
	public function getInvalidNif()
	{
		$test = new BaseTest;
		return $test->getInvalidNifs();
	}
	/**
     * testValidNif
     *
     * @param mixed $nif
     *
     * @dataProvider getValidNif
     *
     * return void
     */
	public function testValidNif($nif=false)
	{
		$this->assertTrue($this->getValidatorInstance('nif', 'nif', $nif));
	}
	/**
     * testInvalidNif
     *
     * @param mixed $nif
     *
     * @dataProvider getInvalidNif
     *
     * return void
     */
	public function testInvalidNif($nif=false)
	{
		$this->assertFalse($this->getValidatorInstance('nif', 'nif', $nif));
	}

}