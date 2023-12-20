<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if($x == 0) {
            return $x;
        }
        $start = 1;
        $end = $x;
        while($start <= $end) {
            $mid = $start + floor(($end-$start)/ 2);

            if ($mid * $mid ==$x) {
                return $mid;
            } elseif($mid *$mid < $x) {
                $start = $mid + 1;
            }else {
                $end = $mid -1;
            }
        }
        return $end;
    }
}

$solution = new Solution();
echo "Input: 4 <br> ";
echo "Expected Output: 2 <br>";
echo "Output: " . $solution->mySqrt(4) . "<br>";
echo "Explanation: 2 * 2 = 4, therefore 2 is the square root of 4.<br>";
?>
