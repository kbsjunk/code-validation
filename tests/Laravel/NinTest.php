<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/UkninTest.php');

use Validator;
use TestCase;
use IsoCodes\Tests\UkninTest as BaseTest;

class UkninTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidUknin: data Provider
     *
     * @return array
     */
	public function getValidUknin()
	{
		$test = new BaseTest;
		return $test->getValidUknin();
	}
	/**
     * getInvalidUknin: data Provider
     *
     * @return array
     */
	public function getInvalidUknin()
	{
		$test = new BaseTest;
		return $test->getInvalidUknin();
	}
	/**
     * testValidUknin
     *
     * @param mixed $nino
     *
     * @dataProvider getValidUknin
     *
     * return void
     */
	public function testValidUknin($nino=false)
	{
		$this->assertTrue($this->getValidatorInstance('nino', 'nino', $nino));
	}
	/**
     * testInvalidUknin
     *
     * @param mixed $nino
     *
     * @dataProvider getInvalidUknin
     *
     * return void
     */
	public function testInvalidUknin($nino=false)
	{
		$this->assertFalse($this->getValidatorInstance('nino', 'nino', $nino));
	}

}