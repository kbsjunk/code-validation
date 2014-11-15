<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/CifTest.php');

use Validator;
use TestCase;
use IsoCodes\Tests\CifTest as BaseTest;

class CifTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidCif: data Provider
     *
     * @return array
     */
	public function getValidCif()
	{
		$test = new BaseTest;
		return $test->getValidCifs();
	}
	/**
     * getInvalidCif: data Provider
     *
     * @return array
     */
	public function getInvalidCif()
	{
		$test = new BaseTest;
		return $test->getInvalidCifs();
	}
	/**
     * testValidCif
     *
     * @param mixed $cif
     *
     * @dataProvider getValidCif
     *
     * return void
     */
	public function testValidCif($cif=false)
	{
		$this->assertTrue($this->getValidatorInstance('cif', 'cif', $cif));
	}
	/**
     * testInvalidCif
     *
     * @param mixed $cif
     *
     * @dataProvider getInvalidCif
     *
     * return void
     */
	public function testInvalidCif($cif=false)
	{
		$this->assertFalse($this->getValidatorInstance('cif', 'cif', $cif));
	}

}