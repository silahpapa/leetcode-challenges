<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxCoins($nums) {
        $nums = array_merge([1], $nums, [1]);
        $n = count($nums);
        $dp = array_fill(0, $n, array_fill(0, $n, 0));

        for ($len = 2; $len < $n; $len++) {
            for ($left = 0; $left < $n - $len; $left++) {
                $right = $left + $len;
                for ($k = $left + 1; $k < $right; $k++) {
                    $dp[$left][$right] = max(
                        $dp[$left][$right],
                        $nums[$left] * $nums[$k] * $nums[$right] + $dp[$left][$k] + $dp[$k][$right]
                    );
                }
            }
        }

        return $dp[0][$n - 1];
    }
}
$solution = new Solution();
echo "Input: nums = [3,1,5,8] <br>";
echo "Expected Output: 167 <br>";
echo "Output: " . json_encode($solution->maxCoins([3,1,5,8])) . "<br>";
echo "Explanation: nums = [3,1,5,8] --> [3,5,8] --> [3,8] --> [8] --> [] <br>";
