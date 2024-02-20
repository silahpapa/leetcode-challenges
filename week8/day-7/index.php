<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $maxSum = $nums[0];
        $currentSum = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            $currentSum = max($nums[$i], $currentSum + $nums[$i]);
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum;
    }
}
$solution = new Solution();
echo "input: [-2,1,-3,4,-1,2,1,-5,4] <br>";
echo "expected output: 6 <br>";
echo "output: " . $solution->maxSubArray([-2,1,-3,4,-1,2,1,-5,4]) . "<br>";
