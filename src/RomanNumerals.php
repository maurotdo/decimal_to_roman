<?php
/**
 * Created by PhpStorm.
 * User: maggi
 * Date: 10/04/14
 * Time: 21:26
 */

namespace CM14;

class RomanNumerals {

    public function convert($number)
    {
        if ($number > 3000) {
            return false;
        }

        $roman = "";

        $thousands = floor($number / 1000);
        if ($thousands > 0) {
            $roman .= $this->baseConverter($thousands, "M", null, null);
        }

        $hundreds = $thousands ? floor(($number % 1000) / 100) : floor($number / 100);
        if ($hundreds > 0) {
            $roman .= $this->baseConverter($hundreds, "C", "D", "M");
        }

        $tens = $thousands
            ? floor(($number % 1000 % 100) / 10)
            : $hundreds
                ? floor(($number % 100) / 10)
                : floor($number / 10);
        if ($tens > 0) {
            $roman .= $this->baseConverter($tens, "X", "L", "C");
        }

        $units = $number % 10;
        if ($units > 0) {
            $roman .= $this->baseConverter($units, "I", "V", "X");
        }

        return $roman;
    }

    /**
     * @param $number
     * @param $base
     * @param $half
     * @param $next
     * @return string
     */
    private function baseConverter($number, $base, $half, $next)
    {
        switch ($number) {
            case 1:
            case 2:
            case 3:
                $buf = "";
                foreach (range(1, $number) as $num) {
                    $buf .= $base;
                }
                return $buf;
                break;
            case 4:
                return $base . $half;
                break;
            case 5:
                return $half;
                break;
            case 6:
            case 7:
            case 8:
                $buf = $half;
                foreach (range(6, $number) as $num) {
                    $buf .= $base;
                }
                return $buf;
                break;
            case 9:
                return $base . $next;
                break;
            case 10:
                return $next;
                break;

            default:
                break;
        }
    }


} 