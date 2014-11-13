<?php namespace Kitbs\CodeValidation\Validator;

use IsoCodes\IsoCodeInterface;

/**
 * Class ABN
 *
 * The Australian Business Number, or ABN, is a unique identifier issued by the Australian Business Register
 * (ABR) which is operated by the Australian Taxation Office (ATO). The ABN is a component of the reform
 * known as A New Tax System introduced by John Howard's Liberal government on 1 July 2000.
 *
 * @package 
 * @source  
 * @link    http://en.wikipedia.org/wiki/Australian_Business_Number
 */

class Abn implements IsoCodeInterface {
	
    /**
     * ABN validation
     *
     * @param string $abn The ABN
     *
     * @return bool
     */
	public static function validate($abn)
    {
 
        $abn = str_replace(" ", "", $abn);
        $abnLen = strlen($abn);
 
        if (is_numeric($abn) && $abnLen == 11) {
 
            $sum = 0;
 
            // Multiply each of the digits by its weighting factor, summing the products        
            for ($position=0; $position < $abnLen; $position++) {
 
                // Get the value of the current digit
                $current = intval($abn[$position]);
 
                switch ($position+1) {
                    case 1:
                    $sum = $sum + (10 * ($current - 1));
                    break;
                    case 2:
                    $sum = $sum + (1 * $current);
                    break;
                    case 3:
                    $sum = $sum + (3 * $current);
                    break;
                    case 4:
                    $sum = $sum + (5 * $current);
                    break;
                    case 5:
                    $sum = $sum + (7 * $current);
                    break;
                    case 6:
                    $sum = $sum + (9 * $current);
                    break;
                    case 7:
                    $sum = $sum + (11 * $current);
                    break;
                    case 8:
                    $sum = $sum + (13 * $current);
                    break;
                    case 9:
                    $sum = $sum + (15 * $current);
                    break;
                    case 10:
                    $sum = $sum + (17 * $current);
                    break;
                    case 11:
                    $sum = $sum + (19 * $current);
                    break;
                }
 
            }
            //If total is exactly divisble by 89 then it is an ABN
            return ($sum % 89 == 0);
        }
 
        return false;
    }
	
}