<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $n = count($nums);
        $expectedSum = ($n * ($n + 1)) / 2;
        $actualSum = array_sum($nums);
        return $expectedSum - $actualSum;
    }
}
$solution = new Solution();
echo "input: [3,0,1] <br>";
echo "expected output: 2 <br>";
echo "output: " . $solution->missingNumber([3,0,1]) . "<br>";
