<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        if($x == strrev($x)) {
            return true;
        }
        return false;
    }
}
$solution = new Solution();
echo "Input: x = 121 <br>";
echo "Expected Output: true <br>";
echo "Output: " . json_encode($solution->isPalindrome(121)) . "<br>";
echo "Explanation: From left to right, it reads 121. From right to left, it becomes 121. Therefore it is a palindrome.<br>";
