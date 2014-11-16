<?php namespace Kitbs\CodeValidation\Tests\Validator;

use Kitbs\CodeValidation\Validator\Tfn;
use TestCase;

class TfnTest extends TestCase {

	/**
     * getValidTfn: data Provider
     *
     * @return array
     */
	public function getValidTfn()
	{
		// N.B. Randomly generated
		return array(
			array('336209198'),
			array('815510821'),
			array('167246224'),
			array('408 932 115'),
			array('247 057 322'),
			array('767367013'),
			array('113329389'),
			array('706324201'),
		);
	}
	/**
     * getInvalidTfn: data Provider
     *
     * @return array
     */
	public function getInvalidTfn()
	{
		return array(
			array('3362091981'),
 			array('123456789'),
			array('12 238 789'),
			array('276-364-750'),
			array('247-057-322'), // Would be valid but has dashes
			array(''),
			array(' '),
			array(null) 
		);
	}
	/**
     * testValidTfn
     *
     * @param mixed $abn
     *
     * @dataProvider getValidTfn
     *
     * return void
     */
	public function testValidTfn($abn)
	{
		$this->assertTrue(Tfn::validate($abn));
	}
	/**
     * testInvalidTfn
     *
     * @param mixed $abn
     *
     * @dataProvider getInvalidTfn
     *
     * return void
     */
	public function testInvalidTfn($abn)
	{
		$this->assertFalse(Tfn::validate($abn));
	}

}