<?php
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        if ($n <= 1) {
            return "1";
        }

        $prev = "1"; // Start with the base case
        $result = "";

        for ($i = 2; $i <= $n; $i++) {
            $count = 1;
            $currentChar = $prev[0];
            $result = "";

            // Iterate through the previous string
            for ($j = 1; $j < strlen($prev); $j++) {
                if ($prev[$j] === $currentChar) {
                    $count++;
                } else {
                    $result .= "$count$currentChar";
                    $count = 1;
                    $currentChar = $prev[$j];
                }
            }

            // Add the last group
            $result .= "$count$currentChar";

            $prev = $result; // Update for next iteration
        }

        return $result;
    }
}
