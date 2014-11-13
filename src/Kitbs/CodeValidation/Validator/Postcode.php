<?php namespace Kitbs\CodeValidation\Validator;

use IsoCodes\ZipCode;

/**
 * Class Postcode
 *
 * Extend the IsoCodes\ZipCode class
 *
 * @package 
 * @source  
 * @link    
 */

class Postcode extends ZipCode {

	/**
     * Postcode validation
     *
     * @param string $postcode The Postcode
     * @param string $country The Country
     *
     * @return bool
     */

    public static function validate($zipcode, $country)
    {
        $zipcode = trim($zipcode);
        if (empty($zipcode)) {
			return false;
        }
        $methodName = "validate" . trim(ucfirst(strtolower($country)));
        if (!is_callable(array(__CLASS__, $methodName))) {
            return false;
        }

        return call_user_func_array(array(__CLASS__, $methodName), array($zipcode));
    }

	public static function validateCa($postcode)
	{
		return parent::validateCanada($postcode);
	}

	public static function validateNl($postcode)
	{
		return parent::validateNetherlands($postcode);
	}

	public static function validateFr($postcode)
	{
		return parent::validateFrance($postcode);
	}

	public static function validateAu($postcode)
	{
        $regexp = "/^\d{4}$/"; //FIXME

        return (boolean) preg_match($regexp, $postcode);
	}



}