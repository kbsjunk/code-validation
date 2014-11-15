<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require_once realpath(dirname(__FILE__).'/../BaseTestCase.php');
require_once realpath(dirname(__FILE__).'/../../vendor/ronanguilloux/isocodes/tests/IsoCodes/Tests/IbanTest.php');

use Validator;
use TestCase;
use IsoCodes\Tests\IbanTest as BaseTest;

class IbanTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidIban: data Provider
     *
     * @return array
     */
	public function getValidIban()
	{
		$test = new BaseTest;
		return $test->getValidIbans();
	}
	/**
     * getInvalidIban: data Provider
     *
     * @return array
     */
	public function getInvalidIban()
	{
		$test = new BaseTest;
		return $test->getInvalidIbans();
	}
	/**
     * testValidIban
     *
     * @param mixed $iban
     *
     * @dataProvider getValidIban
     *
     * return void
     */
	public function testValidIban($iban=false)
	{
		$this->assertTrue($this->getValidatorInstance('iban', 'iban', $iban));
	}
	/**
     * testInvalidIban
     *
     * @param mixed $iban
     *
     * @dataProvider getInvalidIban
     *
     * return void
     */
	public function testInvalidIban($iban=false)
	{
		$this->assertFalse($this->getValidatorInstance('iban', 'iban', $iban));
	}

}