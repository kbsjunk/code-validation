<?php namespace Kitbs\CodeValidation\Tests\Validator;

use Kitbs\CodeValidation\Validator\Abn;
use TestCase;

class AbnTest extends TestCase {

	/**
     * getValidAbn: data Provider
     *
     * @return array
     */
	public function getValidAbn()
	{
		return array(
			array('37 276 364 750'),
			array('72 016 260 045'),
			array('20128842964'),
			array('22 058 138 499 '),
			array('80 076 462 294'),
			array('91163 346248'),
		);
	}
	/**
     * getInvalidAbn: data Provider
     *
     * @return array
     */
	public function getInvalidAbn()
	{
		return array(
			array('37 276 364 751'),
			array('37 276 364 75'),
			array('37 2763 64 7512'),
			array('37-276-364-750'),
			array(''),
			array(' '),
			array(null)
		);
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
	public function testValidAbn($abn)
	{
		$this->assertTrue(Abn::validate($abn));
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
	public function testInvalidAbn($abn)
	{
		$this->assertFalse(Abn::validate($abn));
	}

}