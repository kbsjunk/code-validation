<?php namespace Kitbs\CodeValidation\Validator;

use IsoCodes\ZipCode;
use Sirprize\PostalCodeValidator\Validator as SirprizeValidator;
use SplFileObject;

/**
 * Class Postcode
 *
 * Extend the IsoCodes\ZipCode class
 *
 * @package
 * @source
 * @link
 */

class Postcode extends ZipCode
{
	/**
     * Postcode validation
     *
     * @param string $postcode The Postcode
     * @param string $country  The Country
     *
     * @return bool
     */

	public static function validate($postcode, $country, $strict = false)
	{
		$postcode = trim($postcode);
		if (empty($postcode) || empty($country)) {
			return false;
		}

		// Can validation be handled by local functions or aliased ronanguilloux/IsoCodes functions?
		$methodName = "validate".trim(ucfirst(strtolower($country)));
		
		if (!is_callable(array(__CLASS__, $methodName))) {
			// Can validation be handled by a basic function from sirprize/postal-code-validator?
			$validator = new SirprizeValidator();
			if ($validator->hasCountry(strtoupper($country))) {
				return $validator->isValid(strtoupper($country), $postcode);
			}

			// If we can't validate it by country, don't mark it as invalid
			// Maybe throw error?
			return true;
		}

		return call_user_func_array(array(__CLASS__, $methodName), array($postcode, $strict));
	}

	public static function validateCa($postcode, $strict = false)
	{
		return parent::validateCanada($postcode);
	}

	public static function validateNl($postcode, $strict = false)
	{
		return parent::validateNetherlands($postcode);
	}

	public static function validateFr($postcode, $strict = false)
	{
		return parent::validateFrance($postcode);
	}

	public static function validateAu($postcode, $strict = false)
	{
		$regexp = "/^\d{4}$/";

		// Simplest 4-digit check
		if (preg_match($regexp, $postcode)) {
			if ($strict) {
				
				// Look up from defined list
				// https://postcode.auspost.com.au/free_display.html?id=1&download=1
				
				$postcodes = new SplFileObject(dirname(__FILE__).'/au.postcode.txt');
				
				while (!$postcodes->eof())
				{
					if ($postcode == trim($postcodes->fgets())) return true;
				}
				
				$postcodes = null;
			}
			else {
				return true;
			}
		}

		return false;
	}
}
