<?php
/**
 * Created by PhpStorm.
 * User: maggi
 * Date: 10/04/14
 * Time: 21:05
 */

namespace CM14;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider decimalSamples
     */
    public function testConverter($roman, $decimal)
    {
        $converter = new RomanNumerals();
        $this->assertEquals($roman, $converter->convert($decimal));
    }

    public function decimalSamples()
    {
        return
            [
                [ "I", 1 ],
                [ "II", 2 ],
                [ "III", 3 ],
                [ "IV", 4 ],
                [ "V", 5 ],
                [ "VI", 6 ],
                [ "VII", 7 ],
                [ "VIII", 8 ],
                [ "IX", 9 ],
                [ "X", 10 ],
                [ "XXII", 22 ],
                [ "XXXVI", 36 ],
                [ "XLIX", 49 ],
                [ "L", 50 ],
                [ "LII", 52 ],
                [ "LXXIX", 79 ],
                [ "LXXXVII", 87 ],
                [ "XCI", 91 ],
                [ "XCIX", 99 ],
                [ "C", 100 ],
                [ "CCLXXIV", 274 ],
                [ "CD", 400 ],
                [ "CDXLI", 441 ],
                [ "DCCLXXVII", 777 ],
                [ "DCCCXCIX", 899 ],
                [ "CMXLIV", 944 ],
                [ "CMXCIX", 999 ],
                [ "M", 1000 ],
                [ "MI", 1001 ],
                [ "MDLXXXVII", 1587 ],
                [ "MMXIV", 2014 ],
                [ "MMM", 3000 ],
                [ false, 3001]
            ]
        ;
    }
} 