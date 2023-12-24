<?php
class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {
        $dp = array_fill(0, strlen($s) + 1, array_fill(0, strlen($p) + 1, false));
        $dp[0][0] = true;

        for ($j = 1; $j <= strlen($p); $j++) {
            if ($p[$j - 1] == '*' && $dp[0][$j - 2]) {
                $dp[0][$j] = true;
            }
        }

        for ($i = 1; $i <= strlen($s); $i++) {
            for ($j = 1; $j <= strlen($p); $j++) {
                if ($p[$j - 1] == $s[$i - 1] || $p[$j - 1] == '.') {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } elseif ($p[$j - 1] == '*') {
                    $dp[$i][$j] = $dp[$i][$j - 2] || ($dp[$i - 1][$j] && ($s[$i - 1] == $p[$j - 2] || $p[$j - 2] == '.'));
                }
            }
        }
        return $dp[strlen($s) -1][strlen($p) -1];
    }
}
$solution = new Solution();
echo "Input: s = 'aab', p = 'c*a*b' <br>";
echo "Expected Output: true <br>";
echo "Output: " . json_encode($solution->isMatch("aab", "c*a*b")) . "<br>";
echo "Explanation: c can be repeated 0 times, a can be repeated 1 time. Therefore, it matches 'aab'.<br>";
