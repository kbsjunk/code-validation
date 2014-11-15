<?php namespace Kitbs\CodeValidation\Tests\Laravel;

require realpath(dirname(__FILE__).'/../BaseTestCase.php');
require realpath(dirname(__FILE__).'/../Validator/AbnTest.php');

use Validator;
use TestCase;
use Kitbs\CodeValidation\Tests\Validator\AbnTest as BaseTest;

class AbnTest extends BaseTestCase {

	protected $validation;

	/**
     * getValidAbn: data Provider
     *
     * @return array
     */
	public function getValidAbn()
	{
		$test = new BaseTest;
		return $test->getValidAbn();
	}
	/**
     * getInvalidAbn: data Provider
     *
     * @return array
     */
	public function getInvalidAbn()
	{
		$test = new BaseTest;
		return $test->getInvalidAbn();
	}
	/**
     * testValidAbn
     *
     * @param mixed $abn
     *
     * @dataProvider getValidAbn
     *
     * return void
     */
	public function testValidAbn($abn=false)
	{
		$this->assertTrue($this->getValidatorInstance('abn', 'abn', $abn));
	}
	/**
     * testInvalidAbn
     *
     * @param mixed $abn
     *
     * @dataProvider getInvalidAbn
     *
     * return void
     */
	public function testInvalidAbn($abn=false)
	{
		$this->assertFalse($this->getValidatorInstance('abn', 'abn', $abn));
	}

}