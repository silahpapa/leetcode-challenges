<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProductDifference($nums) {
        sort($nums);
        $n = count($nums);
        $product1 = $nums[$n-1] * $nums[$n-2]; // largest and second-largest
        $product2 = $nums[0] * $nums[1]; // smallest and second-smallest
        return $product1 - $product2;
    }
}
$solution = new Solution();
echo "input: [5,6,2,7,4] <br>";
echo "expected output: 34 <br>";
echo "output: " . $solution->maxProductDifference([5,6,2,7,4]) . "<br>";
