<?php namespace Kitbs\CodeValidation;

use Lang;

class CodeValidator extends \Illuminate\Validation\Validator
{
    public function validateIsbn($attribute, $value, $parameters)
    {
        return \IsoCodes\Isbn10::validate($value);
    }
	
    public function validateBban($attribute, $value, $parameters)
    {
        return \IsoCodes\Bban::validate($value);
    }
	
    public function validateEan13($attribute, $value, $parameters)
    {
        return \IsoCodes\Ean13::validate($value);
    }
	
    public function validateIban($attribute, $value, $parameters)
    {
        return \IsoCodes\Iban::validate($value);
    }
	
    public function validateCif($attribute, $value, $parameters)
    {
        return \IsoCodes\Cif::validate($value);
    }
	
    public function validateNif($attribute, $value, $parameters)
    {
        return \IsoCodes\Nif::validate($value);
    }
	
    public function validateCreditcard($attribute, $value, $parameters)
    {
        return \IsoCodes\CreditCard::validate($value);
    }

    public function validateAbn($attribute, $value, $parameters)
    {
        return \Kitbs\CodeValidation\Validator\Abn::validate($value);
    }

    public function validateTfn($attribute, $value, $parameters)
    {
        return \Kitbs\CodeValidation\Validator\Tfn::validate($value);
    }

    public function validatePostcode($attribute, $value, $parameters)
    {
        return \Kitbs\CodeValidation\Validator\Postcode::validate($value, @$parameters[0], @$parameters[1]);
    }

    public function validateZipcode($attribute, $value, $parameters)
    {
        return $this->validatePostcode($attribute, $value, $parameters);
    }

    protected function replacePostcode($message, $attribute, $rule, $parameters)
    {
        $country = Lang::get('code-validation::country.'.@$parameters[0]);

        if (stripos($country, 'code-validation::country') !== false) {
            return str_replace(':country', Lang::get('code-validation::validation.country-default'), $message);
        }

        return str_replace(':country', $country, $message);
    }

    protected function replaceZipcode($message, $attribute, $rule, $parameters)
    {
        return $this->replacePostcode($message, $attribute, $rule, $parameters);
    }

    public function validateNin($attribute, $value, $parameters)
    {
        return $value == 'foo';
    }

    public function validateNino($attribute, $value, $parameters)
    {
        return $this->validateNin($attribute, $value, $parameters);
    }
}
