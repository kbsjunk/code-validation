<?php namespace Kitbs\CodeValidation\Validator;

use IsoCodes\IsoCodeInterface;

/**
 * Class TFN
 *
 * A tax file number (TFN) is a number issued by the Australian Taxation Office (ATO) to identify an
 * individual or organisation for tax purposes.[1] Each taxpaying entity (an individual, company,
 * superannuation fund, partnership, or trust) has a unique TFN, which has 8 or 9 digits.
 *
 * @package
 * @source
 * @link    http://en.wikipedia.org/wiki/Tax_file_number
 */

class Tfn implements IsoCodeInterface
{
    /**
     * TFN validation
     *
     * @param string $tfn The TFN
     *
     * @return bool
     */
    public static function validate($tfn)
    {
        $tfn = str_replace(" ", "", $tfn);
        $tfnLen = strlen($tfn);

        if (is_numeric($tfn) && ($tfnLen == 8 || $tfnLen == 9)) {
            $sum = 0;

            // Multiply each of the digits by its weighting factor, summing the products
            for ($position = 0; $position < $tfnLen; $position++) {
                // Get the value of the current digit
                $current = intval($tfn[$position]);

                switch ($position+1) {
                    case 1:
                    $sum = $sum + (1 * $current);
                    break;
                    case 2:
                    $sum = $sum + (4 * $current);
                    break;
                    case 3:
                    $sum = $sum + (3 * $current);
                    break;
                    case 4:
                    $sum = $sum + (7 * $current);
                    break;
                    case 5:
                    $sum = $sum + (5 * $current);
                    break;
                    case 6:
                    $sum = $sum + (8 * $current);
                    break;
                    case 7:
                    $sum = $sum + (6 * $current);
                    break;
                    case 8:
                    $sum = $sum + (9 * $current);
                    break;
                    case 9:
                    $sum = $sum + (10 * $current);
                    break;
                }
            }
            //If total is exactly divisble by 11 then it is an TFN
            return ($sum % 11 == 0);
        }

        return false;
    }
}
