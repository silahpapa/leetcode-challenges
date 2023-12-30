<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $intmin = -2**31;
        $intmax = 2**31 -1;
        if ($x>= $intmax || $x <=$intmin) {
            return 0;
        }
        $isNegative = false;
        if($x <0) {
            $isNegative = true;
            $x *=-1;
        }
        $reversed = strrev(strval($x));
        $result = intval($reversed);
        if ($isNegative) {
            $result *=-1;
        }
        if($result >= $intmax || $result <=$intmin) {
            return 0;
        }
        return $result;
    }
}
$solution = new Solution();
echo "Input: x = 123 <br>";
echo "Expected Output: 321 <br>";
echo "Output: " . json_encode($solution->reverse(123)) . "<br>";
