<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $result = '';
        $carry = 0;
        $lenA = strlen($a);
        $lenB = strlen($b);

        $maxLen = max($lenA, $lenB);

        for ($i = 0; $i < $maxLen; $i++) {
            $digitA = $i < $lenA ? (int)$a[$lenA - 1 - $i] : 0;
            $digitB = $i < $lenB ? (int)$b[$lenB - 1 - $i] : 0;

            $sum = $digitA + $digitB + $carry;

            $result = ($sum % 2) . $result;

            $carry = (int)($sum / 2);
        }

        if ($carry > 0) {
            $result = $carry . $result;
        }

        return $result;
    }
}
