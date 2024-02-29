<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        $compare = function($a, $b) {
            $ab = $a . $b;
            $ba = $b . $a;
            return strcmp($ba, $ab);
        };

        usort($nums, $compare);
        if ($nums[0] === 0) {
            return '0';
        }
        return implode('', $nums);
    }
}
$solution = new Solution();
echo "input: [10,2] <br>";
echo "expected output: '210' <br>";
