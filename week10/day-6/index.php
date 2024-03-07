<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $cleanedString = preg_replace('/[^a-z0-9]/i', '', $s);
        $cleanedString = strtolower($cleanedString);
        $length = strlen($cleanedString);
        for ($i = 0; $i < $length / 2; $i++) {
            if ($cleanedString[$i] != $cleanedString[$length - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}
$solution = new Solution();

