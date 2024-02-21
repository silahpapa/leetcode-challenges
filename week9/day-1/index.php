<?php
class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Integer
     */
    function minDistance($word1, $word2) {
        $m = strlen($word1);
        $n=strlen($word2);
        $dp = array_fill(0,$m+1,array_fill(0,$n+1, 0));

        for($i=0;$i<=$m;$i++){
            $dp[$i][0] = $i;
        }

        for($j=0;$j<=$n;$j++) {
            $dp[0][$j] = $j;
        }

        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($word1[$i - 1] == $word2[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } else {
                    $dp[$i][$j] = 1 + min($dp[$i - 1][$j - 1], // Replace
                            $dp[$i][$j - 1],     // Insert
                            $dp[$i - 1][$j]);    // Delete
                }
            }
        }
        return $dp[$m][$n];

    }
}
$solution = new Solution();
echo "input: horse, ros <br>";
echo "expected output: 3 <br>";
echo "output: " . $solution->minDistance("horse", "ros") . "<br>";

