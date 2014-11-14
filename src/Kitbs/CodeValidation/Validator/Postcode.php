<?php namespace Kitbs\CodeValidation\Validator;

use IsoCodes\ZipCode;
use Sirprize\PostalCodeValidator\Validator as SirprizeValidator;

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

    public static function validate($postcode, $country)
    {
        $postcode = trim($postcode);
        if (empty($postcode) || empty($country)) {
            // Don't force or imply required. Must use Laravel's `required` rule
            return true;
        }

        // Can validation be handled by local functions or aliased ronanguilloux/IsoCodes functions?
        $methodName = "validate".trim(ucfirst(strtolower($country)));
        if (!is_callable(array(__CLASS__, $methodName))) {
            // Can validation be handled by a basic function from sirprize/postal-code-validator?
            $validator = new SirprizeValidator();
            if ($validator->hasCountry(strtoupper($country))) {
                return $validator->isValid(strtoupper($country), $postcode);
            }

            // If we can't validate it, don't mark it as invalid
            return true;
        }

        return call_user_func_array(array(__CLASS__, $methodName), array($postcode));
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
