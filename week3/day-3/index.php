<?php
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $num = implode('', $digits);
        $num = bcadd($num, 1);
        return array_map('intval', str_split($num));
    }
}
$solution = new Solution();
echo "input: [1,2,3] <br>";
echo "expected output: [1,2,4] <br>";
echo "output: [" . implode(',', $solution->plusOne([1,2,3])) . "] <br>";
