<?php
namespace hearot\AngleOperations;

/**
 *  The AngleOperations class is used to do operations
 *  with degrees, primes and seconds.
 * @author Hearot
 * @copyright 2017
 * @license GNU Affero General Public License
 */
class AngleOperations
{
    /**
     * This function extracts all numbers from arrays.
     *
     * @param string $first
     * @param string $second
     * @return array
     */
    private static function getNumbers($first, $second)
    {
        if (preg_match_all('/-?\d+/', $first, $first_array) and preg_match_all('/-?\d+/', $second, $second_array)) {
            return array($first_array[0], $second_array[0]);
        } else {
            return false;
        }
    }
    /**
     * This function sums two addends.
     *
     * @param string $addend
     * @param string $second_addend
     * @param boolean $normal_form If you want to get the result as normal form
     * @param boolean $over_360 If you want to get the result without editing its if it's over 360
     * @return string
     */
    public static function addition($addend = 0, $second_addend = 0, $normal_form = true, $over_360 = false)
    {
        $array_addends = SELF::getNumbers($addend, $second_addend);
        if ($array_addends) {
            $addend_array        = $array_addends[0];
            $second_addend_array = $array_addends[1];
            $degrees             = $addend_array[0] + $second_addend_array[0];
            if (!isset($addend_array[1])) {
                $addend_array[1] = 0;
            }
            if (!isset($second_addend_array[1])) {
                $second_addend_array[1] = 0;
            }
            if (!isset($addend_array[2])) {
                $addend_array[2] = 0;
            }
            if (!isset($second_addend_array[2])) {
                $second_addend_array[2] = 0;
            }
            $primes              = $addend_array[1] + $second_addend_array[1];
            $seconds             = $addend_array[2] + $second_addend_array[2];
            if ($normal_form === false) {
                return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
            }
            if ($seconds >= 60) {
                $add_to_primes = intdiv($seconds, 60);
                $primes        = $primes + $add_to_primes;
                $seconds       = $seconds % 60;
            }
            if ($primes >= 60) {
                $add_to_degrees = intdiv($primes, 60);
                $degrees        = $degrees + $add_to_degrees;
                $primes         = $primes % 60;
            }
            if ($over_360 === false and $degrees >= 360) {
                $degrees = 360;
            }
            return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
        }
    }
    /**
     * This function does a substration between a minuend and a subtrahend.
     *
     * @param string $minuend
     * @param string $subtrahend
     * @param boolean $normal_form If you want to get the result as normal form
     * @param boolean $over_360 If you want to get the result without editing its if it's over 360
     * @return string
     */
    public static function subtraction($minuend = 0, $subtrahend = 0, $normal_form = true, $over_360 = false)
    {
        $array_parameters = SELF::getNumbers($minuend, $subtrahend);
        if ($array_parameters) {
            $minuend_array        = $array_parameters[0];
            $subtrahend_array = $array_parameters[1];
            $degrees             = $minuend_array[0] - $subtrahend_array[0];
            if (!isset($minuend_array[1])) {
                $minuend_array[1] = 0;
            }
            if (!isset($subtrahend_array[1])) {
                $subtrahend_array[1] = 0;
            }
            if (!isset($minuend_array[2])) {
                $minuend_array[2] = 0;
            }
            if (!isset($subtrahend_array[2])) {
                $subtrahend_array[2] = 0;
            }
            $primes              = $minuend_array[1] - $subtrahend_array[1];
            $seconds             = $minuend_array[2] - $subtrahend_array[2];
            if ($normal_form === false) {
                return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
            }
            if ($seconds >= 60) {
                $add_to_primes = intdiv($seconds, 60);
                $primes        = $primes + $add_to_primes;
                $seconds       = $seconds % 60;
            }
            if ($primes >= 60) {
                $add_to_degrees = intdiv($primes, 60);
                $degrees        = $degrees + $add_to_degrees;
                $primes         = $primes % 60;
            }
            if ($over_360 === false and $degrees >= 360) {
                $degrees = 360;
            }
            return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
        }
    }
    /**
     * This function multiplicates two factors.
     *
     * @param string $factor
     * @param string $second_factor
     * @param boolean $normal_form If you want to get the result as normal form
     * @param boolean $over_360 If you want to get the result without editing its if it's over 360
     * @return string
     */
    public static function multiplication($factor = 0, $second_factor = 0, $normal_form = true, $over_360 = false)
    {
        $array_factors = SELF::getNumbers($factor, $second_factor);
        if ($array_factors) {
            $factor_array        = $array_factors[0];
            $second_factor_array = $array_factors[1];
            $degrees             = $factor_array[0] * $second_factor_array[0];
            if (!isset($factor_array[1])) {
                $factor_array[1] = 0;
            }
            if (!isset($second_factor_array[1])) {
                $second_factor_array[1] = 0;
            }
            if (!isset($factor_array[2])) {
                $factor_array[2] = 0;
            }
            if (!isset($second_factor_array[2])) {
                $second_factor_array[2] = 0;
            }
            $primes              = $factor_array[1] * $second_factor_array[1];
            $seconds             = $factor_array[2] * $second_factor_array[2];
            if ($normal_form === false) {
                return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
            }
            if ($seconds >= 60) {
                $add_to_primes = intdiv($seconds, 60);
                $primes        = $primes + $add_to_primes;
                $seconds       = $seconds % 60;
            }
            if ($primes >= 60) {
                $add_to_degrees = intdiv($primes, 60);
                $degrees        = $degrees + $add_to_degrees;
                $primes         = $primes % 60;
            }
            if ($over_360 === false and $degrees >= 360) {
                $degrees = 360;
            }
            return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
        }
    }
    /**
     * This function does a division between a dividend and a divisor.
     *
     * @param string $dividend
     * @param string $divisor
     * @param boolean $normal_form If you want to get the result as normal form
     * @param boolean $over_360 If you want to get the result without editing its if it's over 360
     * @return string
     */
    public static function division($dividend = 0, $divisor = 0, $normal_form = true, $over_360 = false)
    {
        $array_parameters = SELF::getNumbers($dividend, $divisor);
        if ($array_parameters) {
            $dividend_array        = $array_parameters[0];
            $divisor_array = $array_parameters[1];
            if (($dividend_array[0] == 0 or $divisor_array[0] == 0) or ($dividend_array[0] == 0 and $divisor_array[0] == 0)) {
                $degrees = 0;
            } else {
                $degrees             = $dividend_array[0] / $divisor_array[0];
            }
            if (!isset($dividend_array[1])) {
                $dividend_array[1] = 0;
            }
            if (!isset($divisor_array[1])) {
                $divisor_array[1] = 0;
            }
            if (!isset($dividend_array[2])) {
                $dividend_array[2] = 0;
            }
            if (!isset($divisor_array[2])) {
                $divisor_array[2] = 0;
            }
            if (($dividend_array[1] == 0 or $divisor_array[1] == 0) or ($dividend_array[1] == 0 and $divisor_array[1] == 0)) {
                $primes = 0;
            } else {
                $primes              = $dividend_array[1] / $divisor_array[1];
            }
            if (($dividend_array[2] == 0 or $divisor_array[2] == 0) or ($dividend_array[2] == 0 and $divisor_array[2] == 0)) {
                $seconds = 0;
            } else {
                $seconds             = $dividend_array[2] / $divisor_array[2];
            }

            if ($normal_form === false) {
                return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
            }
            if ($seconds >= 60) {
                $add_to_primes = intdiv($seconds, 60);
                $primes        = $primes + $add_to_primes;
                $seconds       = $seconds % 60;
            }
            if ($primes >= 60) {
                $add_to_degrees = intdiv($primes, 60);
                $degrees        = $degrees + $add_to_degrees;
                $primes         = $primes % 60;
            }
            if ($over_360 === false and $degrees >= 360) {
                $degrees = 360;
            }
            return $degrees . '° ' . $primes . '\' ' . $seconds . '\'\'';
        }
    }
}
