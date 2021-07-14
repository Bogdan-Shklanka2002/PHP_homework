


<?php
/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater than 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute)
{
    $check = ceil($minute/15);
    switch($check){
        case 0: 
        case 1: return 'first'; break;
        case 2: return 'second'; break;
        case 3: return 'third'; break;
        case 4: return 'fourth'; break;
        default: 
            throw new InvalidArgumentException('Minute is greater than 60!');
      }

}

/**
 * The $year variable contains a year (i.e. 1995 or 2020 etc).
 * Return true if the year is Leap or false otherwise.
 * Throw InvalidArgumentException if $year is lower than 1900.
 * @see https://en.wikipedia.org/wiki/Leap_year
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $year
 * @return boolean
 * @throws InvalidArgumentException
 */
function isLeapYear(int $year)
{
    if($year > 1900){
        return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);
    }
    throw new InvalidArgumentException('Year is lower than 1900');
}

/**
 * The $input variable contains a string of six digits (like '123456' or '385934').
 * Return true if the sum of the first three digits is equal with the sum of last three ones
 * (i.e. in first case 1+2+3 not equal with 4+5+6 - need to return false).
 * Throw InvalidArgumentException if $input contains more or less than 6 digits.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  string  $input
 * @return boolean
 * @throws InvalidArgumentException
 */
function isSumEqual(string $input)
{
    
    $digits = str_split($input);
    if(count($digits) == 6){    
        $num1 = 0;
        $num2 = 0;
        for($i = 0; $i < count($digits); $i++){
            if($i<(count($digits)/2)){
                $num1+=$digits[$i];
            } else if($i>=(count($digits)/2)){
                $num2+=$digits[$i];
            }
        }
        if($num1 == $num2){
            return true;
        } else {
            return false;
        }

    } else{
        throw new InvalidArgumentException("Inputs contains more or less than 6 digits!");
    }

}