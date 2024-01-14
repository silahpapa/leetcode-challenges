<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        for ($i = 0; $i < $n; $i++) {
            $nums1[$m + $i] = $nums2[$i];
        }
        sort($nums1);
    }
}
$solution = new Solution();
echo "Input: nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3 <br>";
echo "Expected Output: [1,2,2,3,5,6] <br>";
echo "Output: ";
$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;
$solution->merge($nums1, $m, $nums2, $n);
print_r($nums1);
echo "Explanation: The arrays we are merging are [1,2,3] and [2,5,6]. <br>";
echo "The result of the merge is [1,2,2,3,5,6] with the underlined elements coming from nums1. <br>";
