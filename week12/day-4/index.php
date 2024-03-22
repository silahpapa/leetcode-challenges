<?php
class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {
        $sLength = strlen($s);
        $pLength = strlen($p);

        // Create a 2D array to store intermediate results
        $dp = array_fill(0, $sLength + 1, array_fill(0, $pLength + 1, false));

        // Empty pattern matches empty string
        $dp[0][0] = true;

        // Handling '*' matching empty string
        for ($j = 1; $j <= $pLength; $j++) {
            if ($p[$j - 1] == '*') {
                $dp[0][$j] = $dp[0][$j - 1];
            }
        }

        // Dynamic programming approach to fill the dp array
        for ($i = 1; $i <= $sLength; $i++) {
            for ($j = 1; $j <= $pLength; $j++) {
                if ($p[$j - 1] == '*' ) {
                    // '*' can match 0 or more characters
                    $dp[$i][$j] = $dp[$i - 1][$j] || $dp[$i][$j - 1];
                } elseif ($p[$j - 1] == '?' || $s[$i - 1] == $p[$j - 1]) {
                    // '?' matches any single character or characters match
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                }
            }
        }

        // Final result is at the last cell of the dp array
        return $dp[$sLength][$pLength];
    }
}
