<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $n = count($nums);

        if ($n === 0) {
            return 0;
        }

        $maxProduct = $minProduct = $result = $nums[0];

        for ($i = 1; $i < $n; $i++) {
            // Swap maxProduct and minProduct if the current element is negative
            if ($nums[$i] < 0) {
                $temp = $maxProduct;
                $maxProduct = $minProduct;
                $minProduct = $temp;
            }

            // Update maxProduct and minProduct
            $maxProduct = max($nums[$i], $maxProduct * $nums[$i]);
            $minProduct = min($nums[$i], $minProduct * $nums[$i]);

            // Update the result with the maximum product found so far
            $result = max($result, $maxProduct);
        }

        return $result;
    }
}
