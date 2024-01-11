<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $new_arr = array_merge($nums1, $nums2);
        sort($new_arr);
        $count = count($new_arr);
        if ($count % 2 == 0) {
            // If the total number of elements is even, return the middle value
            return ($new_arr[$count / 2 - 1] + $new_arr[$count / 2]) / 2;
        } else {
            // If the total number of elements is odd, return the middle value
            return $new_arr[($count - 1) / 2];
        }


    }
}
$solution = new Solution();
echo "Input: nums1 = [1,3], nums2 = [2] <br>";
echo "Expected Output: 2.00000 <br>";
echo "Output: " . $solution->findMedianSortedArrays([1,3], [2]) . "<br>";
echo "Explanation: merged array = [1,2,3] and median is 2.<br>";
