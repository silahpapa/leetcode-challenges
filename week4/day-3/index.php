<?php
class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        if($num<0) {
            return false;
        }
        $left = 0;
        $right = $num;
        while($left <=$right) {
            $mid = $left + floor(($right - $left)/2);
            $midSqr = $mid * $mid;
            if($midSqr ==$num) {
                return true;
            } elseif($midSqr < $num) {
                $left = $mid + 1;
            }else {
                $right = $mid - 1;
            }

        }
        return false;

    }
}
$solution = new Solution();
echo "input: 16 <br>";
echo "expected output: true <br>";
echo "output: " . $solution->isPerfectSquare(16) . "<br>";

