<?php namespace Kitbs\CodeValidation\Tests\Laravel;

use Validation;
use TestCase;
use Validator;

abstract class BaseTestCase extends TestCase {

	protected $validation;

	public function getValidatorInstance($key, $rule, $value, $parameters = array()) {

		if (!empty($parameters)) {
			$rule .= ':'.implode(',', $parameters);
		}
		
		$validator = Validator::make(
			array(
				$key => $value
			),
			array(
				$key => 'required|'.$rule,
			)
		);

		return $validator->passes();
	}

}