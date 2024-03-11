<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $stack = []; // Stack to keep track of indices of '(' characters
        $maxLen = 0;
        $stack[] = -1; // Push -1 to handle the edge case when the first character is ')'

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '(') {
                $stack[] = $i;
            } else {
                array_pop($stack); // Pop the topmost index
                if (empty($stack)) {
                    $stack[] = $i; // If stack becomes empty, push the current index
                } else {
                    $maxLen = max($maxLen, $i - end($stack)); // Calculate the length of valid parentheses
                }
            }
        }

        return $maxLen;
    }
}
