<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        sort($nums);
        $nums = array_unique($nums);
        rsort($nums);
        if(count($nums)>= 3) {
            return $nums[2];
        }
        return $nums[0];

    }
}
$solution = new Solution();
echo "input: [3,2,1] <br>";
echo "expected output: 1 <br>";
echo "output: " . $solution->thirdMax([3,2,1]) . "<br>";
