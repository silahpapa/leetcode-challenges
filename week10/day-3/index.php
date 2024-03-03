<?php
class Solution {

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $n = strlen($s);
        $dp = array_fill(0, $n + 1, false);
        $dp[0] = true;

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($dp[$j] && in_array(substr($s, $j, $i - $j), $wordDict)) {
                    $dp[$i] = true;
                    break;
                }
            }
        }

        return $dp[$n];
    }
}
$solution = new Solution();
echo "input: s = 'leetcode', wordDict = ['leet','code'] <br>";
echo "expected output: true <br>";
echo "output: " . $solution->wordBreak('leetcode', ['leet','code']) . "<br>";
echo "<br>";
